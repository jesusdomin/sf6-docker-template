<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CheckStatusController
{
    #[Route('/check-status')]
    public function checkStatus(): JsonResponse
    {
        return new JsonResponse([
           'status' => 'ok',
        ]);
    }
}
