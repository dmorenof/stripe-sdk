<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Setup\Intent\ExcludedPaymentMethodTypesArray;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Setup\Intent\ExcludedPaymentMethodTypesItem\MethodTypesEnum> */
final class MethodTypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Setup\Intent\ExcludedPaymentMethodTypesItem\MethodTypesEnum::class;
}
