<?php

namespace Laramate\Composite\Contracts;

use Illuminate\Contracts\Queue\ShouldQueue;

interface Operation extends Task, ShouldQueue
{
}
