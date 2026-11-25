<?php

declare(strict_types=1);

namespace StripeSDK\Requests\DetailsShippingRequest4Variant1;

final class DetailsShippingRequest4Variant1AmountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\DetailsShippingRequest4Variant1AmountRequestVariant2\AmountVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'integer',
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
