<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ShippingAddress;

final class AddressLine2Request extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\AddressLine2Request2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
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
