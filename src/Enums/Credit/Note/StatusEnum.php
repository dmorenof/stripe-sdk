<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Credit\Note;

enum StatusEnum: string
{
    case Issued = 'issued';
    case Void_ = 'void';
}
