<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Products\Post\DefaultPriceData\CurrencyOptionsValue\TiersItem;

final class UpToRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Enums\UpToRequest5Variant1\Request5Variant1Enum::class, 'int'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'enum' => [
                'inf',
            ],
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'integer',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
