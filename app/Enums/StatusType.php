<?php

namespace App\Enums;


enum StatusType: string
{
    case STARTED = 'started';
    case IN_PROGRESS = 'inprogress';
    case DONE = 'done';
}
