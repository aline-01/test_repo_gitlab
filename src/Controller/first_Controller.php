<?php 
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class first_Controller
{
    //Route("/test");
    //public function number(): Response
    //{
        //$number = random_int(0, 100);

        //return new Response(
        //    '<html><body>Lucky number: '.$number.'</body></html>'
        //);
    //}
    public function say_hello($ttl){
        return new Response("<h1>Hello There {$ttl}</h1>");
    }
}

?>
