<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions;

final class AcssDebitRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\AcssDebitRequest5Variant1\Request5Variant1Request::class, \StripeSDK\Enums\AcssDebitRequest5Variant2\Request5Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'custom_mandate_url' => [
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
                        'interval_description' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 500,
                            ],
                        ],
                        'payment_schedule' => [
                            'kind' => 'string',
                            'enum' => [
                                'combined',
                                'interval',
                                'sporadic',
                            ],
                        ],
                        'transaction_type' => [
                            'kind' => 'string',
                            'enum' => [
                                'business',
                                'personal',
                            ],
                        ],
                    ],
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'none',
                        'off_session',
                        'on_session',
                    ],
                ],
                'target_date' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'verification_method' => [
                    'kind' => 'string',
                    'enum' => [
                        'automatic',
                        'instant',
                        'microdeposits',
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
