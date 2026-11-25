<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData;

/**
 * param
 */
final class DataKlarnaRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\Klarna\KlarnaDobRequest $dob;
}
