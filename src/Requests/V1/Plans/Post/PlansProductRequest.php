<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Plans\Post;

final class PlansProductRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ProductVariant1Request::class, 'string'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'active' => [
                    'kind' => 'boolean',
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'metadata' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                    ],
                ],
                'name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'statement_descriptor' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 22,
                    ],
                ],
                'tax_code' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'tax_details' => [
                    'kind' => 'object',
                    'properties' => [
                        'performance_location' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        'tax_code' => [
                            'kind' => 'anyOf',
                            'branches' => [
                                [
                                    'kind' => 'string',
                                ],
                                [
                                    'kind' => 'string',
                                    'enum' => [
                                        '',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'unit_label' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 12,
                    ],
                ],
            ],
            'required' => [
                'name',
            ],
        ],
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
