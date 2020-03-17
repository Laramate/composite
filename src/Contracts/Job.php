<?php

namespace Laramate\Composite\Contracts;

use Illuminate\Contracts\Queue\ShouldQueue;

interface Job extends Task, ShouldQueue
{
}
