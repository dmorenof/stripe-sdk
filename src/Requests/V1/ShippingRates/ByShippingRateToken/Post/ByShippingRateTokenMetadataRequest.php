<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ShippingRates\ByShippingRateToken\Post;

final class ByShippingRateTokenMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByShippingRateTokenMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByShippingRateTokenMetadataRequestVariant2\MetadataVariant2Enum::class];
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
