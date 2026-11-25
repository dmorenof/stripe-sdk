<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Checkout\FinancialConnectionsPaymentMethodOptions;

final class PrefetchCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Checkout\FinancialConnectionsPaymentMethodOptions\PrefetchEnum::class;
}
