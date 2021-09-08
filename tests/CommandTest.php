<?php declare(strict_types=1);

use Patterns\BehavioralPatterns\Command\AddMessageDateCommand;
use Patterns\BehavioralPatterns\Command\HelloCommand;
use Patterns\BehavioralPatterns\Command\Invoker;
use Patterns\BehavioralPatterns\Command\Receiver;
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{
    public function testHelloCommand()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }

    public function testUndoCommand()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();

        $invoker->run();
        $this->assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());

        $messageDateCommand->undo();

        $invoker->run();
        $this->assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}
