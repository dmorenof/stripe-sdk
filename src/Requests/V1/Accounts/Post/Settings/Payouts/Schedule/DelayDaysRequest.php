<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings\Payouts\Schedule;

final class DelayDaysRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Enums\DaysVariant1Enum::class, 'int'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'enum' => [
                'minimum',
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
