<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\Post;

final class ChargesMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ChargesMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ChargesMetadataRequestVariant2\MetadataVariant2Enum::class];
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
