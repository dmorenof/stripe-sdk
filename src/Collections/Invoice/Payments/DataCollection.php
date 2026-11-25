<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice\Payments;

final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\Payment::class;
}
