<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\PaymentIntentData;

final class DataDescriptionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\DataDescriptionRequestVariant2\DescriptionVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 1000,
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
