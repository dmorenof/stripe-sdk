<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingCreditGrantsResourceBalanceCredit
 */
final class CreditGrantsResourceBalanceCredit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'type',
    ];

    public \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount $amount;
    /**
     * Details of the invoice to which the reinstated credits were originally applied. Only present if `type` is `credits_application_invoice_voided`.
     */
    public ?\StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceCreditsApplicationInvoiceVoided $credits_application_invoice_voided;
    /**
     * The type of credit transaction.
     */
    public \StripeSDK\Enums\Billing\CreditGrantsResourceBalanceCredit\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value instanceof \stdClass ? $this->amount = new \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount($value) : parent::assignMember($name, $value),
            'credits_application_invoice_voided' => $value === null || $value instanceof \stdClass ? $this->credits_application_invoice_voided = $value === null ? null : new \StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceCreditsApplicationInvoiceVoided($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\CreditGrantsResourceBalanceCredit\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
