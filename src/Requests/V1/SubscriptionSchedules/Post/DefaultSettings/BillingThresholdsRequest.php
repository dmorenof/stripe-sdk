<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings;

final class BillingThresholdsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\BillingThresholdsRequest10Variant1\Request10Variant1Request::class, \StripeSDK\Enums\BillingThresholdsRequest10Variant2\Request10Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'amount_gte' => [
                    'kind' => 'integer',
                ],
                'reset_billing_cycle_anchor' => [
                    'kind' => 'boolean',
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
