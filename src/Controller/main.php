<?php

namespace App\Controller;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class main{
  #[Route('/')]
public function home(){

  return new Response('<strong>Starshop</strong>: your monopoly-busting option for Starship parts!');


}


}