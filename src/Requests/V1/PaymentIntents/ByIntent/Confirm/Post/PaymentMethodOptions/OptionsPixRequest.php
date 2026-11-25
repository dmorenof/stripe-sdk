<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodOptions;

final class OptionsPixRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsPixRequest7Variant1\Request7Variant1Request::class, \StripeSDK\Enums\OptionsPixRequest7Variant2\Request7Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'amount_includes_iof' => [
                    'kind' => 'string',
                    'enum' => [
                        'always',
                        'never',
                    ],
                ],
                'expires_after_seconds' => [
                    'kind' => 'integer',
                ],
                'expires_at' => [
                    'kind' => 'integer',
                ],
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'amount' => [
                            'kind' => 'integer',
                        ],
                        'amount_includes_iof' => [
                            'kind' => 'string',
                            'enum' => [
                                'always',
                                'never',
                            ],
                        ],
                        'amount_type' => [
                            'kind' => 'string',
                            'enum' => [
                                'fixed',
                                'maximum',
                            ],
                        ],
                        'currency' => [
                            'kind' => 'string',
                        ],
                        'end_date' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        'payment_schedule' => [
                            'kind' => 'string',
                            'enum' => [
                                'halfyearly',
                                'monthly',
                                'quarterly',
                                'weekly',
                                'yearly',
                            ],
                        ],
                        'reference' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 35,
                            ],
                        ],
                        'start_date' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        'none',
                        'off_session',
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
