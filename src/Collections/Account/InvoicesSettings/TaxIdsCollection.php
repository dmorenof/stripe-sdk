<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Account\InvoicesSettings;

final class TaxIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Account\InvoicesSettings\TaxIdsDTO::class;
}
