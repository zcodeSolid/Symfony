<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class main
{
    #[Route('/')]
    public function home()
    {
        return new Response('<strong>Starshop</strong>: your monopoly-busting option for Starship parts!');
    }
}
