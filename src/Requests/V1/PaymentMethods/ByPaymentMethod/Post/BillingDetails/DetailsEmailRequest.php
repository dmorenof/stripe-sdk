<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post\BillingDetails;

final class DetailsEmailRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\DetailsEmailRequest5Variant2\Request5Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
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
