<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\InvoicePayments\Get\Query\Payment;

enum PaymentTypeEnum: string
{
    case PaymentIntent = 'payment_intent';
    case PaymentRecord = 'payment_record';
}
