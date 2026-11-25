<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountCapabilities
 */
final class Capabilities extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The status of the Canadian pre-authorized debits payments capability of the account, or whether the account can directly process Canadian pre-authorized debits charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\DebitPaymentsEnum $acss_debit_payments;
    /**
     * The status of the Affirm capability of the account, or whether the account can directly process Affirm charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\AffirmPaymentsEnum $affirm_payments;
    /**
     * The status of the Afterpay Clearpay capability of the account, or whether the account can directly process Afterpay Clearpay charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\ClearpayPaymentsEnum $afterpay_clearpay_payments;
    /**
     * The status of the Alma capability of the account, or whether the account can directly process Alma payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\AlmaPaymentsEnum $alma_payments;
    /**
     * The status of the AmazonPay capability of the account, or whether the account can directly process AmazonPay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\PayPaymentsEnum $amazon_pay_payments;
    /**
     * The status of the `app_distribution` capability of the account, or whether the platform can distribute apps to other accounts.
     */
    public \StripeSDK\Enums\Account\Capabilities\AppDistributionEnum $app_distribution;
    /**
     * The status of the BECS Direct Debit (AU) payments capability of the account, or whether the account can directly process BECS Direct Debit (AU) charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\AuBecsDebitPayments\DebitPaymentsEnum $au_becs_debit_payments;
    /**
     * The status of the Bacs Direct Debits payments capability of the account, or whether the account can directly process Bacs Direct Debits charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\BacsDebitPayments\DebitPaymentsEnum $bacs_debit_payments;
    /**
     * The status of the Bancontact payments capability of the account, or whether the account can directly process Bancontact charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\BancontactPaymentsEnum $bancontact_payments;
    /**
     * The status of the customer_balance payments capability of the account, or whether the account can directly process customer_balance charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\TransferPaymentsEnum $bank_transfer_payments;
    /**
     * The status of the Billie capability of the account, or whether the account can directly process Billie payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\BilliePaymentsEnum $billie_payments;
    /**
     * The status of the Bizum capability of the account, or whether the account can directly process Bizum payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\BizumPaymentsEnum $bizum_payments;
    /**
     * The status of the blik payments capability of the account, or whether the account can directly process blik charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\BlikPaymentsEnum $blik_payments;
    /**
     * The status of the BLIK recurring payments capability of the account, or whether the account can accept recurring and subscription BLIK payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\RecurringPaymentsEnum $blik_recurring_payments;
    /**
     * The status of the boleto payments capability of the account, or whether the account can directly process boleto charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\BoletoPaymentsEnum $boleto_payments;
    /**
     * The status of the card issuing capability of the account, or whether you can use Issuing to distribute funds on cards
     */
    public \StripeSDK\Enums\Account\Capabilities\CardIssuingEnum $card_issuing;
    /**
     * The status of the card payments capability of the account, or whether the account can directly process credit and debit card charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\CardPaymentsEnum $card_payments;
    /**
     * The status of the Cartes Bancaires payments capability of the account, or whether the account can directly process Cartes Bancaires card charges in EUR currency.
     */
    public \StripeSDK\Enums\Account\Capabilities\BancairesPaymentsEnum $cartes_bancaires_payments;
    /**
     * The status of the Cash App Pay capability of the account, or whether the account can directly process Cash App Pay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\CashappPaymentsEnum $cashapp_payments;
    /**
     * The status of the Crypto capability of the account, or whether the account can directly process Crypto payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\CryptoPaymentsEnum $crypto_payments;
    /**
     * The status of the EPS payments capability of the account, or whether the account can directly process EPS charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\EpsPaymentsEnum $eps_payments;
    /**
     * The status of the FPX payments capability of the account, or whether the account can directly process FPX charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\FpxPaymentsEnum $fpx_payments;
    /**
     * The status of the GB customer_balance payments (GBP currency) capability of the account, or whether the account can directly process GB customer_balance charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\GbBankTransferPayments\TransferPaymentsEnum $gb_bank_transfer_payments;
    /**
     * The status of the giropay payments capability of the account, or whether the account can directly process giropay charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\GiropayPaymentsEnum $giropay_payments;
    /**
     * The status of the GrabPay payments capability of the account, or whether the account can directly process GrabPay charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\GrabpayPaymentsEnum $grabpay_payments;
    /**
     * The status of the iDEAL payments capability of the account, or whether the account can directly process iDEAL charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\IdealPaymentsEnum $ideal_payments;
    /**
     * The status of the india_international_payments capability of the account, or whether the account can process international charges (non INR) in India.
     */
    public \StripeSDK\Enums\Account\Capabilities\InternationalPaymentsEnum $india_international_payments;
    /**
     * The status of the JCB payments capability of the account, or whether the account (Japan only) can directly process JCB credit card charges in JPY currency.
     */
    public \StripeSDK\Enums\Account\Capabilities\JcbPaymentsEnum $jcb_payments;
    /**
     * The status of the Japanese customer_balance payments (JPY currency) capability of the account, or whether the account can directly process Japanese customer_balance charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\JpBankTransferPayments\TransferPaymentsEnum $jp_bank_transfer_payments;
    /**
     * The status of the KakaoPay capability of the account, or whether the account can directly process KakaoPay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\KakaoPayPayments\PayPaymentsEnum $kakao_pay_payments;
    /**
     * The status of the Klarna payments capability of the account, or whether the account can directly process Klarna charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\KlarnaPaymentsEnum $klarna_payments;
    /**
     * The status of the konbini payments capability of the account, or whether the account can directly process konbini charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\KonbiniPaymentsEnum $konbini_payments;
    /**
     * The status of the KrCard capability of the account, or whether the account can directly process KrCard payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\KrCardPayments\CardPaymentsEnum $kr_card_payments;
    /**
     * The status of the legacy payments capability of the account.
     */
    public \StripeSDK\Enums\Account\Capabilities\LegacyPaymentsEnum $legacy_payments;
    /**
     * The status of the link_payments capability of the account, or whether the account can directly process Link charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\LinkPaymentsEnum $link_payments;
    /**
     * The status of the MB WAY payments capability of the account, or whether the account can directly process MB WAY charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\WayPaymentsEnum $mb_way_payments;
    /**
     * The status of the MobilePay capability of the account, or whether the account can directly process MobilePay charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\MobilepayPaymentsEnum $mobilepay_payments;
    /**
     * The status of the Multibanco payments capability of the account, or whether the account can directly process Multibanco charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\MultibancoPaymentsEnum $multibanco_payments;
    /**
     * The status of the Mexican customer_balance payments (MXN currency) capability of the account, or whether the account can directly process Mexican customer_balance charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\MxBankTransferPayments\TransferPaymentsEnum $mx_bank_transfer_payments;
    /**
     * The status of the NaverPay capability of the account, or whether the account can directly process NaverPay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\NaverPayPayments\PayPaymentsEnum $naver_pay_payments;
    /**
     * The status of the New Zealand BECS Direct Debit payments capability of the account, or whether the account can directly process New Zealand BECS Direct Debit charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\NzBankAccountBecsDebitPayments\DebitPaymentsEnum $nz_bank_account_becs_debit_payments;
    /**
     * The status of the OXXO payments capability of the account, or whether the account can directly process OXXO charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\OxxoPaymentsEnum $oxxo_payments;
    /**
     * The status of the P24 payments capability of the account, or whether the account can directly process P24 charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\P24PaymentsEnum $p24_payments;
    /**
     * The status of the pay_by_bank payments capability of the account, or whether the account can directly process pay_by_bank charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\BankPaymentsEnum $pay_by_bank_payments;
    /**
     * The status of the Payco capability of the account, or whether the account can directly process Payco payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\PaycoPaymentsEnum $payco_payments;
    /**
     * The status of the paynow payments capability of the account, or whether the account can directly process paynow charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\PaynowPaymentsEnum $paynow_payments;
    /**
     * The status of the Paypay capability of the account, or whether the account can directly process Paypay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\PaypayPaymentsEnum $paypay_payments;
    /**
     * The status of the PayTo capability of the account, or whether the account can directly process PayTo charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\PaytoPaymentsEnum $payto_payments;
    /**
     * The status of the pix payments capability of the account, or whether the account can directly process pix charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\PixPaymentsEnum $pix_payments;
    /**
     * The status of the promptpay payments capability of the account, or whether the account can directly process promptpay charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\PromptpayPaymentsEnum $promptpay_payments;
    /**
     * The status of the RevolutPay capability of the account, or whether the account can directly process RevolutPay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\RevolutPayPayments\PayPaymentsEnum $revolut_pay_payments;
    /**
     * The status of the SamsungPay capability of the account, or whether the account can directly process SamsungPay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\SamsungPayPayments\PayPaymentsEnum $samsung_pay_payments;
    /**
     * The status of the Satispay capability of the account, or whether the account can directly process Satispay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\SatispayPaymentsEnum $satispay_payments;
    /**
     * The status of the Scalapay capability of the account, or whether the account can directly process Scalapay payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\ScalapayPaymentsEnum $scalapay_payments;
    /**
     * The status of the SEPA customer_balance payments (EUR currency) capability of the account, or whether the account can directly process SEPA customer_balance charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\SepaBankTransferPayments\TransferPaymentsEnum $sepa_bank_transfer_payments;
    /**
     * The status of the SEPA Direct Debits payments capability of the account, or whether the account can directly process SEPA Direct Debits charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\SepaDebitPayments\DebitPaymentsEnum $sepa_debit_payments;
    /**
     * The status of the SeQura capability of the account, or whether the account can directly process SeQura payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\SequraPaymentsEnum $sequra_payments;
    /**
     * The status of the Sofort payments capability of the account, or whether the account can directly process Sofort charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\SofortPaymentsEnum $sofort_payments;
    /**
     * The status of the Sunbit capability of the account, or whether the account can directly process Sunbit payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\SunbitPaymentsEnum $sunbit_payments;
    /**
     * The status of the Swish capability of the account, or whether the account can directly process Swish payments.
     */
    public \StripeSDK\Enums\Account\Capabilities\SwishPaymentsEnum $swish_payments;
    /**
     * The status of the tax reporting 1099-K (US) capability of the account.
     */
    public \StripeSDK\Enums\Account\Capabilities\Value1099KEnum $tax_reporting_us_1099_k;
    /**
     * The status of the tax reporting 1099-MISC (US) capability of the account.
     */
    public \StripeSDK\Enums\Account\Capabilities\Value1099MiscEnum $tax_reporting_us_1099_misc;
    /**
     * The status of the transfers capability of the account, or whether your platform can transfer funds to the account.
     */
    public \StripeSDK\Enums\Account\Capabilities\TransfersEnum $transfers;
    /**
     * The status of the banking capability, or whether the account can have bank accounts.
     */
    public \StripeSDK\Enums\Account\Capabilities\TreasuryEnum $treasury;
    /**
     * The status of the TWINT capability of the account, or whether the account can directly process TWINT charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\TwintPaymentsEnum $twint_payments;
    /**
     * The status of the upi payments capability of the account, or whether the account can directly process upi charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\UpiPaymentsEnum $upi_payments;
    /**
     * The status of the US bank account ACH payments capability of the account, or whether the account can directly process US bank account charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\AchPaymentsEnum $us_bank_account_ach_payments;
    /**
     * The status of the US customer_balance payments (USD currency) capability of the account, or whether the account can directly process US customer_balance charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\UsBankTransferPayments\TransferPaymentsEnum $us_bank_transfer_payments;
    /**
     * The status of the Zip capability of the account, or whether the account can directly process Zip charges.
     */
    public \StripeSDK\Enums\Account\Capabilities\ZipPaymentsEnum $zip_payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acss_debit_payments' => is_string($value) ? $this->acss_debit_payments = \StripeSDK\Enums\Account\Capabilities\DebitPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'affirm_payments' => is_string($value) ? $this->affirm_payments = \StripeSDK\Enums\Account\Capabilities\AffirmPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'afterpay_clearpay_payments' => is_string($value) ? $this->afterpay_clearpay_payments = \StripeSDK\Enums\Account\Capabilities\ClearpayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'alma_payments' => is_string($value) ? $this->alma_payments = \StripeSDK\Enums\Account\Capabilities\AlmaPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'amazon_pay_payments' => is_string($value) ? $this->amazon_pay_payments = \StripeSDK\Enums\Account\Capabilities\PayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'app_distribution' => is_string($value) ? $this->app_distribution = \StripeSDK\Enums\Account\Capabilities\AppDistributionEnum::from($value) : parent::assignMember($name, $value),
            'au_becs_debit_payments' => is_string($value) ? $this->au_becs_debit_payments = \StripeSDK\Enums\Account\Capabilities\AuBecsDebitPayments\DebitPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'bacs_debit_payments' => is_string($value) ? $this->bacs_debit_payments = \StripeSDK\Enums\Account\Capabilities\BacsDebitPayments\DebitPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'bancontact_payments' => is_string($value) ? $this->bancontact_payments = \StripeSDK\Enums\Account\Capabilities\BancontactPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'bank_transfer_payments' => is_string($value) ? $this->bank_transfer_payments = \StripeSDK\Enums\Account\Capabilities\TransferPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'billie_payments' => is_string($value) ? $this->billie_payments = \StripeSDK\Enums\Account\Capabilities\BilliePaymentsEnum::from($value) : parent::assignMember($name, $value),
            'bizum_payments' => is_string($value) ? $this->bizum_payments = \StripeSDK\Enums\Account\Capabilities\BizumPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'blik_payments' => is_string($value) ? $this->blik_payments = \StripeSDK\Enums\Account\Capabilities\BlikPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'blik_recurring_payments' => is_string($value) ? $this->blik_recurring_payments = \StripeSDK\Enums\Account\Capabilities\RecurringPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'boleto_payments' => is_string($value) ? $this->boleto_payments = \StripeSDK\Enums\Account\Capabilities\BoletoPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'card_issuing' => is_string($value) ? $this->card_issuing = \StripeSDK\Enums\Account\Capabilities\CardIssuingEnum::from($value) : parent::assignMember($name, $value),
            'card_payments' => is_string($value) ? $this->card_payments = \StripeSDK\Enums\Account\Capabilities\CardPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'cartes_bancaires_payments' => is_string($value) ? $this->cartes_bancaires_payments = \StripeSDK\Enums\Account\Capabilities\BancairesPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'cashapp_payments' => is_string($value) ? $this->cashapp_payments = \StripeSDK\Enums\Account\Capabilities\CashappPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'crypto_payments' => is_string($value) ? $this->crypto_payments = \StripeSDK\Enums\Account\Capabilities\CryptoPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'eps_payments' => is_string($value) ? $this->eps_payments = \StripeSDK\Enums\Account\Capabilities\EpsPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'fpx_payments' => is_string($value) ? $this->fpx_payments = \StripeSDK\Enums\Account\Capabilities\FpxPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'gb_bank_transfer_payments' => is_string($value) ? $this->gb_bank_transfer_payments = \StripeSDK\Enums\Account\Capabilities\GbBankTransferPayments\TransferPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'giropay_payments' => is_string($value) ? $this->giropay_payments = \StripeSDK\Enums\Account\Capabilities\GiropayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'grabpay_payments' => is_string($value) ? $this->grabpay_payments = \StripeSDK\Enums\Account\Capabilities\GrabpayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'ideal_payments' => is_string($value) ? $this->ideal_payments = \StripeSDK\Enums\Account\Capabilities\IdealPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'india_international_payments' => is_string($value) ? $this->india_international_payments = \StripeSDK\Enums\Account\Capabilities\InternationalPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'jcb_payments' => is_string($value) ? $this->jcb_payments = \StripeSDK\Enums\Account\Capabilities\JcbPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'jp_bank_transfer_payments' => is_string($value) ? $this->jp_bank_transfer_payments = \StripeSDK\Enums\Account\Capabilities\JpBankTransferPayments\TransferPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'kakao_pay_payments' => is_string($value) ? $this->kakao_pay_payments = \StripeSDK\Enums\Account\Capabilities\KakaoPayPayments\PayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'klarna_payments' => is_string($value) ? $this->klarna_payments = \StripeSDK\Enums\Account\Capabilities\KlarnaPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'konbini_payments' => is_string($value) ? $this->konbini_payments = \StripeSDK\Enums\Account\Capabilities\KonbiniPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'kr_card_payments' => is_string($value) ? $this->kr_card_payments = \StripeSDK\Enums\Account\Capabilities\KrCardPayments\CardPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'legacy_payments' => is_string($value) ? $this->legacy_payments = \StripeSDK\Enums\Account\Capabilities\LegacyPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'link_payments' => is_string($value) ? $this->link_payments = \StripeSDK\Enums\Account\Capabilities\LinkPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'mb_way_payments' => is_string($value) ? $this->mb_way_payments = \StripeSDK\Enums\Account\Capabilities\WayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'mobilepay_payments' => is_string($value) ? $this->mobilepay_payments = \StripeSDK\Enums\Account\Capabilities\MobilepayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'multibanco_payments' => is_string($value) ? $this->multibanco_payments = \StripeSDK\Enums\Account\Capabilities\MultibancoPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'mx_bank_transfer_payments' => is_string($value) ? $this->mx_bank_transfer_payments = \StripeSDK\Enums\Account\Capabilities\MxBankTransferPayments\TransferPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'naver_pay_payments' => is_string($value) ? $this->naver_pay_payments = \StripeSDK\Enums\Account\Capabilities\NaverPayPayments\PayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'nz_bank_account_becs_debit_payments' => is_string($value) ? $this->nz_bank_account_becs_debit_payments = \StripeSDK\Enums\Account\Capabilities\NzBankAccountBecsDebitPayments\DebitPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'oxxo_payments' => is_string($value) ? $this->oxxo_payments = \StripeSDK\Enums\Account\Capabilities\OxxoPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'p24_payments' => is_string($value) ? $this->p24_payments = \StripeSDK\Enums\Account\Capabilities\P24PaymentsEnum::from($value) : parent::assignMember($name, $value),
            'pay_by_bank_payments' => is_string($value) ? $this->pay_by_bank_payments = \StripeSDK\Enums\Account\Capabilities\BankPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'payco_payments' => is_string($value) ? $this->payco_payments = \StripeSDK\Enums\Account\Capabilities\PaycoPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'paynow_payments' => is_string($value) ? $this->paynow_payments = \StripeSDK\Enums\Account\Capabilities\PaynowPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'paypay_payments' => is_string($value) ? $this->paypay_payments = \StripeSDK\Enums\Account\Capabilities\PaypayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'payto_payments' => is_string($value) ? $this->payto_payments = \StripeSDK\Enums\Account\Capabilities\PaytoPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'pix_payments' => is_string($value) ? $this->pix_payments = \StripeSDK\Enums\Account\Capabilities\PixPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'promptpay_payments' => is_string($value) ? $this->promptpay_payments = \StripeSDK\Enums\Account\Capabilities\PromptpayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'revolut_pay_payments' => is_string($value) ? $this->revolut_pay_payments = \StripeSDK\Enums\Account\Capabilities\RevolutPayPayments\PayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'samsung_pay_payments' => is_string($value) ? $this->samsung_pay_payments = \StripeSDK\Enums\Account\Capabilities\SamsungPayPayments\PayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'satispay_payments' => is_string($value) ? $this->satispay_payments = \StripeSDK\Enums\Account\Capabilities\SatispayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'scalapay_payments' => is_string($value) ? $this->scalapay_payments = \StripeSDK\Enums\Account\Capabilities\ScalapayPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'sepa_bank_transfer_payments' => is_string($value) ? $this->sepa_bank_transfer_payments = \StripeSDK\Enums\Account\Capabilities\SepaBankTransferPayments\TransferPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'sepa_debit_payments' => is_string($value) ? $this->sepa_debit_payments = \StripeSDK\Enums\Account\Capabilities\SepaDebitPayments\DebitPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'sequra_payments' => is_string($value) ? $this->sequra_payments = \StripeSDK\Enums\Account\Capabilities\SequraPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'sofort_payments' => is_string($value) ? $this->sofort_payments = \StripeSDK\Enums\Account\Capabilities\SofortPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'sunbit_payments' => is_string($value) ? $this->sunbit_payments = \StripeSDK\Enums\Account\Capabilities\SunbitPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'swish_payments' => is_string($value) ? $this->swish_payments = \StripeSDK\Enums\Account\Capabilities\SwishPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'tax_reporting_us_1099_k' => is_string($value) ? $this->tax_reporting_us_1099_k = \StripeSDK\Enums\Account\Capabilities\Value1099KEnum::from($value) : parent::assignMember($name, $value),
            'tax_reporting_us_1099_misc' => is_string($value) ? $this->tax_reporting_us_1099_misc = \StripeSDK\Enums\Account\Capabilities\Value1099MiscEnum::from($value) : parent::assignMember($name, $value),
            'transfers' => is_string($value) ? $this->transfers = \StripeSDK\Enums\Account\Capabilities\TransfersEnum::from($value) : parent::assignMember($name, $value),
            'treasury' => is_string($value) ? $this->treasury = \StripeSDK\Enums\Account\Capabilities\TreasuryEnum::from($value) : parent::assignMember($name, $value),
            'twint_payments' => is_string($value) ? $this->twint_payments = \StripeSDK\Enums\Account\Capabilities\TwintPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'upi_payments' => is_string($value) ? $this->upi_payments = \StripeSDK\Enums\Account\Capabilities\UpiPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'us_bank_account_ach_payments' => is_string($value) ? $this->us_bank_account_ach_payments = \StripeSDK\Enums\Account\Capabilities\AchPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'us_bank_transfer_payments' => is_string($value) ? $this->us_bank_transfer_payments = \StripeSDK\Enums\Account\Capabilities\UsBankTransferPayments\TransferPaymentsEnum::from($value) : parent::assignMember($name, $value),
            'zip_payments' => is_string($value) ? $this->zip_payments = \StripeSDK\Enums\Account\Capabilities\ZipPaymentsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
