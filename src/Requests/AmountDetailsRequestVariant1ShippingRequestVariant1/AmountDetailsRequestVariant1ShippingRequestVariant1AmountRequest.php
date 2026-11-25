<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AmountDetailsRequestVariant1ShippingRequestVariant1;

final class AmountDetailsRequestVariant1ShippingRequestVariant1AmountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\AmountDetailsRequestVariant1ShippingRequestVariant1AmountRequestVariant2\AmountVariant2Enum::class];
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
