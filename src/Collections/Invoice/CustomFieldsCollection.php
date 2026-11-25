<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice;

final class CustomFieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\SettingCustomField::class;
}
