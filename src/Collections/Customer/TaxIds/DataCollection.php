<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Customer\TaxIds;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TaxId::class;
}
