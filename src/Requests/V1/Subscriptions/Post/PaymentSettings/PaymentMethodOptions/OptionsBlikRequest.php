<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsBlikRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsBlikRequest8Variant1\Request8Variant1Request::class, \StripeSDK\Enums\OptionsBlikRequest8Variant2\Request8Variant2Enum::class];
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
