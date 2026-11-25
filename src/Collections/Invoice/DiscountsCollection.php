<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Invoice\DiscountsDTO> */
final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\DiscountsDTO::class;
}
