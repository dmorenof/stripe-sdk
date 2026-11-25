<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AmountDetailsRequest2Variant1;

final class AmountDetailsRequest2Variant1TaxRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\AmountDetailsRequest2Variant1TaxRequestVariant1\TaxVariant1Request::class, \StripeSDK\Enums\AmountDetailsRequest2Variant1TaxRequestVariant2\TaxVariant2Enum::class];
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
