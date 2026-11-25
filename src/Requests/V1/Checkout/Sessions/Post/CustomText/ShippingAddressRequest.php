<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\CustomText;

final class ShippingAddressRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\AddressVariant1Request::class, \StripeSDK\Enums\ShippingAddressRequestVariant2\AddressVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'message' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 1200,
                    ],
                ],
            ],
            'required' => [
                'message',
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
