<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Product;

final class TaxCodeDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\TaxCode::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'tax_code',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'tax_code' => [
            'kind' => 'object',
            'properties' => [
                'description' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'tax_code',
                    ],
                ],
                'requirements' => [
                    'kind' => 'reference',
                    'ref' => 'tax_code_requirements',
                ],
            ],
            'required' => [
                'description',
                'id',
                'name',
                'object',
            ],
        ],
        'tax_code_requirements' => [
            'kind' => 'object',
            'properties' => [
                'performance_location' => [
                    'kind' => 'string',
                    'enum' => [
                        'optional',
                        'required',
                    ],
                ],
            ],
            'required' => [
                'performance_location',
            ],
        ],
    ];
}
