<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Authorizations\ByAuthorization\Approve\Post;

final class ApproveMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ApproveMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ApproveMetadataRequestVariant2\MetadataVariant2Enum::class];
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
