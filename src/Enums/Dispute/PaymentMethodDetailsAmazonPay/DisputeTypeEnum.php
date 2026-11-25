<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Dispute\PaymentMethodDetailsAmazonPay;

enum DisputeTypeEnum: string
{
    case Chargeback = 'chargeback';
    case Claim = 'claim';
}
