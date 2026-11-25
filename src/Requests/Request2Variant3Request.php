<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * client_key_param
 *
 * This hash contains details about the Mandate to create
 */
final class Request2Variant3Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_acceptance',
    ];

    public \StripeSDK\Requests\MandateDataRequest2Variant3\CustomerAcceptanceRequest $customer_acceptance;
}
