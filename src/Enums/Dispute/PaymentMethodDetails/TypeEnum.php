<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Dispute\PaymentMethodDetails;

enum TypeEnum: string
{
    case AmazonPay = 'amazon_pay';
    case Card = 'card';
    case Klarna = 'klarna';
    case Paypal = 'paypal';
}
