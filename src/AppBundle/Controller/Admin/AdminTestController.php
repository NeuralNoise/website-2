<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AdminTestController
 *
 * @author ajdearmond
 */
class AdminTestController extends Controller {
    /**
     * @Route("/test", host="admin.{domain}", defaults={"domain":"%domain%"}, requirements={"domain":"%domain%"})
     */
    public function testAction() {
        return new Response("Test admin page successfully rendered, or this is an alternate universe");
    }
}
