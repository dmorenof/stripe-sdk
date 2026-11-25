<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Invoice\TaxIdsDTO> */
final class TaxIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\TaxIdsDTO::class;
}
