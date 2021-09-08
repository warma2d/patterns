<?php declare(strict_types=1);

use Patterns\StructuralPatterns\Proxy\CachedYouTubeClass;
use Patterns\StructuralPatterns\Proxy\ThirdPartyYouTubeClass;
use PHPUnit\Framework\TestCase;

final class ProxyTest extends TestCase
{
    private array $videos = [
        [
            'id' => 0,
            'info' => 'video 0',
        ],

        [
            'id' => 1,
            'info' => 'video 1',
        ]
    ];

    public function testListVideo(): void
    {
        $youtubeService = new ThirdPartyYouTubeClass();
        $proxy = new CachedYouTubeClass($youtubeService);

        $this->assertEquals(
            $this->videos,
            $proxy->listVideos()
        );
    }

    public function testVideoInfo(): void
    {
        $youtubeService = new ThirdPartyYouTubeClass();
        $proxy = new CachedYouTubeClass($youtubeService);

        $this->assertEquals(
            $this->videos[1]['info'],
            $proxy->getVideoInfo(1)
        );
    }
}
