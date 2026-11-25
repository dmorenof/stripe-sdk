<?php

declare(strict_types=1);

namespace StripeSDK\Requests\MandateDataRequest4Variant1;

/**
 * secret_key_param
 */
final class Request4Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_acceptance',
    ];

    public \StripeSDK\Requests\MandateDataRequest4Variant1\CustomerAcceptanceRequest $customer_acceptance;
}
