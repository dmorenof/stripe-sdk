<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentMethodOptions;

final class OptionsPaytoRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsPaytoRequest6Variant1\Request6Variant1Request::class, \StripeSDK\Enums\OptionsPaytoRequest6Variant2\Request6Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'amount' => [
                            'kind' => 'anyOf',
                            'branches' => [
                                [
                                    'kind' => 'integer',
                                ],
                                [
                                    'kind' => 'string',
                                    'enum' => [
                                        '',
                                    ],
                                ],
                            ],
                        ],
                        'amount_type' => [
                            'kind' => 'string',
                            'enum' => [
                                '',
                                'fixed',
                                'maximum',
                            ],
                        ],
                        'end_date' => [
                            'kind' => 'anyOf',
                            'branches' => [
                                [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
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
                        'payment_schedule' => [
                            'kind' => 'string',
                            'enum' => [
                                '',
                                'adhoc',
                                'annual',
                                'daily',
                                'fortnightly',
                                'monthly',
                                'quarterly',
                                'semi_annual',
                                'weekly',
                            ],
                        ],
                        'payments_per_period' => [
                            'kind' => 'anyOf',
                            'branches' => [
                                [
                                    'kind' => 'integer',
                                ],
                                [
                                    'kind' => 'string',
                                    'enum' => [
                                        '',
                                    ],
                                ],
                            ],
                        ],
                        'purpose' => [
                            'kind' => 'string',
                            'enum' => [
                                '',
                                'dependant_support',
                                'government',
                                'loan',
                                'mortgage',
                                'other',
                                'pension',
                                'personal',
                                'retail',
                                'salary',
                                'tax',
                                'utility',
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
