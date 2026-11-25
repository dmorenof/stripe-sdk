<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post;

final class CancelAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\CancelAtRequest4Variant2\Request4Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'integer',
        ],
        [
            'kind' => 'string',
            'enum' => [
                'max_billed_until',
                'max_period_end',
                'min_period_end',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
