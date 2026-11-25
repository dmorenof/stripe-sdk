<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\UsBankAccount\MandateOptions;

enum CollectionMethodEnum: string
{
    case Empty_ = '';
    case Paper = 'paper';
}
