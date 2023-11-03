<?php
namespace Adn\PhpVideoUrlParser\Renderer;

interface EmbedRendererInterface
{
    /**
     * @param string $embedUrl
     * @param int    $width
     * @param int    $height
     *
     * @return string
     */
    public function renderVideoEmbedCode($embedUrl, $width, $height);
}
