<?php
/**
 * Created by PhpStorm.
 * User: whonore
 * Date: 18/06/13
 * Time: 12:42 PM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response(" Hello everybody!");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {

        return new Response(sprintf('Nouveau article: %s',$slug));
    }
}