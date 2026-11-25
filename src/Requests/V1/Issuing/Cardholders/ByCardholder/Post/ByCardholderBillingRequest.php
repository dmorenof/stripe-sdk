<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post;

/**
 * billing_specs
 *
 * The cardholder's billing address.
 */
final class ByCardholderBillingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
    ];

    public \StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Billing\BillingAddressRequest $address;
}
