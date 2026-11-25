<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoiceitem;

final class FrozenFieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Invoiceitem\FrozenFieldsEnum::class;
}
