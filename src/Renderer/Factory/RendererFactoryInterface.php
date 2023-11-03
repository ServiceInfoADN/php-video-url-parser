<?php
namespace Adn\PhpVideoUrlParser\Renderer\Factory;

use Adn\PhpVideoUrlParser\Renderer\EmbedRendererInterface;

interface RendererFactoryInterface
{
    /**
     * @return EmbedRendererInterface
     */
    public function __invoke();
}
