<?php

namespace App\Data;

use App\Enums\MessageTypesEnum;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\RequiredIf;
use Spatie\LaravelData\Data;

class MessagePostData extends Data
{
    public function __construct(
        #[Required(), Enum(MessageTypesEnum::class)]
        public MessageTypesEnum $type,
        #[RequiredIf('type', MessageTypesEnum::Text)]
        public string | null $message,
        #[RequiredIf('type', MessageTypesEnum::Item)]
        public int | null $item_id,
    ) {}
}
