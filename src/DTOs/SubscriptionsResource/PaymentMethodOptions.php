<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * SubscriptionsResourcePaymentMethodOptions
 */
final class PaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * This sub-hash contains details about the Canadian pre-authorized debit payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsAcssDebit $acss_debit;
    /**
     * This sub-hash contains details about the Bancontact payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsBancontact $bancontact;
    /**
     * This sub-hash contains details about the Billie payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Subscription\PaymentMethodOptionsBillie $billie;
    /**
     * This sub-hash contains details about the Blik payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Subscription\PaymentMethodOptionsBlik $blik;
    /**
     * This sub-hash contains details about the Card payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Subscription\PaymentMethodOptionsCard $card;
    /**
     * This sub-hash contains details about the Bank transfer payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsCustomerBalance $customer_balance;
    /**
     * This sub-hash contains details about the Konbini payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsKonbini $konbini;
    /**
     * This sub-hash contains details about the PayTo payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsPayto $payto;
    /**
     * This sub-hash contains details about the Pix payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Subscription\PaymentMethodOptionsPix $pix;
    /**
     * This sub-hash contains details about the SEPA Direct Debit payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsSepaDebit $sepa_debit;
    /**
     * This sub-hash contains details about the UPI payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsUpi $upi;
    /**
     * This sub-hash contains details about the ACH direct debit payment method options to pass to invoices created by the subscription.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodOptionsUsBankAccount $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acss_debit' => $value === null || $value instanceof \stdClass ? $this->acss_debit = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsAcssDebit($value) : parent::assignMember($name, $value),
            'bancontact' => $value === null || $value instanceof \stdClass ? $this->bancontact = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsBancontact($value) : parent::assignMember($name, $value),
            'billie' => $value === null || $value instanceof \stdClass ? $this->billie = $value === null ? null : new \StripeSDK\DTOs\Subscription\PaymentMethodOptionsBillie($value) : parent::assignMember($name, $value),
            'blik' => $value === null || $value instanceof \stdClass ? $this->blik = $value === null ? null : new \StripeSDK\DTOs\Subscription\PaymentMethodOptionsBlik($value) : parent::assignMember($name, $value),
            'card' => $value === null || $value instanceof \stdClass ? $this->card = $value === null ? null : new \StripeSDK\DTOs\Subscription\PaymentMethodOptionsCard($value) : parent::assignMember($name, $value),
            'customer_balance' => $value === null || $value instanceof \stdClass ? $this->customer_balance = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsCustomerBalance($value) : parent::assignMember($name, $value),
            'payto' => $value === null || $value instanceof \stdClass ? $this->payto = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsPayto($value) : parent::assignMember($name, $value),
            'pix' => $value === null || $value instanceof \stdClass ? $this->pix = $value === null ? null : new \StripeSDK\DTOs\Subscription\PaymentMethodOptionsPix($value) : parent::assignMember($name, $value),
            'upi' => $value === null || $value instanceof \stdClass ? $this->upi = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsUpi($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value === null || $value instanceof \stdClass ? $this->us_bank_account = $value === null ? null : new \StripeSDK\DTOs\Invoice\PaymentMethodOptionsUsBankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
