<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post;

final class CancelAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\CancelAtRequest5Variant2\Request5Variant2Enum::class, \StripeSDK\Enums\Request5Variant3Enum::class];
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
