<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Tax\Transaction\LineItems;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Tax\TransactionLineItem> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Tax\TransactionLineItem::class;
}
