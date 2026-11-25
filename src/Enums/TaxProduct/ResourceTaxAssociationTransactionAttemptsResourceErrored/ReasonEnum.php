<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceTaxAssociationTransactionAttemptsResourceErrored;

enum ReasonEnum: string
{
    case AnotherPaymentAssociatedWithCalculation = 'another_payment_associated_with_calculation';
    case CalculationExpired = 'calculation_expired';
    case CurrencyMismatch = 'currency_mismatch';
    case OriginalTransactionVoided = 'original_transaction_voided';
    case UniqueReferenceViolation = 'unique_reference_violation';
}
