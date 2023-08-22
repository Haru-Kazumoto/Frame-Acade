<?php

namespace App\Providers\Faker;

use Faker\Provider\Base;

class FrameworkProvider extends Base
{
    protected static $names = [
        "SpringBoot",
        "Laravel",
        "Codeigniter",
        "NextJs",
        "NestJs",
        "Django",   
        "ReactJs",
        "AngularJs",
        "Flask"
    ];

    protected static $content = [
        'CakePHP' => [
            "type" => "BACKEND",
            "description" => "CakePHP is a PHP framework that follows the MVC architectural pattern to facilitate the development of more structured web applications.",
            "logo" => "/image/cakephp_logo.png"
        ],
        'Codeigniter' => [
            "type" => "BACKEND",
            "description" => "CodeIgniter is a lightweight and fast PHP framework designed to build web applications with minimal bottlenecks and with an emphasis on performance.",
            "logo" => "/image/codeigniter_logo.png"
        ],
        'Laravel' => [
            "type" => "BACKEND",
            "description" => "Laravel is an elegant and expressive PHP framework used to build web applications with a pleasant syntax and features such as routing, ORM, and authentication systems.",
            "logo" => "/image/laravel_logo.png"
        ],
        'SpringBoot' => [
            "type" => "BACKEND",
            "description" => "Spring Boot is a Java framework that makes developing Java applications easy by providing automatic configuration and an 'opinionated' approach to development.",
            "logo" => "/image/Vector.png"
        ],
        'NextJs' => [
            "type" => "FRONTEND",
            "description" => "Next.js is a React framework used to build web applications with server-side rendering (SSR) features and easy route management.",
            "logo" => "/image/nextjs_logo.png"
        ],
        'NestJs' => [
            "type" => "BACKEND",
            "description" => "NestJS is a TypeScript-based Node.js framework for building server-side applications with a modular architecture and using Angular-inspired design patterns.",
            "logo" => "/image/nestjs_logo.png"
        ],
        'Flask' => [
            "type" => "BACKEND",
            "description" => "Flask is a lightweight and flexible web framework for the Python programming language.",
            "logo" => "/image/flask_logo.png"
        ],
        'Django' => [
            "type" => "BACKEND",
            "description" => "Express.js is a fast, unopinionated, and minimalist web framework for Node.js, used to build web applications and APIs.",
            "logo" => "/image/django_logo.png"
        ],
        'ReactJs' => [
            "type" => "FRONTEND",
            "description" => "ReactJS is a JavaScript library focused on creating interactive user interfaces (UI).",
            "logo" => "/image/react_logo.png"
        ],
        'AngularJs' => [
            "type" => "FRONTEND",
            "description" => "AngularJS is a JavaScript framework developed by Google for building dynamic web applications with two-way data binding and .",
            "logo" => "/image/angular_logo.png"
        ]
    ];

    public function framework(): string
    {
        return static::randomElement(static::$names);
    }

    public function type($framework) : string {
        return static::$content[$framework]["type"];
    }   

    public function description($framework) : string {
        return static::$content[$framework]["description"];
    }

    public function logo($framework) : string {
        return static::$content[$framework]["logo"];
    }
}
