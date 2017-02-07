<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Ce controlleur s'occupe de retourner les vues de l'application
 *
 * @author loic
 */
class ViewController extends Controller{
    
    /**
     * La route correspond à l'URI passée dans la requete HTTP
     * ici l'URI = yellow
     * @Route("/yellow",name="y")
     * @return Response correspond a la couleur passée dans l'URI
     */
    public function getYellow(Request $r){
        return $this->render("default/couleurs/yellow.twig");
    }
    /**
     * La methode getRed prend en param $r qui est de type Request
     * @Route("/red",name="r")
     * @return Response correspond a la couleur passée dans l'URI
     */
    public function getRed(Request $r){
        // getMethod()retourne le type de la request
        //  Si $r est de type GET 
        if($r->getMethod() == "GET"){
            // On retourne une page Web
            return $this->render("default/couleurs/red.twig");
        }else{
            $reponse = new Response("Red");
            return $reponse;
        }
        
        
    }
    
    /**
     * @Route("/blue",name="b")
     * @return Response
     */
    public function getBlue(Request $r){
        return $this->render("default/couleurs/blue.twig");
    }
    
    /**
     * @Route("/green",name="g")
     * @return Response
     */
    public function getGreen(Request $r){
        return $this->render("default/couleurs/green.twig");
    }
}
