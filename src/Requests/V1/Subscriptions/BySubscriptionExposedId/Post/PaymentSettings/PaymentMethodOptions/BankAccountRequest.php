<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\PaymentSettings\PaymentMethodOptions;

final class BankAccountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\BankAccountRequest19Variant1\Request19Variant1Request::class, \StripeSDK\Enums\BankAccountRequest19Variant2\Request19Variant2Enum::class];
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
