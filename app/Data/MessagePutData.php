<?php

namespace App\Data;

use App\Enums\MessageStatusEnum;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

class MessagePutData extends Data
{
    public function __construct(
        #[Required(), Enum(MessageStatusEnum::class)]
        public MessageStatusEnum $status,
    ) {}
}
