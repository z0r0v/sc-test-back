<?php

namespace App\Enums;

enum MessageStatusEnum: string
{
    case Waiting = 'waiting';
    case Approved = 'approved';
    case Rejected = 'rejected';
}
