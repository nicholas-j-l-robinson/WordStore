<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/")
 */
class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepageAction()
    {
        return $this->render('AppBundle:Main:base.html.twig');
    }
    
    /**
     * @Route("/wordquery", name="query")
     * @Method({"POST"})
     */
    public function wordQueryAction()
    {
        $request = $this->container->get('request');
        
        $searchText = $request->request->get('searchText');
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Words');
        $qb = $repository->createQueryBuilder('w');
        $qb->where($qb->expr()->like("w.word", ":searchtext"))
            ->setParameter('searchtext', $searchText.'%')
            ->groupBy('w.word');
        $query = $qb->getQuery();
        $words = $query->getResult();
        
        $parameters = array(
            "words" => $words
        );
        
        return $this->render('AppBundle:Main:wordResults.html.twig', $parameters);
    }
    
    /**
     * @Route("/worddefinition", name="definitions")
     * @Method({"POST"})
     */
    public function wordDefinitionAction()
    {
        $request = $this->container->get('request');
        
        $searchWord = $request->request->get('searchWord');
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Words');
        $qb = $repository->createQueryBuilder('w');
        $qb->where("w.word = :searchword")
            ->setParameter('searchword', $searchWord);
        $query = $qb->getQuery();
        $definitions = $query->getResult();
        
        $parameters = array(
            "definitions" => $definitions
        );
        
        return $this->render('AppBundle:Main:definitionResults.html.twig', $parameters);
    }
}
