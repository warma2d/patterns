<?php

namespace Patterns\GenerativePatterns\AbstractFactory\Factories;

use Patterns\GenerativePatterns\AbstractFactory\Buttons\Button;
use Patterns\GenerativePatterns\AbstractFactory\Buttons\WinButton;
use Patterns\GenerativePatterns\AbstractFactory\Checkboxes\Checkbox;
use Patterns\GenerativePatterns\AbstractFactory\Checkboxes\WinCheckbox;

class WinFactory implements GUIFactory {

    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WinCheckbox();
    }
}
