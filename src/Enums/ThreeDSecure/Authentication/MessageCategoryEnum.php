<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecure\Authentication;

enum MessageCategoryEnum: string
{
    case NonPaymentAuthentication = 'non_payment_authentication';
    case PaymentAuthentication = 'payment_authentication';
}
