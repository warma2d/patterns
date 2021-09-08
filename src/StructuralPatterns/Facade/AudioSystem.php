<?php

namespace Patterns\StructuralPatterns\Facade;

class AudioSystem {
    private bool $isEnabled = false;
    private int $volumePercent = 10;

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function turnOn(): void
    {
        $this->isEnabled = true;
    }

    public function shutDown(): void
    {
        $this->isEnabled = false;
    }

    /**
     * @return int
     */
    public function getVolumePercent(): int
    {
        return $this->volumePercent;
    }

    /**
     * @param int $volumePercent
     */
    public function setVolumePercent(int $volumePercent): void
    {
        $this->volumePercent = $volumePercent;
    }
}