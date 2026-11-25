<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post;

final class PauseCollectionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\CollectionVariant1Request::class, \StripeSDK\Enums\CollectionVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'behavior' => [
                    'kind' => 'string',
                    'enum' => [
                        'keep_as_draft',
                        'mark_uncollectible',
                        'void',
                    ],
                ],
                'resumes_at' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'behavior',
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
