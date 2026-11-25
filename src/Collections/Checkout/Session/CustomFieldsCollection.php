<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Checkout\Session;

final class CustomFieldsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomFields::class;
}
