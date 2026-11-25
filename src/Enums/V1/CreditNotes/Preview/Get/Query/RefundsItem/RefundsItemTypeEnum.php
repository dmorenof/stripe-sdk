<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CreditNotes\Preview\Get\Query\RefundsItem;

enum RefundsItemTypeEnum: string
{
    case PaymentRecordRefund = 'payment_record_refund';
    case Refund = 'refund';
}
