<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post\InvoiceSettings;

final class SettingsDescriptionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\SettingsDescriptionRequestVariant2\DescriptionVariant2Enum::class];
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
