<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class second_Controller extends AbstractController
{
    // ...
    /**
     * @Route("/blog")
    */
    //public function show()
    //{
      //  echo "hello world";
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    //}
    public function first_view() {
       return $this->render("test.html.twig",[
          "number"=>"21"
       ]);
       //return new Response("<h1>hello world</h1>");
    }
    public function blog() { 
       return $this->render("blog.php.twig",[
          "blog_ttl"=>"heloo",
       ]);
    }
}

?>
