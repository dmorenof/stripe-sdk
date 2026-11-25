<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\FileLinks\Post;

final class FileLinksMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\FileLinksMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\FileLinksMetadataRequestVariant2\MetadataVariant2Enum::class];
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
