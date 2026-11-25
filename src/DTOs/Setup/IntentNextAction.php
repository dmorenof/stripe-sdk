<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * SetupIntentNextAction
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

    public \StripeSDK\DTOs\Payment\IntentNextActionBlikAuthorize $blik_authorize;
    public \StripeSDK\DTOs\Payment\IntentNextActionCashappHandleRedirectOrDisplayQrCode $cashapp_handle_redirect_or_display_qr_code;
    public \StripeSDK\DTOs\Setup\IntentNextActionPixDisplayQrCode $pix_display_qr_code;
    public \StripeSDK\DTOs\Setup\IntentNextActionRedirectToUrl $redirect_to_url;
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
     * When confirming a SetupIntent with Stripe.js, Stripe.js depends on the contents of this dictionary to invoke authentication flows. The shape of the contents is subject to change and is only intended to be used by Stripe.js.
     */
    public \StripeSDK\DTOs\Setup\IntentNextAction\StripeSdkMap $use_stripe_sdk;
    public \StripeSDK\DTOs\Setup\IntentNextActionVerifyWithMicrodeposits $verify_with_microdeposits;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cashapp_handle_redirect_or_display_qr_code' => $value instanceof \stdClass ? $this->cashapp_handle_redirect_or_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionCashappHandleRedirectOrDisplayQrCode($value) : parent::assignMember($name, $value),
            'pix_display_qr_code' => $value instanceof \stdClass ? $this->pix_display_qr_code = new \StripeSDK\DTOs\Setup\IntentNextActionPixDisplayQrCode($value) : parent::assignMember($name, $value),
            'redirect_to_url' => $value instanceof \stdClass ? $this->redirect_to_url = new \StripeSDK\DTOs\Setup\IntentNextActionRedirectToUrl($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'upi_handle_redirect_or_display_qr_code' => $value instanceof \stdClass ? $this->upi_handle_redirect_or_display_qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionUpiHandleRedirectOrDisplayQrCode($value) : parent::assignMember($name, $value),
            'verify_with_microdeposits' => $value instanceof \stdClass ? $this->verify_with_microdeposits = new \StripeSDK\DTOs\Setup\IntentNextActionVerifyWithMicrodeposits($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
