<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\TransferData\PaymentData;

final class DataMetadataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DataMetadataRequest3Variant1Map\Variant1MapRequest::class, \StripeSDK\Enums\DataMetadataRequest3Variant2\Request3Variant2Enum::class];
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
