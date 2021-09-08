<?php

namespace Patterns\StructuralPatterns\Facade;

class VideoSystem {
    private bool $isEnabled = false;
    private string|null $film = null;

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

    public function getFilm(): string|null
    {
        return $this->film;
    }

    public function setFilm(string|null $film): void
    {
        $this->film = $film;
    }
}