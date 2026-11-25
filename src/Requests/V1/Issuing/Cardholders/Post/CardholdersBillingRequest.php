<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\Post;

/**
 * billing_specs
 *
 * The cardholder's billing address.
 */
final class CardholdersBillingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
    ];

    public \StripeSDK\Requests\V1\Issuing\Cardholders\Post\Billing\BillingAddressRequest $address;
}
