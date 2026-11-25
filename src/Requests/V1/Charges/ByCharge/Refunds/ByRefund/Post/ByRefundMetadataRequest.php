<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\ByCharge\Refunds\ByRefund\Post;

final class ByRefundMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByRefundMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByRefundMetadataRequestVariant2\MetadataVariant2Enum::class];
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
