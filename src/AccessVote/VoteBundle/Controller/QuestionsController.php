<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 16/02/2019
 * Time: 02:15
 */
namespace AccessVote\VoteBundle\Controller;

use AccessVote\VoteBundle\Entity\Questions;
use AccessVote\VoteBundle\Entity\Propositions;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionsController extends Controller
{

    /*
    Fonction Pour L'Affichage Des Question
    */
    public function ListAction() {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('AccessVoteVoteBundle:Questions')->findAll();

        return $this->render('AccessVoteVoteBundle:Front:ListQuestions.html.twig', array('modeles' => $modele));

    }

    /*
    Fonction Pour L'ajout d'un Question
    */
    public function ajoutAction() {
        $request = $this->get('request_stack')->getCurrentRequest();

        if ($request->getMethod() == 'POST') {

            $id = $request->get('id');
            $question = $request->get('question');
            $proposition = $request->get('proposition');

            $modele = new Questions();

            $modele->setId($id);
            $modele->setQuestion($question);
            $modele->setPropositions($proposition);

            $em = $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
            return $this->redirect($this->generateUrl("listecontrat"));
        }
        return $this->render('AccessVoteVoteBundle:Back:AjoutQuestions.html.twig');
    }

    /*
    Fonction Pour La supression d'un Question
    */
    public function supprimersAction($id) {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('AccessVoteVoteBundle:Questions')->find($id);
        $em->remove($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('listecontrat'));
    }










}