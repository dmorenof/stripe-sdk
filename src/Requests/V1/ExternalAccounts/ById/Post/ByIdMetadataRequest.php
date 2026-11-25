<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ExternalAccounts\ById\Post;

final class ByIdMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByIdMetadataRequest8Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByIdMetadataRequest8Variant2\Request8Variant2Enum::class];
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
