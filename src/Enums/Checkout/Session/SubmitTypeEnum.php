<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\Session;

enum SubmitTypeEnum: string
{
    case Auto = 'auto';
    case Book = 'book';
    case Donate = 'donate';
    case Pay = 'pay';
    case Subscribe = 'subscribe';
}
