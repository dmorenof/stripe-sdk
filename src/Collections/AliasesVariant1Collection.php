<?php

declare(strict_types=1);

namespace StripeSDK\Collections;

/** @extends \Dmorenof\SdkRuntime\TypedArray<string> */
final class AliasesVariant1Collection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array ITEM_VALIDATION = [
        'maxLength' => 300,
    ];
}
