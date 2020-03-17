<?php

namespace Laramate\Composite;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Laramate\Composite\Contracts\Job as JobInterface;

class Job extends Task implements JobInterface
{
    use Dispatchable, InteractsWithQueue, Queueable;
}
