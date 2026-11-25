<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Authorizations\ByAuthorization\Decline\Post;

final class DeclineMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DeclineMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\DeclineMetadataRequestVariant2\MetadataVariant2Enum::class];
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
