<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Products\ById\Post;

final class ByIdMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByIdMetadataRequest9Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByIdMetadataRequest9Variant2\Request9Variant2Enum::class];
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
