<?php

declare(strict_types=1);

namespace StripeSDK\Requests\MandateDataRequestVariant1;

/**
 * secret_key_param
 */
final class DataVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_acceptance',
    ];

    public \StripeSDK\Requests\MandateDataRequestVariant1\CustomerAcceptanceRequest $customer_acceptance;
}
