<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData;

/**
 * param
 */
final class DataKlarnaRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\Klarna\KlarnaDobRequest $dob;
}
