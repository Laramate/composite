<?php

namespace Laramate\Composite\Exceptions;

use Throwable;

class CompositeException extends \Exception
{
    public function __construct($message = '', $code = 0, Throwable $previous = null, $task = null)
    {
        if ($task) {
            $task = is_object($task) ? get_class($task) : $task;
            $message = sprintf('Task "%s" failed. ', $task);
        }

        if ($previous) {
            $message .= ' '.$previous->getMessage();
        }

        parent::__construct($message, $code, $previous);
    }
}
