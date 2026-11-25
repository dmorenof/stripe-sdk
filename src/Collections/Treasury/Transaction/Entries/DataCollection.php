<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Treasury\Transaction\Entries;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Treasury\TransactionEntry> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Treasury\TransactionEntry::class;
}
