<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoiceitems\Post;

final class InvoiceitemsMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\InvoiceitemsMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\InvoiceitemsMetadataRequestVariant2\MetadataVariant2Enum::class];
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
