<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings;

final class TransferDataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\TransferDataRequest6Variant1\Request6Variant1Request::class, \StripeSDK\Enums\TransferDataRequest6Variant2\Request6Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'amount_percent' => [
                    'kind' => 'number',
                ],
                'destination' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'destination',
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
