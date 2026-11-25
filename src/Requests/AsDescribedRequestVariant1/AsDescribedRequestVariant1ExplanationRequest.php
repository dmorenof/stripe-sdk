<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AsDescribedRequestVariant1;

final class AsDescribedRequestVariant1ExplanationRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\AsDescribedRequestVariant1ExplanationRequestVariant2\ExplanationVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 2500,
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
