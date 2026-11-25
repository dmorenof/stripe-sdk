<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\ByPrice\Post;

final class CurrencyOptionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\CurrencyOptionsRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\CurrencyOptionsRequestVariant2\OptionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'additional' => [
                'kind' => 'object',
                'properties' => [
                    'custom_unit_amount' => [
                        'kind' => 'object',
                        'properties' => [
                            'enabled' => [
                                'kind' => 'boolean',
                            ],
                            'maximum' => [
                                'kind' => 'integer',
                            ],
                            'minimum' => [
                                'kind' => 'integer',
                            ],
                            'preset' => [
                                'kind' => 'integer',
                            ],
                        ],
                        'required' => [
                            'enabled',
                        ],
                    ],
                    'tax_behavior' => [
                        'kind' => 'string',
                        'enum' => [
                            'exclusive',
                            'inclusive',
                            'unspecified',
                        ],
                    ],
                    'tiers' => [
                        'kind' => 'array',
                        'items' => [
                            'kind' => 'object',
                            'properties' => [
                                'flat_amount' => [
                                    'kind' => 'integer',
                                ],
                                'flat_amount_decimal' => [
                                    'kind' => 'string',
                                ],
                                'unit_amount' => [
                                    'kind' => 'integer',
                                ],
                                'unit_amount_decimal' => [
                                    'kind' => 'string',
                                ],
                                'up_to' => [
                                    'kind' => 'anyOf',
                                    'branches' => [
                                        [
                                            'kind' => 'string',
                                            'enum' => [
                                                'inf',
                                            ],
                                            'rules' => [
                                                'maxLength' => 5000,
                                            ],
                                        ],
                                        [
                                            'kind' => 'integer',
                                        ],
                                    ],
                                ],
                            ],
                            'required' => [
                                'up_to',
                            ],
                        ],
                    ],
                    'unit_amount' => [
                        'kind' => 'integer',
                    ],
                    'unit_amount_decimal' => [
                        'kind' => 'string',
                    ],
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
