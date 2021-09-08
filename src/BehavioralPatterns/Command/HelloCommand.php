<?php

namespace Patterns\BehavioralPatterns\Command;

class HelloCommand implements Command
{
    public function __construct(private Receiver $output)
    {
    }

    public function execute()
    {
        $this->output->write('Hello World');
    }
}