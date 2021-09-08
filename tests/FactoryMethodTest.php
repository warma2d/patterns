<?php declare(strict_types=1);

use Patterns\GenerativePatterns\FactoryMethod\Coffee\AmericanStyleCappuccino;
use Patterns\GenerativePatterns\FactoryMethod\Coffee\AmericanStyleEspresso;
use Patterns\GenerativePatterns\FactoryMethod\Coffee\ItalianStyleCappuccino;
use Patterns\GenerativePatterns\FactoryMethod\Coffee\ItalianStyleEspresso;
use Patterns\GenerativePatterns\FactoryMethod\CoffeeShop\AmericanCoffeeShop;
use Patterns\GenerativePatterns\FactoryMethod\CoffeeShop\CoffeeShop;
use Patterns\GenerativePatterns\FactoryMethod\CoffeeShop\ItalianCoffeeShop;
use PHPUnit\Framework\TestCase;

final class FactoryMethodTest extends TestCase
{
    public function testAmericanStyleCappuccino(): void
    {
        $americanCoffeeShop = new AmericanCoffeeShop();
        $americanCappuccino = $americanCoffeeShop->createCoffee(CoffeeShop::CAPPUCCINO);

        $this->assertEquals(
            new AmericanStyleCappuccino(),
            $americanCappuccino
        );
    }

    public function testAmericanStyleEspresso(): void
    {
        $americanCoffeeShop = new AmericanCoffeeShop();
        $americanEspresso = $americanCoffeeShop->createCoffee(CoffeeShop::ESPRESSO);

        $this->assertEquals(
            new AmericanStyleEspresso(),
            $americanEspresso
        );
    }

    public function testItalianStyleCappuccino(): void
    {
        $italianCoffeeShop = new ItalianCoffeeShop();
        $italianCappuccino = $italianCoffeeShop->createCoffee(CoffeeShop::CAPPUCCINO);

        $this->assertEquals(
            new ItalianStyleCappuccino(),
            $italianCappuccino
        );
    }

    public function testItalianStyleEspresso(): void
    {
        $italianCoffeeShop = new ItalianCoffeeShop();
        $italianEspresso = $italianCoffeeShop->createCoffee(CoffeeShop::ESPRESSO);

        $this->assertEquals(
            new ItalianStyleEspresso(),
            $italianEspresso
        );
    }
}
