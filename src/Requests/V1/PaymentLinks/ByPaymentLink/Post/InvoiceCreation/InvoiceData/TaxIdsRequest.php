<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\InvoiceCreation\InvoiceData;

final class TaxIdsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection::class, \StripeSDK\Enums\TaxIdsRequest9Variant2\Request9Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
                'rules' => [
                    'maxLength' => 5000,
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
