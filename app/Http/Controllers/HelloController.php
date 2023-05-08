<?php

namespace App\Http\Controllers;

use Spatie\RouteAttributes\Attributes\Get;

class HelloController extends Controller
{
    #[Get('api/hello')]
    public function __invoke(): string
    {
        return "Hello, Client!";
    }
}
