<?php

namespace Patterns\StructuralPatterns\Facade;

class JalousieSystem {
    private bool $isOpened = false;

    /**
     * @return bool
     */
    public function isOpened(): bool
    {
        return $this->isOpened;
    }

    public function open(): void
    {
        $this->isOpened = true;
    }

    public function close(): void
    {
        $this->isOpened = false;
    }
}