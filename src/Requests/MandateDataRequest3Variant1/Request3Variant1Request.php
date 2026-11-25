<?php

declare(strict_types=1);

namespace StripeSDK\Requests\MandateDataRequest3Variant1;

/**
 * secret_key_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_acceptance',
    ];

    public \StripeSDK\Requests\MandateDataRequest3Variant1\CustomerAcceptanceRequest $customer_acceptance;
}
