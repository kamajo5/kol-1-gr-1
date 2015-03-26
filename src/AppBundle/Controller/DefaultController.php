<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }


    /* A */

    /* B */

    /* C */
    
    /**
     * @Route("/careless.html", name="careless")
     */
    public function carelessAction()
    {
        return $this->render('default/careless.html.twig');
    }
    
    /* D */

    /* E */

    /* F */

    /* G */

    /* H */
     /**
     * @Route("/prevention.html", name="prevention")
     */
    public function preventionAction()
    {
        return $this->render('default/prevention.html.twig');
    }

    /* I */

    /* J */

    /* K */
/**
 * @Route("/keep.html", name="keep")
 */
public function keepAction()
{
    return $this->render('default/keep.html.twig');
}

    /* L */
/**
 * @Route("/Love.html", name="Love")
 */
public function  LoveAction()
{
    return $this->render('default/Love.html.twig');
}


    /* M */

    /* N */
    /**
     * @Route("/never.html", name="never")
     */
    public function neverAction()
    {
        return $this->render('default/never.html.twig');
    }
    /* O */

    /* P */

    /* Q */
    /**
    * @Route("/Quickly.html", name="Quickly")
    */
    public function QuicklyAction()
    {
     return $this->render('default/Quickly.html.twig');
    }
    /* R */
    /**
    * @Route("/reap.html", name="reap")
    */
    public function reapAction()
    {
     return $this->render('default/reap.html.twig');
    }
    /* S */

    /* T */

    /* U */

    /* V */

    /* W */

    /* X */

    /* Y */

    /* Z */

}
