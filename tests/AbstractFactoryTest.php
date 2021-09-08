<?php declare(strict_types=1);

use Patterns\GenerativePatterns\AbstractFactory\Buttons\MacButton;
use Patterns\GenerativePatterns\AbstractFactory\Buttons\WinButton;
use Patterns\GenerativePatterns\AbstractFactory\Checkboxes\MacCheckbox;
use Patterns\GenerativePatterns\AbstractFactory\Checkboxes\WinCheckbox;
use Patterns\GenerativePatterns\AbstractFactory\Factories\MacFactory;
use Patterns\GenerativePatterns\AbstractFactory\Factories\WinFactory;
use PHPUnit\Framework\TestCase;

final class AbstractFactoryTest extends TestCase
{
    public function testWinButton(): void
    {
        $winFactory = new WinFactory();
        $winButton = $winFactory->createButton();

        $this->assertEquals(
            new WinButton(),
            $winButton
        );
    }

    public function testWinCheckbox(): void
    {
        $this->assertEquals(
            new WinCheckbox(),
            (new WinFactory())->createCheckbox()
        );
    }

    public function testMacButton(): void
    {
        $this->assertEquals(
            new MacButton(),
            (new MacFactory())->createButton()
        );
    }

    public function testMacCheckbox(): void
    {
        $this->assertEquals(
            new MacCheckbox(),
            (new MacFactory())->createCheckbox()
        );
    }
}
