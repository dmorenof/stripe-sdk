<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks;

enum CvcCheckEnum: string
{
    case Fail = 'fail';
    case Pass = 'pass';
    case Unavailable = 'unavailable';
    case Unchecked = 'unchecked';
}
