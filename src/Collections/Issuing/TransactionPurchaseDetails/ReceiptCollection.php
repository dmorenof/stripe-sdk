<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\TransactionPurchaseDetails;

final class ReceiptCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\TransactionReceiptData::class;
}
