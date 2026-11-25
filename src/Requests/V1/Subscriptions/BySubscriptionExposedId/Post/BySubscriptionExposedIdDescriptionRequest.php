<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post;

final class BySubscriptionExposedIdDescriptionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\BySubscriptionExposedIdDescriptionRequestVariant2\DescriptionVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 500,
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
