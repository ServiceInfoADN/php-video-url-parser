<?php
namespace Adn\PhpVideoUrlParser\Adapter\Youtube\Factory;

use Adn\PhpVideoUrlParser\Adapter\CallableServiceAdapterFactoryInterface;
use Adn\PhpVideoUrlParser\Adapter\Youtube\YoutubeServiceAdapter;
use Adn\PhpVideoUrlParser\Renderer\EmbedRendererInterface;

class YoutubeServiceAdapterFactory implements CallableServiceAdapterFactoryInterface
{
    /**
     * @param string $url
     * @param string $pattern
     *
     * @return YoutubeServiceAdapter
     */
    public function __invoke($url, $pattern, EmbedRendererInterface $renderer)
    {
        return new YoutubeServiceAdapter($url, $pattern, $renderer);
    }
}
