<?php

namespace Muhsin\Vk\Core;

class Route
{
    private string $pattern;
    private string $method;
    /**
     * @var callable
     */
    private $controller;

    public function __construct(string $pattern, string $method, $controller)
    {
        $this->pattern = $pattern;
        $this->method = $method;
        $this->controller = $controller;
    }

    public static function get(string $pattern, $controller): self
    {
        return new self($pattern, 'GET', $controller);
    }

    public static function post(string $pattern, $controller): self
    {
        return new self($pattern, 'POST', $controller);
    }
}
