<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel\CancellationReason;

final class ReasonOptionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\OptionsVariant1Collection::class, \StripeSDK\Enums\ReasonOptionsRequestVariant2\OptionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
                'enum' => [
                    'customer_service',
                    'low_quality',
                    'missing_features',
                    'other',
                    'switched_service',
                    'too_complex',
                    'too_expensive',
                    'unused',
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
