<?php

namespace Patterns\StructuralPatterns\Proxy;

class ThirdPartyYouTubeClass implements ThirdPartyYouTubeLib {

    public function listVideos(): array|null
    {
        return [
            [
                'id' => 0,
                'info' => 'video 0',
            ],

            [
                'id' => 1,
                'info' => 'video 1',
            ]
        ];
    }

    public function getVideoInfo(int $id): string|null
    {
        return $this->listVideos()[$id]['info'];
    }
}