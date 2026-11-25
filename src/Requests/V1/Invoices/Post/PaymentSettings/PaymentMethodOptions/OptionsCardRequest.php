<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsCardRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsCardRequest3Variant1\Request3Variant1Request::class, \StripeSDK\Enums\OptionsCardRequest3Variant2\Request3Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'installments' => [
                    'kind' => 'object',
                    'properties' => [
                        'enabled' => [
                            'kind' => 'boolean',
                        ],
                        'plan' => [
                            'kind' => 'anyOf',
                            'branches' => [
                                [
                                    'kind' => 'object',
                                    'properties' => [
                                        'count' => [
                                            'kind' => 'integer',
                                        ],
                                        'interval' => [
                                            'kind' => 'string',
                                            'enum' => [
                                                'month',
                                            ],
                                        ],
                                        'type' => [
                                            'kind' => 'string',
                                            'enum' => [
                                                'bonus',
                                                'fixed_count',
                                                'revolving',
                                            ],
                                        ],
                                    ],
                                    'required' => [
                                        'type',
                                    ],
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
                'request_three_d_secure' => [
                    'kind' => 'string',
                    'enum' => [
                        'any',
                        'automatic',
                        'challenge',
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
