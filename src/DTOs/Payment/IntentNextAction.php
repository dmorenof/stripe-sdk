<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextAction
 */
final class IntentNextAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\IntentNextActionAlipayHandleRedirect $alipay_handle_redirect;
    public \StripeSDK\DTOs\Payment\IntentNextActionBlikAuthorize $blik_authorize;
    public \StripeSDK\DTOs\Payment\IntentNextActionBoleto $boleto_display_details;
    public \StripeSDK\DTOs\Payment\IntentNextActionCardAwaitNotification $card_await_notification;
    public \StripeSDK\DTOs\Payment\IntentNextActionCashappHandleRedirectOrDisplayQrCode $cashapp_handle_redirect_or_display_qr_code;
    public \StripeSDK\DTOs\Payment\IntentNextActionDisplayBankTransferInstructions $display_bank_transfer_instructions;
    public \StripeSDK\DTOs\Payment\IntentNextActionKlarnaDisplayQrCode $klarna_display_qr_code;
    public \StripeSDK\DTOs\Payment\IntentNextActionKonbini $konbini_display_details;
    public \StripeSDK\DTOs\Payment\IntentNextActionDisplayMultibancoDetails $multibanco_display_details;
    public \StripeSDK\DTOs\Payment\IntentNextActionDisplayOxxoDetails $oxxo_display_details;
    public \StripeSDK\DTOs\Payment\IntentNextActionPaynowDisplayQrCode $paynow_display_qr_code;
    public \StripeSDK\DTOs\Payment\IntentNextActionPixDisplayQrCode $pix_display_qr_code;
    public \StripeSDK\DTOs\Payment\IntentNextActionPromptpayDisplayQrCode $promptpay_display_qr_code;
    public \StripeSDK\DTOs\Payment\IntentNextActionRedirectToUrl $redirect_to_url;
    public \StripeSDK\DTOs\Payment\IntentNextActionSwishHandleRedirectOrDisplayQrCode $swish_handle_redirect_or_display_qr_code;
    /**
     * Type of the next action to perform. Refer to the other child attributes under `next_action` for available values. Examples include: `redirect_to_url`, `use_stripe_sdk`, `alipay_handle_redirect`, `oxxo_display_details`, or `verify_with_microdeposits`.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\IntentNextActionUpiHandleRedirectOrDisplayQrCode $upi_handle_redirect_or_display_qr_code;
    /**
     * When confirming a PaymentIntent with Stripe.js, Stripe.js depends on the contents of this dictionary to invoke authentication flows. The shape of the contents is subject to change and is only intended to be used by Stripe.js.
     */
    public \StripeSDK\DTOs\Payment\IntentNextAction\StripeSdkMap $use_stripe_sdk;
    public \StripeSDK\DTOs\Payment\IntentNextActionVerifyWithMicrodeposits $verify_with_microdeposits;
    public \StripeSDK\DTOs\Payment\IntentNextActionWechatPayDisplayQrCode $wechat_pay_display_qr_code;
    public \StripeSDK\DTOs\Payment\IntentNextActionWechatPayRedirectToAndroidApp $wechat_pay_redirect_to_android_app;
    public \StripeSDK\DTOs\Payment\IntentNextActionWechatPayRedirectToIosApp $wechat_pay_redirect_to_ios_app;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alipay_handle_redirect' => $value instanceof \stdClass ? $this->alipay_handle_redirect = new \StripeSDK\DTOs\Payment\IntentNextActionAlipayHandleRedirect($value) : parent::assignMember($name, $value),
            'boleto_display_details' => $value instanceof \stdClass ? $this->boleto_display_details = new \StripeSDK\DTOs\Payment\IntentNextActionBoleto($value) : parent::assignMember($name, $value),
            'card_await_notification' => $value instanceof \stdClass ? $this->card_await_notification = new \StripeSDK\DTOs\Payment\IntentNextActionCardAwaitNotification($value) : parent::assignMember($name, $value),
            'cashapp_handle_redirect_or_display_qr_code' => $value instanceof \stdClass ? $this->cashapp_handle_redirect_or_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionCashappHandleRedirectOrDisplayQrCode($value) : parent::assignMember($name, $value),
            'display_bank_transfer_instructions' => $value instanceof \stdClass ? $this->display_bank_transfer_instructions = new \StripeSDK\DTOs\Payment\IntentNextActionDisplayBankTransferInstructions($value) : parent::assignMember($name, $value),
            'klarna_display_qr_code' => $value instanceof \stdClass ? $this->klarna_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionKlarnaDisplayQrCode($value) : parent::assignMember($name, $value),
            'konbini_display_details' => $value instanceof \stdClass ? $this->konbini_display_details = new \StripeSDK\DTOs\Payment\IntentNextActionKonbini($value) : parent::assignMember($name, $value),
            'multibanco_display_details' => $value instanceof \stdClass ? $this->multibanco_display_details = new \StripeSDK\DTOs\Payment\IntentNextActionDisplayMultibancoDetails($value) : parent::assignMember($name, $value),
            'oxxo_display_details' => $value instanceof \stdClass ? $this->oxxo_display_details = new \StripeSDK\DTOs\Payment\IntentNextActionDisplayOxxoDetails($value) : parent::assignMember($name, $value),
            'paynow_display_qr_code' => $value instanceof \stdClass ? $this->paynow_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionPaynowDisplayQrCode($value) : parent::assignMember($name, $value),
            'pix_display_qr_code' => $value instanceof \stdClass ? $this->pix_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionPixDisplayQrCode($value) : parent::assignMember($name, $value),
            'promptpay_display_qr_code' => $value instanceof \stdClass ? $this->promptpay_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionPromptpayDisplayQrCode($value) : parent::assignMember($name, $value),
            'redirect_to_url' => $value instanceof \stdClass ? $this->redirect_to_url = new \StripeSDK\DTOs\Payment\IntentNextActionRedirectToUrl($value) : parent::assignMember($name, $value),
            'swish_handle_redirect_or_display_qr_code' => $value instanceof \stdClass ? $this->swish_handle_redirect_or_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionSwishHandleRedirectOrDisplayQrCode($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'upi_handle_redirect_or_display_qr_code' => $value instanceof \stdClass ? $this->upi_handle_redirect_or_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionUpiHandleRedirectOrDisplayQrCode($value) : parent::assignMember($name, $value),
            'verify_with_microdeposits' => $value instanceof \stdClass ? $this->verify_with_microdeposits = new \StripeSDK\DTOs\Payment\IntentNextActionVerifyWithMicrodeposits($value) : parent::assignMember($name, $value),
            'wechat_pay_display_qr_code' => $value instanceof \stdClass ? $this->wechat_pay_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionWechatPayDisplayQrCode($value) : parent::assignMember($name, $value),
            'wechat_pay_redirect_to_android_app' => $value instanceof \stdClass ? $this->wechat_pay_redirect_to_android_app = new \StripeSDK\DTOs\Payment\IntentNextActionWechatPayRedirectToAndroidApp($value) : parent::assignMember($name, $value),
            'wechat_pay_redirect_to_ios_app' => $value instanceof \stdClass ? $this->wechat_pay_redirect_to_ios_app = new \StripeSDK\DTOs\Payment\IntentNextActionWechatPayRedirectToIosApp($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
