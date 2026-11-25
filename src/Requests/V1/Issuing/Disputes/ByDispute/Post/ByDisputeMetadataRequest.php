<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Disputes\ByDispute\Post;

final class ByDisputeMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByDisputeMetadataRequest2Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByDisputeMetadataRequest2Variant2\Request2Variant2Enum::class];
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
