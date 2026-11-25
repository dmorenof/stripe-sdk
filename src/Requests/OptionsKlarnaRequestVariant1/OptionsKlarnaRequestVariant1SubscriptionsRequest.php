<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsKlarnaRequestVariant1;

final class OptionsKlarnaRequestVariant1SubscriptionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\OptionsKlarnaRequestVariant1SubscriptionsRequestVariant1Array\SubscriptionsVariant1Collection::class, \StripeSDK\Enums\OptionsKlarnaRequestVariant1SubscriptionsRequestVariant2\SubscriptionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
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
                    'name' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 255,
                        ],
                    ],
                    'next_billing' => [
                        'kind' => 'object',
                        'properties' => [
                            'amount' => [
                                'kind' => 'integer',
                            ],
                            'date' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 5000,
                                ],
                            ],
                        ],
                        'required' => [
                            'amount',
                            'date',
                        ],
                    ],
                    'reference' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 255,
                        ],
                    ],
                ],
                'required' => [
                    'interval',
                    'reference',
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
