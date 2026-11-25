<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Tax\Association;

final class TransactionAttemptsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\TaxProduct\ResourceTaxAssociationTransactionAttempts::class;
}
