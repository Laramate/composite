<?php

namespace Laramate\Composite\Traits;

use Laramate\Composite\Contracts\Task;
use Laramate\Composite\Exceptions\CompositeException;
use Laramate\Composite\Support\FacadeMapper\Traits\HasMappedCalls;
use Throwable;

trait Runnable
{
    use HasMappedCalls;

    /**
     * Run task.
     *
     * @throws CompositeException
     *
     * @return mixed
     */
    public function run(string $class, array $params = [])
    {
        // Initialize the task
        $task = $this->initTask($class, $params);

        // Run before actions
        $this->beforeTask($task);

        // Run the task
        $result = $this->runTask($task);

        // Run after actions
        $this->afterTask($task);

        return $result;
    }

    private function initTask(string $class, array $params = []): Task
    {
        try {
            $task = static::mappedCall($class, 'make', $params);
        } catch (Throwable $error) {
            throw new CompositeException('Unable to initialize the task', 0, $error, $class);
        }

        return $task;
    }

    /**
     * @throws CompositeException
     *
     * @return mixed
     */
    private function runTask(Task &$task)
    {
        try {
            $result = $task->handle();
        } catch (CompositeException $error) {
            throw $error;
        } catch (Throwable $error) {
            throw new CompositeException('Task failed.', 0, $error, $task);
        }

        return $result;
    }

    /**
     * Actions before handling the task.
     *
     * @return $this
     */
    private function beforeTask(Task &$task): self
    {
        if (method_exists($task, 'before')) {
            $task->before();
        }

        return $this;
    }

    /**
     * Actions after the task.
     *
     * @return $this
     */
    private function afterTask(Task &$task): self
    {
        if (method_exists($task, 'after')) {
            $task->after();
        }

        return $this;
    }
}
