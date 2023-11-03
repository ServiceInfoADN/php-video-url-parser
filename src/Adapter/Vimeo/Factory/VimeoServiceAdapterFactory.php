<?php
namespace Adn\PhpVideoUrlParser\Adapter\Vimeo\Factory;

use Adn\PhpVideoUrlParser\Adapter\CallableServiceAdapterFactoryInterface;
use Adn\PhpVideoUrlParser\Adapter\Vimeo\VimeoServiceAdapter;
use Adn\PhpVideoUrlParser\Renderer\EmbedRendererInterface;

class VimeoServiceAdapterFactory implements CallableServiceAdapterFactoryInterface
{
    /**
     * @param string                 $url
     * @param string                 $pattern
     * @param EmbedRendererInterface $renderer
     *
     * @return VimeoServiceAdapter
     *
     * @internal param EmbedRendererInterface $rendererInterface
     */
    public function __invoke($url, $pattern, EmbedRendererInterface $renderer)
    {
        return new VimeoServiceAdapter($url, $pattern, $renderer);
    }
}
