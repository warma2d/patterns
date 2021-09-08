<?php

namespace Patterns\StructuralPatterns\Bridge\Remote;

use Patterns\StructuralPatterns\Bridge\Device\Device;

class Remote {
    private Device $device;

    public function __construct(Device $device) {
        $this->device = $device;
    }

    public function togglePower() {
        $this->device->isEnabled() ? $this->device->disable() : $this->device->enable();
    }
}
