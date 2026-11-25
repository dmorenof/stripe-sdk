<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Credit\NoteRefund;

enum TypeEnum: string
{
    case PaymentRecordRefund = 'payment_record_refund';
    case Refund = 'refund';
}
