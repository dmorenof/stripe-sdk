<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\CustomerUpdate;

final class AllowedUpdatesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\UpdatesVariant1Collection::class, \StripeSDK\Enums\UpdatesVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
                'enum' => [
                    'address',
                    'email',
                    'name',
                    'phone',
                    'shipping',
                    'tax_id',
                ],
            ],
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
