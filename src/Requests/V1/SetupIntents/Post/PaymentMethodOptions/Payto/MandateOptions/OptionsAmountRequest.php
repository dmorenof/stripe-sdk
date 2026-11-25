<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions;

final class OptionsAmountRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\OptionsAmountRequest5Variant2\Request5Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'integer',
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
