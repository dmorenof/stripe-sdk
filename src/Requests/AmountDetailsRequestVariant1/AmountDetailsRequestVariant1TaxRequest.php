<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AmountDetailsRequestVariant1;

final class AmountDetailsRequestVariant1TaxRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\AmountDetailsRequestVariant1TaxRequestVariant1\TaxVariant1Request::class, \StripeSDK\Enums\AmountDetailsRequestVariant1TaxRequestVariant2\TaxVariant2Enum::class];
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
