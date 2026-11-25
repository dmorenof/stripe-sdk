<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post;

final class InvoiceIntervalRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\InvoiceIntervalRequest4Variant1\Request4Variant1Request::class, \StripeSDK\Enums\InvoiceIntervalRequest4Variant2\Request4Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'interval' => [
                    'kind' => 'string',
                    'enum' => [
                        'day',
                        'month',
                        'week',
                        'year',
                    ],
                ],
                'interval_count' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'interval',
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
