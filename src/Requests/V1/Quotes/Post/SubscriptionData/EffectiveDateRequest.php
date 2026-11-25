<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\Post\SubscriptionData;

final class EffectiveDateRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Enums\DateVariant1Enum::class, 'int', \StripeSDK\Enums\DateVariant3Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'enum' => [
                'current_period_end',
            ],
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
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
