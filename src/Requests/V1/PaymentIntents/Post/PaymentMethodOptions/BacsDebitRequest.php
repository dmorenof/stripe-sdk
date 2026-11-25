<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions;

final class BacsDebitRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\BacsDebitRequestVariant1\DebitVariant1Request::class, \StripeSDK\Enums\BacsDebitRequestVariant2\DebitVariant2Enum::class];
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
