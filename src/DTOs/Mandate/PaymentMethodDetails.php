<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Mandate;

/**
 * mandate_payment_method_details
 */
final class PaymentMethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Mandate\AcssDebit $acss_debit;
    public \StripeSDK\DTOs\Mandate\AmazonPay $amazon_pay;
    public \StripeSDK\DTOs\Mandate\AuBecsDebit $au_becs_debit;
    public \StripeSDK\DTOs\Mandate\BacsDebit $bacs_debit;
    public \StripeSDK\DTOs\Mandate\Blik $blik;
    public \StripeSDK\DTOs\Card\MandatePaymentMethodDetails $card;
    public \StripeSDK\DTOs\Mandate\Cashapp $cashapp;
    public \StripeSDK\DTOs\Mandate\KakaoPay $kakao_pay;
    public \StripeSDK\DTOs\Mandate\Klarna $klarna;
    public \StripeSDK\DTOs\Mandate\KrCard $kr_card;
    public \StripeSDK\DTOs\Mandate\Link $link;
    public \StripeSDK\DTOs\Mandate\NaverPay $naver_pay;
    public \StripeSDK\DTOs\Mandate\NzBankAccount $nz_bank_account;
    public \StripeSDK\DTOs\Mandate\Paypal $paypal;
    public \StripeSDK\DTOs\Mandate\Payto $payto;
    public \StripeSDK\DTOs\Mandate\Pix $pix;
    public \StripeSDK\DTOs\Mandate\RevolutPay $revolut_pay;
    public \StripeSDK\DTOs\Mandate\SepaDebit $sepa_debit;
    public \StripeSDK\DTOs\Mandate\Twint $twint;
    /**
     * This mandate corresponds with a specific payment method type. The `payment_method_details` includes an additional hash with the same name and contains mandate information that's specific to that payment method.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public \StripeSDK\DTOs\Mandate\Upi $upi;
    public \StripeSDK\DTOs\Mandate\UsBankAccount $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acss_debit' => $value instanceof \stdClass ? $this->acss_debit = new \StripeSDK\DTOs\Mandate\AcssDebit($value) : parent::assignMember($name, $value),
            'au_becs_debit' => $value instanceof \stdClass ? $this->au_becs_debit = new \StripeSDK\DTOs\Mandate\AuBecsDebit($value) : parent::assignMember($name, $value),
            'bacs_debit' => $value instanceof \stdClass ? $this->bacs_debit = new \StripeSDK\DTOs\Mandate\BacsDebit($value) : parent::assignMember($name, $value),
            'blik' => $value instanceof \stdClass ? $this->blik = new \StripeSDK\DTOs\Mandate\Blik($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Card\MandatePaymentMethodDetails($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Mandate\Paypal($value) : parent::assignMember($name, $value),
            'payto' => $value instanceof \stdClass ? $this->payto = new \StripeSDK\DTOs\Mandate\Payto($value) : parent::assignMember($name, $value),
            'pix' => $value instanceof \stdClass ? $this->pix = new \StripeSDK\DTOs\Mandate\Pix($value) : parent::assignMember($name, $value),
            'sepa_debit' => $value instanceof \stdClass ? $this->sepa_debit = new \StripeSDK\DTOs\Mandate\SepaDebit($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'upi' => $value instanceof \stdClass ? $this->upi = new \StripeSDK\DTOs\Mandate\Upi($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\Mandate\UsBankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
