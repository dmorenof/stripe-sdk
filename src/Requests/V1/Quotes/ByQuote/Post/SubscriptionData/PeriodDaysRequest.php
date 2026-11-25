<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\ByQuote\Post\SubscriptionData;

final class PeriodDaysRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\PeriodDaysRequest3Variant2\Request3Variant2Enum::class];
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
