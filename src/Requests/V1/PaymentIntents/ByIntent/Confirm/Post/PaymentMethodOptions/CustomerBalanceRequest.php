<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodOptions;

final class CustomerBalanceRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\CustomerBalanceRequest7Variant1\Request7Variant1Request::class, \StripeSDK\Enums\CustomerBalanceRequest7Variant2\Request7Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'bank_transfer' => [
                    'kind' => 'object',
                    'properties' => [
                        'eu_bank_transfer' => [
                            'kind' => 'object',
                            'properties' => [
                                'country' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                            ],
                            'required' => [
                                'country',
                            ],
                        ],
                        'requested_address_types' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'string',
                                'enum' => [
                                    'aba',
                                    'iban',
                                    'sepa',
                                    'sort_code',
                                    'spei',
                                    'swift',
                                    'zengin',
                                ],
                            ],
                        ],
                        'type' => [
                            'kind' => 'string',
                            'enum' => [
                                'eu_bank_transfer',
                                'gb_bank_transfer',
                                'jp_bank_transfer',
                                'mx_bank_transfer',
                                'us_bank_transfer',
                            ],
                        ],
                    ],
                    'required' => [
                        'type',
                    ],
                ],
                'funding_type' => [
                    'kind' => 'string',
                    'enum' => [
                        'bank_transfer',
                    ],
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        'none',
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
