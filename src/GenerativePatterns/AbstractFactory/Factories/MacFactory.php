<?php

namespace Patterns\GenerativePatterns\AbstractFactory\Factories;

use Patterns\GenerativePatterns\AbstractFactory\Buttons\Button;
use Patterns\GenerativePatterns\AbstractFactory\Buttons\MacButton;
use Patterns\GenerativePatterns\AbstractFactory\Checkboxes\Checkbox;
use Patterns\GenerativePatterns\AbstractFactory\Checkboxes\MacCheckbox;

class MacFactory implements GUIFactory {

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}
