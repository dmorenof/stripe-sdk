<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Credit\Note;

enum TypeEnum: string
{
    case Mixed_ = 'mixed';
    case PostPayment = 'post_payment';
    case PrePayment = 'pre_payment';
}
