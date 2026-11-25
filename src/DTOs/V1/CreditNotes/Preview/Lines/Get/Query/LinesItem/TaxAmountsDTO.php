<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\CreditNotes\Preview\Lines\Get\Query\LinesItem;

final class TaxAmountsDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\DTO2Variant1Collection::class, \StripeSDK\Enums\TaxAmountsDTO2Variant2\DTO2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'amount' => [
                        'kind' => 'integer',
                    ],
                    'tax_rate' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                    'taxable_amount' => [
                        'kind' => 'integer',
                    ],
                ],
                'required' => [
                    'amount',
                    'tax_rate',
                    'taxable_amount',
                ],
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
