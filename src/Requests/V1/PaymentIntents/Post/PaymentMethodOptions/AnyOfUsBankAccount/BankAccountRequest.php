<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\AnyOfUsBankAccount;

final class BankAccountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\Request13Variant1Request::class, \StripeSDK\Enums\BankAccountRequest13Variant2\Request13Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'financial_connections' => [
                    'kind' => 'object',
                    'properties' => [
                        'filters' => [
                            'kind' => 'object',
                            'properties' => [
                                'account_subcategories' => [
                                    'kind' => 'array',
                                    'items' => [
                                        'kind' => 'string',
                                        'enum' => [
                                            'checking',
                                            'savings',
                                        ],
                                        'rules' => [
                                            'maxLength' => 5000,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'permissions' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'string',
                                'enum' => [
                                    'balances',
                                    'ownership',
                                    'payment_method',
                                    'transactions',
                                ],
                                'rules' => [
                                    'maxLength' => 5000,
                                ],
                            ],
                        ],
                        'prefetch' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'string',
                                'enum' => [
                                    'balances',
                                    'ownership',
                                    'transactions',
                                ],
                            ],
                        ],
                        'return_url' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                ],
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'collection_method' => [
                            'kind' => 'string',
                            'enum' => [
                                '',
                                'paper',
                            ],
                        ],
                    ],
                ],
                'networks' => [
                    'kind' => 'object',
                    'properties' => [
                        'requested' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'string',
                                'enum' => [
                                    'ach',
                                    'us_domestic_wire',
                                ],
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
                'transaction_purpose' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'goods',
                        'other',
                        'services',
                        'unspecified',
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
