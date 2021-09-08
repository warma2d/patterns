<?php

namespace Patterns\StructuralPatterns\Proxy;

class CachedYouTubeClass implements ThirdPartyYouTubeLib {

    private ThirdPartyYouTubeLib $service;
    private array|null $listCache = null;

    public function __construct(ThirdPartyYouTubeLib $service)
    {
        $this->service = $service;
    }

    public function listVideos(): array|null
    {
        if (is_null($this->listCache))
        {
            $this->listCache = $this->service->listVideos();
        }

        return $this->listCache;
    }

    function getVideoInfo(int $id): string|null
    {
        if (!$this->listCache || !isset($this->listCache[$id])) {
            $this->listCache = $this->service->listVideos();
        }

        return $this->listCache[$id]['info'];
    }
}