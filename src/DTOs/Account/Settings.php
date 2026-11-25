<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountSettings
 */
final class Settings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'branding',
        'card_payments',
        'dashboard',
        'payments',
    ];

    public \StripeSDK\DTOs\Account\BacsDebitPaymentsSettings $bacs_debit_payments;
    public \StripeSDK\DTOs\Account\BrandingSettings $branding;
    public \StripeSDK\DTOs\Account\CardIssuingSettings $card_issuing;
    public \StripeSDK\DTOs\Account\CardPaymentsSettings $card_payments;
    public \StripeSDK\DTOs\Account\DashboardSettings $dashboard;
    public \StripeSDK\DTOs\Account\InvoicesSettings $invoices;
    public \StripeSDK\DTOs\Account\PaymentsSettings $payments;
    public \StripeSDK\DTOs\Account\PayoutSettings $payouts;
    public \StripeSDK\DTOs\Account\PaypayPaymentsSettings $paypay_payments;
    public \StripeSDK\DTOs\Account\SepaDebitPaymentsSettings $sepa_debit_payments;
    public \StripeSDK\DTOs\Account\TreasurySettings $treasury;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bacs_debit_payments' => $value instanceof \stdClass ? $this->bacs_debit_payments = new \StripeSDK\DTOs\Account\BacsDebitPaymentsSettings($value) : parent::assignMember($name, $value),
            'branding' => $value instanceof \stdClass ? $this->branding = new \StripeSDK\DTOs\Account\BrandingSettings($value) : parent::assignMember($name, $value),
            'card_issuing' => $value instanceof \stdClass ? $this->card_issuing = new \StripeSDK\DTOs\Account\CardIssuingSettings($value) : parent::assignMember($name, $value),
            'card_payments' => $value instanceof \stdClass ? $this->card_payments = new \StripeSDK\DTOs\Account\CardPaymentsSettings($value) : parent::assignMember($name, $value),
            'dashboard' => $value instanceof \stdClass ? $this->dashboard = new \StripeSDK\DTOs\Account\DashboardSettings($value) : parent::assignMember($name, $value),
            'invoices' => $value instanceof \stdClass ? $this->invoices = new \StripeSDK\DTOs\Account\InvoicesSettings($value) : parent::assignMember($name, $value),
            'payments' => $value instanceof \stdClass ? $this->payments = new \StripeSDK\DTOs\Account\PaymentsSettings($value) : parent::assignMember($name, $value),
            'payouts' => $value instanceof \stdClass ? $this->payouts = new \StripeSDK\DTOs\Account\PayoutSettings($value) : parent::assignMember($name, $value),
            'paypay_payments' => $value instanceof \stdClass ? $this->paypay_payments = new \StripeSDK\DTOs\Account\PaypayPaymentsSettings($value) : parent::assignMember($name, $value),
            'sepa_debit_payments' => $value instanceof \stdClass ? $this->sepa_debit_payments = new \StripeSDK\DTOs\Account\SepaDebitPaymentsSettings($value) : parent::assignMember($name, $value),
            'treasury' => $value instanceof \stdClass ? $this->treasury = new \StripeSDK\DTOs\Account\TreasurySettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
