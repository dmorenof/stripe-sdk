<?php

declare(strict_types=1);

namespace StripeSDK\Requests\DetailsShippingRequest4Variant1\AnyOfToPostalCode;

final class PostalCodeRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\PostalCodeRequest14Variant2\Request14Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 10,
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
