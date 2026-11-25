<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\InvoiceSettings;

final class SettingsDescriptionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\SettingsDescriptionRequest9Variant2\Request9Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 1500,
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
