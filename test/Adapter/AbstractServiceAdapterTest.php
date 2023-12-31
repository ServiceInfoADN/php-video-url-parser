<?php

namespace Adn\PhpVideoUrlParser\Test\Adapter;

use PHPUnit_Framework_TestCase;
use Adn\PhpVideoUrlParser\Adapter\Facebook\FacebookServiceAdapter;
use Adn\PhpVideoUrlParser\Exception\ServiceNotAvailableException;
use Adn\PhpVideoUrlParser\Matcher\VideoServiceMatcher;
use Adn\PhpVideoUrlParser\Renderer\DefaultRenderer;

class AbstractServiceAdapterTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider exampleUrlDataProvider
     * @param string $url
     */
    public function testGetRawUrl($url)
    {
        $facebookVideo = $this->getMockingObject($url);
        $this->assertInternalType('string', $facebookVideo->getRawUrl());
    }

    /**
     * @dataProvider exampleUrlDataProvider
     * @param string $url
     */
    public function testSetRawUrl($url)
    {
        $facebookVideo = $this->getMockingObject($url);
        $testUrl = 'http://test.unit';
        $facebookVideo->setRawUrl($testUrl);
        $this->assertEquals($testUrl, $facebookVideo->getRawUrl());
    }

    /**
     * @dataProvider exampleUrlDataProvider
     * @param string $url
     */
    public function testGetPattern($url)
    {
        $facebookVideo = $this->getMockingObject($url);
        $this->assertInternalType('string', $facebookVideo->getPattern());
    }

    /**
     * @dataProvider exampleUrlDataProvider
     * @param string $url
     */
    public function testSetPattern($url)
    {
        $facebookVideo = $this->getMockingObject($url);
        $pattern = '##test.unit##';
        $facebookVideo->setPattern($pattern);
        $this->assertEquals($pattern, $facebookVideo->getPattern());
    }

    /**
     * @dataProvider exampleUrlDataProvider
     * @param string $url
     */
    public function testGetAndSetRenderer($url)
    {
        $facebookVideo = $this->getMockingObject($url);
        $renderer = new DefaultRenderer();
        $facebookVideo->setRenderer($renderer);
        $this->assertEquals($renderer, $facebookVideo->getRenderer());
    }

    /**
     * @dataProvider exampleUrlDataProvider
     * @param string $url
     */
    public function testGetEmbedCode($url)
    {
        $facebookVideo = $this->getMockingObject($url);
        $embedCode = $facebookVideo->getEmbedCode(1920, 1080);
        $this->assertInternalType('string', $embedCode);
        $this->assertContains('1920', $embedCode);
        $this->assertContains('1080', $embedCode);
    }

    /**
     * @dataProvider exampleUrlDataProvider
     * @param $url
     */
    public function testGetScheme($url)
    {
        $facebookVideo = $this->getMockingObject($url);

        $originalScheme = $facebookVideo->getScheme(false);
        $this->assertEquals(parse_url($url, PHP_URL_SCHEME), $originalScheme);

        $schemeSecure = $facebookVideo->getScheme(true);
        $this->assertEquals('https', $schemeSecure);
    }

    /**
     * @return array
     */
    public function exampleUrlDataProvider()
    {
        return array(
            array(
                'https://www.facebook.com/zuck/videos/10102367711349271'
            ),
        );
    }

    /**
     * @param $url
     * @return FacebookServiceAdapter
     * @throws ServiceNotAvailableException
     */
    public function getMockingObject($url)
    {
        $videoParser = new VideoServiceMatcher();
        $facebookVideo = $videoParser->parse($url);

        return $facebookVideo;
    }
}
