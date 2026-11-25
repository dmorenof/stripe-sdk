<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\Post;

/**
 * param
 *
 * If this is a `klarna` PaymentMethod, this hash contains details about the Klarna payment method.
 */
final class PaymentMethodsKlarnaRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethods\Post\Klarna\KlarnaDobRequest $dob;
}
