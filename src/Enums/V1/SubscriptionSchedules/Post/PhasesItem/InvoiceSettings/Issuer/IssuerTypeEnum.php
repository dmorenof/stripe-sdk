<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\InvoiceSettings\Issuer;

enum IssuerTypeEnum: string
{
    case Account = 'account';
    case Self_ = 'self';
}
