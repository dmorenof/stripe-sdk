<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ShippingDetailsRequestVariant1;

final class ShippingDetailsRequestVariant1PhoneRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\ShippingDetailsRequestVariant1PhoneRequestVariant2\PhoneVariant2Enum::class];
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
