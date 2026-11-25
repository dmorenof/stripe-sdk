<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoiceitem;

final class DiscountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoiceitem\DiscountsDTO::class;
}
