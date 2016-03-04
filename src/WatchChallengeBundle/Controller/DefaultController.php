<?php

namespace WatchChallengeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WatchChallengeBundle:Default:index.html.twig');
    }
}
