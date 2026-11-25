<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BalanceSettings\Post\Payments\Payouts\AnyOfMinimumBalanceByCurrency;

final class ByCurrencyRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByCurrencyRequest2Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByCurrencyRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'additional' => [
                'kind' => 'anyOf',
                'branches' => [
                    [
                        'kind' => 'integer',
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
