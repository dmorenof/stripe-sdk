<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Balance\SettingsResourcePayouts;

final class CurrencyValueCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Balance\SettingsResourceAutomaticTransferRule::class;
}
