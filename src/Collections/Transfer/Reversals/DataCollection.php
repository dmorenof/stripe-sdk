<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Transfer\Reversals;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Transfer\Reversal::class;
}
