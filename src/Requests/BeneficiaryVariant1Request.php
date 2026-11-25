<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * beneficiary_params
 */
final class BeneficiaryVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'public_name',
    ];

    public \StripeSDK\Requests\ByOrderBeneficiaryRequestVariant1\PublicNameRequest $public_name;
}
