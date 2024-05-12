<?php

declare(strict_types=1);

namespace Muhsin\Vk;

use Muhsin\Vk\Core\Router;

class Application
{
    public Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        $method = $_SERVER['REQUEST_METHOD'];

        $this->router->dispatch($uri, $method);
    }
}