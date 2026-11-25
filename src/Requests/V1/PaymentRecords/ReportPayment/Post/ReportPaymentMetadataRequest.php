<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post;

final class ReportPaymentMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ReportPaymentMetadataRequestVariant1Map\Variant1MapRequest::class, \StripeSDK\Enums\ReportPaymentMetadataRequestVariant2\MetadataVariant2Enum::class];
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
