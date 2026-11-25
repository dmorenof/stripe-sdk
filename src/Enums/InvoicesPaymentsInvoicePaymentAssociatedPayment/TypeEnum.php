<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InvoicesPaymentsInvoicePaymentAssociatedPayment;

enum TypeEnum: string
{
    case Charge = 'charge';
    case PaymentIntent = 'payment_intent';
    case PaymentRecord = 'payment_record';
}
