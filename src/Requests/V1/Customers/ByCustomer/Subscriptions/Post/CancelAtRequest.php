<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post;

final class CancelAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\CancelAtRequestVariant2\AtVariant2Enum::class];
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
