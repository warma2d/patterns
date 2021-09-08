<?php

namespace Patterns\StructuralPatterns\Proxy;

interface ThirdPartyYouTubeLib {
    function listVideos(): array|null;
    function getVideoInfo(int $id): string|null;
}