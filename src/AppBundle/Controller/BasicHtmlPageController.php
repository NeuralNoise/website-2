<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BasicHtmlPageController extends Controller {

    /**
     * @Route("/pageNotFound", name="pageNotFound")
     */
    public function notFoundAction() {
        return new Response("The page was not found");
    }

    /**
     * @Route("/{page}", defaults={"page": "index"}, name="basicHtml_show")
     */
    public function showAction($page) {
        $pageEntity = $this->getDoctrine()
                ->getRepository('AppBundle:BasicHtmlPageEntity')
                ->findOneByLocation($page);

        if (!$pageEntity) {
            // TODO: What needs to be done when the page does not exist.
            return new Response("The page was not found");
        } else {

            $html = $pageEntity->getHtml();
            $title = $pageEntity->getTitle();

            return $this->render('default/basic.html.twig', ['html' => $html, 'title' => $title]);
            
            // TODO: Why I didn't just pass $pageEntity is beyond me.
        }
    }
    
    /**
     * @Route(
     *      "/pages/edit/{page}", 
     *      name="basicHtml_edit", 
     *      host="admin.{domain}",
     *      defaults={"domain":"%domain%"},
     *      requirements={"domain":"%domain%"} 
     * )
     */
    public function openAction($page) {
         $pageEntity = $this->getDoctrine()
                ->getRepository('AppBundle:BasicHtmlPageEntity')
                ->findOneByLocation($page);

        if (!$pageEntity) {
            // TODO: What needs to be done when the page does not exist.
            return new Response("The page was not found");
        } else {
            
        }
    }

}
