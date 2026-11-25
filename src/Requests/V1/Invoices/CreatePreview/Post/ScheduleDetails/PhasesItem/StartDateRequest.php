<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem;

final class StartDateRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\StartDateRequest2Variant2\Request2Variant2Enum::class];
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
