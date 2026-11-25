<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice;

final class TaxIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\TaxIdsDTO::class;
}
