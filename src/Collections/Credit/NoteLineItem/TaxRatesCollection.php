<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Credit\NoteLineItem;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\TaxRate> */
final class TaxRatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TaxRate::class;
}
