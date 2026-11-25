<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsBlikRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsBlikRequest9Variant1\Request9Variant1Request::class, \StripeSDK\Enums\OptionsBlikRequest9Variant2\Request9Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'expires_at' => [
                            'kind' => 'integer',
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
