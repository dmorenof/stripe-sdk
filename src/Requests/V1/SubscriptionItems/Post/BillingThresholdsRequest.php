<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionItems\Post;

final class BillingThresholdsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\BillingThresholdsRequest8Variant1\Request8Variant1Request::class, \StripeSDK\Enums\BillingThresholdsRequest8Variant2\Request8Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'usage_gte' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'usage_gte',
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
