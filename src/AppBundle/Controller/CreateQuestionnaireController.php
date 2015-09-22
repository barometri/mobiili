<?php
/**
 * Created by PhpStorm.
 * User: Jyri
 * Date: 9/22/2015
 * Time: 11:05 AM
 */
// src/AppBundle/Controller/CreateQuestionnaireController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    Protected $authToken = 0;

    public function runController {



        $this->testLogin("a",$level);

        private function testLogin ($auth, $level)
        {   // place holder values, doesn't do anything yet

            if (($auth == "a") && ($level == 4)) {

            $this->authToken = 1;


        } else {

            giveError();
        }
    }

    public function giveError ()
    {

        Echo 'something fucked up';

    }



createActionHistory
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
        }
}
?>