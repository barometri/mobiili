<?php
/**
 * Created by PhpStorm.
 * User: Jyri
 * Date: 9/13/2015
 * Time: 7:32 PM
 *
 */

//src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class LuckyController extends Controller
{
    /**
     * @Route("/Lucky/Number")
     */

    public function numberAction()
    {

        $number = rand(0,100);

        return new Response(
            '<html><body>Lucky number'.$number.'</body></html>'
        );
    }
}


