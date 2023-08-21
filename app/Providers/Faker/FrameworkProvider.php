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
            "description" => "CakePHP adalah kerangka kerja PHP yang mengikuti pola arsitektur MVC untuk memfasilitasi pengembangan aplikasi web dengan lebih terstruktur.",
            "logo" => "/image/cakephp_logo.png"
        ],
        'Codeigniter' => [
            "type" => "BACKEND",
            "description" => "CodeIgniter adalah kerangka kerja PHP yang ringan dan cepat yang dirancang untuk membangun aplikasi web dengan sedikit hambatan dan dengan penekanan pada kinerja.",
            "logo" => "/image/codeigniter_logo.png"
        ],
        'Laravel' => [
            "type" => "BACKEND",
            "description" => "Laravel adalah kerangka kerja PHP yang elegan dan ekspresif yang digunakan untuk membangun aplikasi web dengan sintaksis yang menyenangkan dan fitur-fitur seperti routing, ORM, dan sistem autentikasi.",
            "logo" => "/image/laravel_logo.png"
        ],
        'SpringBoot' => [
            "type" => "BACKEND",
            "description" => "Spring Boot adalah kerangka kerja Java yang memudahkan pengembangan aplikasi Java dengan menyediakan konfigurasi otomatis dan pendekatan 'opiniated' (berpendapat) dalam pengembangan.",
            "logo" => "/image/Vector.png"
        ],
        'NextJs' => [
            "type" => "FRONTEND",
            "description" => "Next.js adalah kerangka kerja React yang digunakan untuk membangun aplikasi web dengan fitur server-side rendering (SSR) dan pengelolaan rute yang mudah.",
            "logo" => "/image/nextjs_logo.png"
        ],
        'NestJs' => [
            "type" => "BACKEND",
            "description" => "NestJS adalah kerangka kerja Node.js yang berbasis TypeScript untuk membangun aplikasi server-side dengan arsitektur yang modular dan menggunakan pola desain yang terinspirasi oleh Angular.",
            "logo" => "/image/nestjs_logo.png"
        ],
        'Flask' => [
            "type" => "BACKEND",
            "description" => " Flask adalah kerangka kerja web ringan dan fleksibel untuk bahasa pemrograman Python.",
            "logo" => "/image/flask_logo.png"
        ],
        'Django' => [
            "type" => "BACKEND",
            "description" => "Express.js is a fast, unopinionated, and minimalist web framework for Node.js, used to build web applications and APIs.",
            "logo" => "/image/django_logo.png"
        ],
        'ReactJs' => [
            "type" => "FRONTEND",
            "description" => "ReactJS adalah perpustakaan JavaScript yang fokus pada pembuatan antarmuka pengguna (UI) yang interaktif.",
            "logo" => "/image/react_logo.png"
        ],
        'AngularJs' => [
            "type" => "FRONTEND",
            "description" => "AngularJS adalah kerangka kerja JavaScript yang dikembangkan oleh Google untuk membangun aplikasi web dinamis dengan fitur two-way data binding dan.",
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
