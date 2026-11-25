<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Invoice\SettingCustomField> */
final class CustomFieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\SettingCustomField::class;
}
