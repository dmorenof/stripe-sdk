<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Klarna;

final class KlarnaSubscriptionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\KlarnaSubscriptionsRequest4Variant1Array\Request4Variant1Collection::class, \StripeSDK\Enums\KlarnaSubscriptionsRequest4Variant2\Request4Variant2Enum::class];
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
                    'next_billing',
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
