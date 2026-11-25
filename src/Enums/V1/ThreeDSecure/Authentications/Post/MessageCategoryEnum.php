<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post;

enum MessageCategoryEnum: string
{
    case NonPaymentAuthentication = 'non_payment_authentication';
    case PaymentAuthentication = 'payment_authentication';
}
