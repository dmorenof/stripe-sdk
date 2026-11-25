<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post\PaymentSettings\PaymentMethodOptions;

final class OptionsUpiRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsUpiRequest8Variant1\Request8Variant1Request::class, \StripeSDK\Enums\OptionsUpiRequest8Variant2\Request8Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'amount' => [
                            'kind' => 'integer',
                        ],
                        'amount_type' => [
                            'kind' => 'string',
                            'enum' => [
                                'fixed',
                                'maximum',
                            ],
                        ],
                        'description' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 20,
                            ],
                        ],
                        'end_date' => [
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
