<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentMethodOptions;

final class SepaDebitRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\SepaDebitRequest6Variant1\Request6Variant1Request::class, \StripeSDK\Enums\SepaDebitRequest6Variant2\Request6Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'reference_prefix' => [
                            'kind' => 'anyOf',
                            'branches' => [
                                [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 12,
                                    ],
                                ],
                                [
                                    'kind' => 'string',
                                    'enum' => [
                                        '',
                                    ],
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
