<?php

namespace AccessVote\VoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AccessVoteVoteBundle:Default:index.html.twig');
    }
}
