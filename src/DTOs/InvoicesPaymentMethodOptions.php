<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * InvoicesPaymentMethodOptions
 */
final class InvoicesPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If paying by `acss_debit`, this sub-hash contains details about the Canadian pre-authorized debit payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsAcssDebit $acss_debit;
    /**
     * If paying by `bancontact`, this sub-hash contains details about the Bancontact payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsBancontact $bancontact;
    /**
     * If paying by `billie`, this sub-hash contains details about the Billie payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsBillie $billie;
    /**
     * If paying by `blik`, this sub-hash contains details about the Blik payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsBlik $blik;
    /**
     * If paying by `card`, this sub-hash contains details about the Card payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsCard $card;
    /**
     * If paying by `customer_balance`, this sub-hash contains details about the Bank transfer payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsCustomerBalance $customer_balance;
    /**
     * If paying by `konbini`, this sub-hash contains details about the Konbini payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsKonbini $konbini;
    /**
     * If paying by `payto`, this sub-hash contains details about the PayTo payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsPayto $payto;
    /**
     * If paying by `pix`, this sub-hash contains details about the Pix payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsPix $pix;
    /**
     * If paying by `sepa_debit`, this sub-hash contains details about the SEPA Direct Debit payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsSepaDebit $sepa_debit;
    /**
     * If paying by `upi`, this sub-hash contains details about the UPI payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsUpi $upi;
    /**
     * If paying by `us_bank_account`, this sub-hash contains details about the ACH direct debit payment method options to pass to the invoice’s PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsUsBankAccount $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acss_debit' => $value === null || $value instanceof \stdClass ? $this->acss_debit = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsAcssDebit($value) : parent::assignMember($name, $value),
            'bancontact' => $value === null || $value instanceof \stdClass ? $this->bancontact = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsBancontact($value) : parent::assignMember($name, $value),
            'billie' => $value === null || $value instanceof \stdClass ? $this->billie = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsBillie($value) : parent::assignMember($name, $value),
            'card' => $value === null || $value instanceof \stdClass ? $this->card = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsCard($value) : parent::assignMember($name, $value),
            'customer_balance' => $value === null || $value instanceof \stdClass ? $this->customer_balance = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsCustomerBalance($value) : parent::assignMember($name, $value),
            'payto' => $value === null || $value instanceof \stdClass ? $this->payto = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsPayto($value) : parent::assignMember($name, $value),
            'pix' => $value === null || $value instanceof \stdClass ? $this->pix = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsPix($value) : parent::assignMember($name, $value),
            'upi' => $value === null || $value instanceof \stdClass ? $this->upi = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsUpi($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value === null || $value instanceof \stdClass ? $this->us_bank_account = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsUsBankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
