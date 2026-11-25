<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Topups\ByTopup\Post;

final class ByTopupMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByTopupMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByTopupMetadataRequestVariant2\MetadataVariant2Enum::class];
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
