<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPaytoRequest6Variant1\MandateOptions;

final class PerPeriodRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\PerPeriodRequest3Variant2\Request3Variant2Enum::class];
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
