<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post;

final class SubscriptionsMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\SubscriptionsMetadataRequest2Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\SubscriptionsMetadataRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'additional' => [
                'kind' => 'string',
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
