<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\PersonalizationDesigns\Get\Query;

/** @extends \Dmorenof\SdkRuntime\TypedArray<string> */
final class LookupKeysCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array ITEM_VALIDATION = [
        'maxLength' => 200,
    ];
}
