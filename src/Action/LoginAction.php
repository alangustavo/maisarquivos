<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\DAO\UsersDAO;

final class LoginAction
{
    public function __invoke(Request $request, Response $response): Response
    {
        $data = $request->getParsedBody();
        $user = new UsersDAO;
        $user->getUserByEmail("alan.gustavo@gmail.com");
        $response->getBody()->write(json_encode([
            'Action' => 'Login.',
            'Enviroment' => $_ENV["ENVIROMENT"]
        ]));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
