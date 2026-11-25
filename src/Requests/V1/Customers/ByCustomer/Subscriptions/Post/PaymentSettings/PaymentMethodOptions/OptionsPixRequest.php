<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsPixRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\PixVariant1Request::class, \StripeSDK\Enums\PixVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'expires_after_seconds' => [
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
