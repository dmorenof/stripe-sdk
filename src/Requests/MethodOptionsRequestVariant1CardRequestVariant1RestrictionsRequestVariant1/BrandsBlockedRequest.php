<?php

declare(strict_types=1);

namespace StripeSDK\Requests\MethodOptionsRequestVariant1CardRequestVariant1RestrictionsRequestVariant1;

final class BrandsBlockedRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\BlockedVariant1Collection::class, \StripeSDK\Enums\BlockedVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
                'enum' => [
                    'american_express',
                    'discover_global_network',
                    'mastercard',
                    'visa',
                ],
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
