<?php

namespace Laramate\Composite\Contracts;

interface Task
{
    /**
     * Run any task.
     *
     * @param string $class
     * @param array  $params
     *
     * @return mixed
     */
    public function run(string $class, array $params = []);

    /**
     * Handle the task.
     *
     * @return mixed
     */
    public function handle();
}
