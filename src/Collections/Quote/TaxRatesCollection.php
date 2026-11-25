<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Quote;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Quote\TaxRatesDTO> */
final class TaxRatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Quote\TaxRatesDTO::class;
}
