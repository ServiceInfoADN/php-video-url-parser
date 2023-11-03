<?php
namespace Adn\PhpVideoUrlParser\Adapter\Dailymotion\Factory;

use Adn\PhpVideoUrlParser\Adapter\Dailymotion\DailymotionServiceAdapter;
use Adn\PhpVideoUrlParser\Adapter\CallableServiceAdapterFactoryInterface;
use Adn\PhpVideoUrlParser\Adapter\VideoAdapterInterface;
use Adn\PhpVideoUrlParser\Renderer\EmbedRendererInterface;

class DailymotionServiceAdapterFactory implements CallableServiceAdapterFactoryInterface
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
        return new DailymotionServiceAdapter($url, $pattern, $renderer);
    }
}
