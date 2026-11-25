<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post;

final class BillingSchedulesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\BillingSchedulesRequest2Variant1Array\Request2Variant1Collection::class, \StripeSDK\Enums\BillingSchedulesRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'applies_to' => [
                        'kind' => 'array',
                        'items' => [
                            'kind' => 'object',
                            'properties' => [
                                'price' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                                'type' => [
                                    'kind' => 'string',
                                    'enum' => [
                                        'price',
                                    ],
                                ],
                            ],
                            'required' => [
                                'type',
                            ],
                        ],
                    ],
                    'bill_until' => [
                        'kind' => 'object',
                        'properties' => [
                            'duration' => [
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
                            'timestamp' => [
                                'kind' => 'integer',
                            ],
                            'type' => [
                                'kind' => 'string',
                                'enum' => [
                                    'duration',
                                    'timestamp',
                                ],
                            ],
                        ],
                        'required' => [
                            'type',
                        ],
                    ],
                    'key' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 200,
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
