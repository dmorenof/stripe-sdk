<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice;

final class CreditAmountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\InvoicesResource\PretaxCreditAmount::class;
}
