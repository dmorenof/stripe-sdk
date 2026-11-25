<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BalanceSettings\Post\Payments\SettlementTiming;

final class StartDayRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DayVariant1Request::class, \StripeSDK\Enums\DayVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'hour' => [
                    'kind' => 'integer',
                ],
                'minutes' => [
                    'kind' => 'integer',
                ],
                'timezone' => [
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
