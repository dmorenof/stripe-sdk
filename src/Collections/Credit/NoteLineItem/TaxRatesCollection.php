<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Credit\NoteLineItem;

final class TaxRatesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TaxRate::class;
}
