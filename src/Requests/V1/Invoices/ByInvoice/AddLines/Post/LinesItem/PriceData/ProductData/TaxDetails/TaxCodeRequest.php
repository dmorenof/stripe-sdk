<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem\PriceData\ProductData\TaxDetails;

final class TaxCodeRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\TaxCodeRequest6Variant2\Request6Variant2Enum::class];
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
