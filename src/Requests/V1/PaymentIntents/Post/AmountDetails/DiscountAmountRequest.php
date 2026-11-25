<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\AmountDetails;

final class DiscountAmountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\DiscountAmountRequestVariant2\AmountVariant2Enum::class];
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
