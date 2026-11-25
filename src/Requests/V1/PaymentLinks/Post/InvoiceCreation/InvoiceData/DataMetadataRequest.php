<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post\InvoiceCreation\InvoiceData;

final class DataMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DataMetadataRequest6Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\DataMetadataRequest6Variant2\Request6Variant2Enum::class];
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
