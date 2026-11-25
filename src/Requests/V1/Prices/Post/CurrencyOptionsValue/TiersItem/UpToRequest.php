<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\Post\CurrencyOptionsValue\TiersItem;

final class UpToRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Enums\UpToRequest2Variant1\Request2Variant1Enum::class, 'int'];
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
