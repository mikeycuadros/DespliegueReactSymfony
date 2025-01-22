<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class MCTController
{
#[Route('/api/mct', name: 'api_mct')]
public function index(): Response
{
return new Response('Symfony de Miguel Cuadros Toral Responde a la llamada de
React');
}
}
