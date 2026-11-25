<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\WebhookEndpoints\Post;

final class WebhookEndpointsMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\WebhookEndpointsMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\WebhookEndpointsMetadataRequestVariant2\MetadataVariant2Enum::class];
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
