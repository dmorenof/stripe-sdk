<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData\BillingDetails;

final class DetailsPhoneRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\DetailsPhoneRequest10Variant2\Request10Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
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
