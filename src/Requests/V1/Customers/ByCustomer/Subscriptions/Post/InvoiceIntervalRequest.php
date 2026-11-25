<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post;

final class InvoiceIntervalRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\IntervalVariant1Request::class, \StripeSDK\Enums\IntervalVariant2Enum::class];
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
