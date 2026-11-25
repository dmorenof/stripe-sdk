<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post;

final class PauseCollectionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\PauseCollectionRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\PauseCollectionRequest2Variant2\Request2Variant2Enum::class];
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
