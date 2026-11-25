<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\Shipping;

final class ShippingPhoneRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\ShippingPhoneRequestVariant2\PhoneVariant2Enum::class];
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
