<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\Intent\ExcludedPaymentMethodTypesArray;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Payment\Intent\ExcludedPaymentMethodTypesItem\MethodTypesEnum> */
final class MethodTypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Payment\Intent\ExcludedPaymentMethodTypesItem\MethodTypesEnum::class;
}
