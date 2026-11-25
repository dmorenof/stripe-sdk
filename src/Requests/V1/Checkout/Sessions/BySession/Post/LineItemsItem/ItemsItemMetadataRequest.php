<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\LineItemsItem;

final class ItemsItemMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ItemsItemMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ItemsItemMetadataRequestVariant2\MetadataVariant2Enum::class];
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
