<?php

namespace App\Providers\Faker;

use Faker\Provider\Base;

class FrameworkProvider extends Base
{
    protected static $names = [
        'CakePHP',
        'CodeIgniter',
        'Laravel',
        'Lumen',
        'Phalcon',
        'Slim',
        'Symfony',
        'Spring Boot',
        'NextJS',
        'NestJS',
    ];

    protected static $content = [
        'CakePHP' => [
            "type" => "backend",
            "description" => "CakePHP is a popular open-source PHP web framework known for its simplicity and rapid development capabilities.",
            "logo" => "https://example.com/cakephp_logo.png"
        ],
        'CodeIgniter' => [
            "type" => "backend",
            "description" => "CodeIgniter is a lightweight PHP framework that offers a small footprint and high performance for building web applications.",
            "logo" => "https://example.com/codeigniter_logo.png"
        ],
        'Laravel' => [
            "type" => "backend",
            "description" => "Laravel is a powerful PHP web framework with elegant syntax and features like ORM, routing, and authentication.",
            "logo" => "https://example.com/laravel_logo.png"
        ],
        'Lumen' => [
            "type" => "backend",
            "description" => "Lumen is a micro-framework by Laravel designed for building fast and efficient microservices and APIs.",
            "logo" => "https://example.com/lumen_logo.png"
        ],
        'Phalcon' => [
            "type" => "backend",
            "description" => "Phalcon is a full-stack PHP framework delivered as a C extension, offering high performance and low resource consumption.",
            "logo" => "https://example.com/phalcon_logo.png"
        ],
        'Slim' => [
            "type" => "backend",
            "description" => "Slim is a PHP micro-framework designed for building simple yet powerful web applications and APIs.",
            "logo" => "https://example.com/slim_logo.png"
        ],
        'Symfony' => [
            "type" => "backend",
            "description" => "Symfony is a mature and highly customizable PHP framework used to build complex web applications.",
            "logo" => "https://example.com/symfony_logo.png"
        ],
        'Spring Boot' => [
            "type" => "backend",
            "description" => "Spring Boot is an opinionated framework for building production-ready Java applications with ease.",
            "logo" => "https://example.com/spring_boot_logo.png"
        ],
        'NextJS' => [
            "type" => "frontend",
            "description" => "Next.js is a popular React framework that enables server-side rendering and seamless client-side routing for fast web applications.",
            "logo" => "https://example.com/nextjs_logo.png"
        ],
        'NestJS' => [
            "type" => "backend",
            "description" => "NestJS is a progressive Node.js framework for building efficient and scalable server-side applications.",
            "logo" => "https://example.com/nestjs_logo.png"
        ],
        'FastAPI' => [
            "type" => "backend",
            "description" => "FastAPI is a modern, fast (high-performance) web framework for building APIs with Python 3.7+ based on standard Python type hints.",
            "logo" => "https://example.com/fastapi_logo.png"
        ],
        'Flask' => [
            "type" => "backend",
            "description" => "Flask is a lightweight Python web framework that provides the essentials for building web applications.",
            "logo" => "https://example.com/flask_logo.png"
        ],
        'Express.js' => [
            "type" => "backend",
            "description" => "Express.js is a fast, unopinionated, and minimalist web framework for Node.js, used to build web applications and APIs.",
            "logo" => "https://example.com/expressjs_logo.png"
        ],
        'Meteor' => [
            "type" => "fullstack",
            "description" => "Meteor is a full-stack JavaScript framework for building real-time web applications.",
            "logo" => "https://example.com/meteor_logo.png"
        ],
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
