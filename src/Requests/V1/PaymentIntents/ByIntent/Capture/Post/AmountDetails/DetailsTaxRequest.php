<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post\AmountDetails;

final class DetailsTaxRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DetailsTaxRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\DetailsTaxRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'total_tax_amount' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'total_tax_amount',
            ],
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
