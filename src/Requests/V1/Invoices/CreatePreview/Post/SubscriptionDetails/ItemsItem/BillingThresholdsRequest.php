<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\ItemsItem;

final class BillingThresholdsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\BillingThresholdsRequest7Variant1\Request7Variant1Request::class, \StripeSDK\Enums\BillingThresholdsRequest7Variant2\Request7Variant2Enum::class];
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
