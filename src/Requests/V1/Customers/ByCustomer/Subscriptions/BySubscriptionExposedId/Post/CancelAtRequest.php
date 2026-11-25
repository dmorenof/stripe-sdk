<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post;

final class CancelAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\CancelAtRequest2Variant2\Request2Variant2Enum::class, \StripeSDK\Enums\Request2Variant3Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'integer',
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
        [
            'kind' => 'string',
            'enum' => [
                'max_billed_until',
                'max_period_end',
                'min_period_end',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
