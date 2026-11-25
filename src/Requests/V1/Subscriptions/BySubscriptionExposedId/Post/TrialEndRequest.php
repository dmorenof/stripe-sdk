<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post;

final class TrialEndRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Enums\TrialEndRequest7Variant1\Request7Variant1Enum::class, 'int'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'enum' => [
                'now',
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
