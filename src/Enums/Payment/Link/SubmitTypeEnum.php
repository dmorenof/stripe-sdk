<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Link;

enum SubmitTypeEnum: string
{
    case Auto = 'auto';
    case Book = 'book';
    case Donate = 'donate';
    case Pay = 'pay';
    case Subscribe = 'subscribe';
}
