<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\BalanceTransactions\Post;

final class BalanceTransactionsMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\BalanceTransactionsMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\BalanceTransactionsMetadataRequestVariant2\MetadataVariant2Enum::class];
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
