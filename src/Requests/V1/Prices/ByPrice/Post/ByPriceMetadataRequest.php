<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\ByPrice\Post;

final class ByPriceMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByPriceMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByPriceMetadataRequestVariant2\MetadataVariant2Enum::class];
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
