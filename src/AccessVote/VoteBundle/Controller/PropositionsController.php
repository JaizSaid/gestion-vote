<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 16/02/2019
 * Time: 02:15
 */
namespace AccessVote\VoteBundle\Controller;

use AccessVote\VoteBundle\Entity\Propositions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PropositionsController extends Controller
{

    /*
    Fonction Pour L'Affichage Des Propositions
    */
    public function ListAction() {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('AccessVoteVoteBundle:Propositions')->findAll();
        return $this->render('AccessVoteVoteBundle:Front:ListPropositions.html.twig', array('modeles' => $modele));

    }

    /*
    Fonction Pour L'ajout d'une Proposition
    */
    public function ajoutAction() {
        $request = $this->get('request_stack')->getCurrentRequest();

        if ($request->getMethod() == 'POST') {

            $id = $request->get('id');
            $proposition1 = $request->get('proposition1');
            $proposition2 = $request->get('proposition2');
            $proposition3 = $request->get('proposition3');

            $modele = new Propositions();

            $modele->setId($id);
            $modele->setProposition1($proposition1);
            $modele->setProposition2($proposition2);
            $modele->setProposition3($proposition3);

            $em = $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
            return $this->redirect($this->generateUrl("listpros"));
        }
        return $this->render('AccessVoteVoteBundle:Back:AjoutPropositions.html.twig');
    }

    /*
    Fonction Pour La supression d'une Proposition
    */
    public function supprimersAction($id) {
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('AccessVoteVoteBundle:Propositions')->find($id);
        $em->remove($modele);
        $em->flush();
        return $this->redirect($this->generateUrl('listpros'));
    }










}