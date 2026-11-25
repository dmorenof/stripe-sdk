<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BalanceSettings\Post\Payments\Payouts;

final class ByCurrencyRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByCurrencyRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\CurrencyVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'additional' => [
                'kind' => 'anyOf',
                'branches' => [
                    [
                        'kind' => 'array',
                        'items' => [
                            'kind' => 'object',
                            'properties' => [
                                'payout_method' => [
                                    'kind' => 'string',
                                ],
                                'transfer_up_to_amount' => [
                                    'kind' => 'integer',
                                ],
                                'type' => [
                                    'kind' => 'string',
                                    'enum' => [
                                        'transfer_all',
                                        'transfer_up_to_amount',
                                    ],
                                ],
                            ],
                            'required' => [
                                'payout_method',
                                'type',
                            ],
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
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
