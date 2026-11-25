<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Transactions\ByTransaction\Post;

final class ByTransactionMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByTransactionMetadataRequest2Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ByTransactionMetadataRequest2Variant2\Request2Variant2Enum::class];
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
