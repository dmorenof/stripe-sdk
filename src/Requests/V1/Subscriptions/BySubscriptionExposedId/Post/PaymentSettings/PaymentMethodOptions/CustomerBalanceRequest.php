<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\PaymentSettings\PaymentMethodOptions;

final class CustomerBalanceRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\CustomerBalanceRequest9Variant1\Request9Variant1Request::class, \StripeSDK\Enums\CustomerBalanceRequest9Variant2\Request9Variant2Enum::class];
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
                        'type' => [
                            'kind' => 'string',
                        ],
                    ],
                ],
                'funding_type' => [
                    'kind' => 'string',
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
