<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\ItemsItem;

final class ItemsItemMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ItemsItemMetadataRequest4Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ItemsItemMetadataRequest4Variant2\Request4Variant2Enum::class];
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
