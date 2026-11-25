<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsKonbiniRequest6Variant1;

final class ExpiresAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\ExpiresAtRequest4Variant2\Request4Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'integer',
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
