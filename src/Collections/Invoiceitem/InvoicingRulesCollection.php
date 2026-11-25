<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoiceitem;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\InvoicingRule> */
final class InvoicingRulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\InvoicingRule::class;
}
