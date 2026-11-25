<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice;

final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\DiscountsDTO::class;
}
