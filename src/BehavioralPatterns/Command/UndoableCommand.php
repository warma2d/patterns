<?php

namespace Patterns\BehavioralPatterns\Command;

interface UndoableCommand extends Command
{
    public function undo();
}