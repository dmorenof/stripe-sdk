<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post\PaymentSettings\PaymentMethodOptions;

final class CustomerBalanceRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\CustomerBalanceRequest8Variant1\Request8Variant1Request::class, \StripeSDK\Enums\CustomerBalanceRequest8Variant2\Request8Variant2Enum::class];
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
