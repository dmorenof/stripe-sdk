<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post;

/**
 * capabilities_param
 *
 * Each key of the dictionary represents a capability, and each capability
 * maps to its settings (for example, whether it has been requested or not). Each
 * capability is inactive until you have provided its specific
 * requirements and Stripe has verified them. An account might have some
 * of its requested capabilities be active and some be inactive.
 *
 * Required when [account.controller.stripe_dashboard.type](/api/accounts/create#create_account-controller-dashboard-type)
 * is `none`, which includes Custom accounts.
 */
final class AccountsCapabilitiesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\DebitPaymentsRequest $acss_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\AffirmPaymentsRequest $affirm_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\ClearpayPaymentsRequest $afterpay_clearpay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\AlmaPaymentsRequest $alma_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\PayPaymentsRequest $amazon_pay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\AppDistributionRequest $app_distribution;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\AuBecsDebitPayments\DebitPaymentsRequest $au_becs_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\BacsDebitPayments\DebitPaymentsRequest $bacs_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\BancontactPaymentsRequest $bancontact_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\TransferPaymentsRequest $bank_transfer_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\BilliePaymentsRequest $billie_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\BizumPaymentsRequest $bizum_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\BlikPaymentsRequest $blik_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\RecurringPaymentsRequest $blik_recurring_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\BoletoPaymentsRequest $boleto_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\CardIssuingRequest $card_issuing;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\CardPaymentsRequest $card_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\BancairesPaymentsRequest $cartes_bancaires_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\CashappPaymentsRequest $cashapp_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\CryptoPaymentsRequest $crypto_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\EpsPaymentsRequest $eps_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\FpxPaymentsRequest $fpx_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\GbBankTransferPayments\TransferPaymentsRequest $gb_bank_transfer_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\GiropayPaymentsRequest $giropay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\GrabpayPaymentsRequest $grabpay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\IdealPaymentsRequest $ideal_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\InternationalPaymentsRequest $india_international_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\JcbPaymentsRequest $jcb_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\JpBankTransferPayments\TransferPaymentsRequest $jp_bank_transfer_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\KakaoPayPayments\PayPaymentsRequest $kakao_pay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\KlarnaPaymentsRequest $klarna_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\KonbiniPaymentsRequest $konbini_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\KrCardPayments\CardPaymentsRequest $kr_card_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\LegacyPaymentsRequest $legacy_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\LinkPaymentsRequest $link_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\WayPaymentsRequest $mb_way_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\MobilepayPaymentsRequest $mobilepay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\MultibancoPaymentsRequest $multibanco_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\MxBankTransferPayments\TransferPaymentsRequest $mx_bank_transfer_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\NaverPayPayments\PayPaymentsRequest $naver_pay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\NzBankAccountBecsDebitPayments\DebitPaymentsRequest $nz_bank_account_becs_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\OxxoPaymentsRequest $oxxo_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\P24PaymentsRequest $p24_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\BankPaymentsRequest $pay_by_bank_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\PaycoPaymentsRequest $payco_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\PaynowPaymentsRequest $paynow_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\PaypayPaymentsRequest $paypay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\PaytoPaymentsRequest $payto_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\PixPaymentsRequest $pix_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\PromptpayPaymentsRequest $promptpay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\RevolutPayPayments\PayPaymentsRequest $revolut_pay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\SamsungPayPayments\PayPaymentsRequest $samsung_pay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\SatispayPaymentsRequest $satispay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\ScalapayPaymentsRequest $scalapay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\SepaBankTransferPayments\TransferPaymentsRequest $sepa_bank_transfer_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\SepaDebitPayments\DebitPaymentsRequest $sepa_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\SequraPaymentsRequest $sequra_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\SofortPaymentsRequest $sofort_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\SunbitPaymentsRequest $sunbit_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\SwishPaymentsRequest $swish_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\Value1099KRequest $tax_reporting_us_1099_k;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\Value1099MiscRequest $tax_reporting_us_1099_misc;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\CapabilitiesTransfersRequest $transfers;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\CapabilitiesTreasuryRequest $treasury;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\TwintPaymentsRequest $twint_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\UpiPaymentsRequest $upi_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\AchPaymentsRequest $us_bank_account_ach_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\UsBankTransferPayments\TransferPaymentsRequest $us_bank_transfer_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Capabilities\ZipPaymentsRequest $zip_payments;
}
