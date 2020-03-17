<?php

namespace Laramate\Composite;

use Illuminate\Queue\SerializesModels;
use Laramate\Composite\Traits\Runnable;
use Laramate\Composite\Contracts\Task as TaskInterface;

class Task implements TaskInterface
{
    use Runnable, SerializesModels;

    /**
     * Call before the task.
     */
    public function before()
    {
    }

    /**
     * Handle the task.
     */
    public function handle()
    {
    }

    /**
     * Call after the task.
     *
     */
    public function after()
    {
    }
}
