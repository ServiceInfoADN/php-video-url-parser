<?php
namespace Adn\PhpVideoUrlParser\Adapter\Facebook\Factory;

use Adn\PhpVideoUrlParser\Adapter\Facebook\FacebookServiceAdapter;
use Adn\PhpVideoUrlParser\Adapter\CallableServiceAdapterFactoryInterface;
use Adn\PhpVideoUrlParser\Adapter\VideoAdapterInterface;
use Adn\PhpVideoUrlParser\Renderer\EmbedRendererInterface;

class FacebookServiceAdapterFactory implements CallableServiceAdapterFactoryInterface
{
    /**
     * @param string                 $url
     * @param string                 $pattern
     * @param EmbedRendererInterface $renderer
     *
     * @return VideoAdapterInterface
     */
    public function __invoke($url, $pattern, EmbedRendererInterface $renderer)
    {
        return new FacebookServiceAdapter($url, $pattern, $renderer);
    }
}
