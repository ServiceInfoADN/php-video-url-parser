<?php
namespace Adn\PhpVideoUrlParser\Adapter;

use Adn\PhpVideoUrlParser\Adapter\VideoAdapterInterface;
use Adn\PhpVideoUrlParser\Renderer\EmbedRendererInterface;

interface CallableServiceAdapterFactoryInterface
{
    /**
     * @param string                 $url
     * @param string                 $pattern
     * @param EmbedRendererInterface $renderer
     *
     * @return VideoAdapterInterface
     */
    public function __invoke($url, $pattern, EmbedRendererInterface $renderer);
}
