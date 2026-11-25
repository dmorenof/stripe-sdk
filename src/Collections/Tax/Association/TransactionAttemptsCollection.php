<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Tax\Association;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\TaxProduct\ResourceTaxAssociationTransactionAttempts> */
final class TransactionAttemptsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TaxProduct\ResourceTaxAssociationTransactionAttempts::class;
}
