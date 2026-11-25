<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodDomainResourcePaymentMethodStatus;

enum StatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
}
