<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\ScheduleAtPeriodEnd;

final class EndConditionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\ConditionsVariant1Collection::class, \StripeSDK\Enums\ConditionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'type' => [
                        'kind' => 'string',
                        'enum' => [
                            'decreasing_item_amount',
                            'shortening_interval',
                        ],
                    ],
                ],
                'required' => [
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
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
