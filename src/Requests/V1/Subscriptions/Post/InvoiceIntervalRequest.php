<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post;

final class InvoiceIntervalRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\InvoiceIntervalRequest3Variant1\Request3Variant1Request::class, \StripeSDK\Enums\InvoiceIntervalRequest3Variant2\Request3Variant2Enum::class];
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
