<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\Post\ProductData\TaxDetails;

final class TaxCodeRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\TaxCodeRequest11Variant2\Request11Variant2Enum::class];
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
