<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\PagesCheckoutSessionCustomerDetails;

final class TaxIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Payment\PagesCheckoutSessionTaxId::class;
}
