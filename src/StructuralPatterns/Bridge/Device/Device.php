<?php

namespace Patterns\StructuralPatterns\Bridge\Device;

interface Device {
    function isEnabled();
    function enable();
    function disable();
}
