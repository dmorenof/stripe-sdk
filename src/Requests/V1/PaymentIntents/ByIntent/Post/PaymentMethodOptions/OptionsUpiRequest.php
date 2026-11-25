<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentMethodOptions;

final class OptionsUpiRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsUpiRequest6Variant1\Request6Variant1Request::class, \StripeSDK\Enums\OptionsUpiRequest6Variant2\Request6Variant2Enum::class];
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
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'none',
                        'off_session',
                        'on_session',
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
