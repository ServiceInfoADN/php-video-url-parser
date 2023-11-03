<?php
namespace Adn\PhpVideoUrlParser\Renderer\Factory;

use Adn\PhpVideoUrlParser\Renderer\DefaultRenderer;
use Adn\PhpVideoUrlParser\Renderer\EmbedRendererInterface;

class DefaultRendererFactory implements RendererFactoryInterface
{
    /**
     * @return EmbedRendererInterface
     */
    public function __invoke()
    {
        return new DefaultRenderer();
    }
}
