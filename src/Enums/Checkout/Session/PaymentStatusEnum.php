<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\Session;

enum PaymentStatusEnum: string
{
    case NoPaymentRequired = 'no_payment_required';
    case Paid = 'paid';
    case Unpaid = 'unpaid';
}
