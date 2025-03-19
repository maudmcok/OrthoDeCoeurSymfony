<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\ErrorHandler\Exception\FlattenException;

class ErrorController extends AbstractController
{
    private bool $debug;

    public function __construct(bool $debug)
    {
        $this->debug = $debug;
    }
    public function show(FlattenException $exception): Response
    {
        return $this->redirectToRoute('app_main', [], Response::HTTP_FOUND);
    }
}