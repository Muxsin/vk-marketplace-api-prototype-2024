<?php

declare(strict_types=1);

namespace Muhsin\Vk\Core;

class Router
{
    private array $routes;

    /**
     * @param Route[] $routes
     */
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function dispatch(string $uri, string $method): void
    {
        // Проверим роутеры, если маршрут совпадает, вызываем его вызываемую функцию.
        // Если не найден, мы вернем ошибку 404.
    }
}