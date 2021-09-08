<?php

namespace Patterns\BehavioralPatterns\Command;

class AddMessageDateCommand implements UndoableCommand
{
    public function __construct(private Receiver $output)
    {
    }

    public function execute()
    {
        $this->output->enableDate();
    }

    public function undo()
    {
        $this->output->disableDate();
    }
}