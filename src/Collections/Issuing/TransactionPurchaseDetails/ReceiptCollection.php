<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\TransactionPurchaseDetails;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Issuing\TransactionReceiptData> */
final class ReceiptCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\TransactionReceiptData::class;
}
