<?php

namespace Laramate\Composite;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Laramate\Composite\Contracts\Operation as OperationInterface;

class Operation extends Task implements OperationInterface
{
    use Dispatchable, InteractsWithQueue, Queueable;
}
