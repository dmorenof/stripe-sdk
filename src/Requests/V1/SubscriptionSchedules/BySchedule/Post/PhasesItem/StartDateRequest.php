<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem;

final class StartDateRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\StartDateRequest7Variant2\Request7Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'integer',
        ],
        [
            'kind' => 'string',
            'enum' => [
                'now',
            ],
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
