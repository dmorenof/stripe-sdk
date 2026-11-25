<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * SetupAttemptPaymentMethodDetails
 */
final class AttemptPaymentMethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsAcssDebit $acss_debit;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsAmazonPay $amazon_pay;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsAuBecsDebit $au_becs_debit;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsBacsDebit $bacs_debit;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsBancontact $bancontact;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsBlik $blik;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsBoleto $boleto;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCard $card;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCardPresent $card_present;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCashapp $cashapp;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsIdeal $ideal;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsKakaoPay $kakao_pay;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsKlarna $klarna;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsKrCard $kr_card;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsLink $link;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsNaverPay $naver_pay;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsNzBankAccount $nz_bank_account;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsPaypal $paypal;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsPayto $payto;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsPix $pix;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsRevolutPay $revolut_pay;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsSatispaySetupAttemptDetails $satispay;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsSepaDebit $sepa_debit;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsSofort $sofort;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsTwint $twint;
    /**
     * The type of the payment method used in the SetupIntent (e.g., `card`). An additional hash is included on `payment_method_details` with a name matching this value. It contains confirmation-specific information for the payment method.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsUpi $upi;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsUsBankAccount $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bancontact' => $value instanceof \stdClass ? $this->bancontact = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsBancontact($value) : parent::assignMember($name, $value),
            'blik' => $value instanceof \stdClass ? $this->blik = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsBlik($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCard($value) : parent::assignMember($name, $value),
            'card_present' => $value instanceof \stdClass ? $this->card_present = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsCardPresent($value) : parent::assignMember($name, $value),
            'ideal' => $value instanceof \stdClass ? $this->ideal = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsIdeal($value) : parent::assignMember($name, $value),
            'naver_pay' => $value instanceof \stdClass ? $this->naver_pay = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsNaverPay($value) : parent::assignMember($name, $value),
            'pix' => $value instanceof \stdClass ? $this->pix = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsPix($value) : parent::assignMember($name, $value),
            'sofort' => $value instanceof \stdClass ? $this->sofort = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetailsSofort($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
