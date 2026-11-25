<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_card_wallet
 */
final class MethodCardWallet extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'dynamic_last4' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\MethodCardWalletAmexExpressCheckout $amex_express_checkout;
    public \StripeSDK\DTOs\Payment\MethodCardWalletApplePay $apple_pay;
    /**
     * (For tokenized numbers only.) The last four digits of the device account number.
     */
    public ?string $dynamic_last4 {
        set {
            $this->assigning('dynamic_last4', $value);
            $this->dynamic_last4 = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodCardWalletGooglePay $google_pay;
    public \StripeSDK\DTOs\Payment\MethodCardWalletLink $link;
    public \StripeSDK\DTOs\Payment\MethodCardWalletMasterpass $masterpass;
    public \StripeSDK\DTOs\Payment\MethodCardWalletSamsungPay $samsung_pay;
    /**
     * The type of the card wallet, one of `amex_express_checkout`, `apple_pay`, `google_pay`, `masterpass`, `samsung_pay`, `visa_checkout`, or `link`. An additional hash is included on the Wallet subhash with a name matching this value. It contains additional information specific to the card wallet type.
     */
    public \StripeSDK\Enums\Payment\MethodCardWallet\TypeEnum $type;
    public \StripeSDK\DTOs\Payment\MethodCardWalletVisaCheckout $visa_checkout;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dynamic_last4' => $value === null || is_string($value) ? $this->dynamic_last4 = $value : parent::assignMember($name, $value),
            'masterpass' => $value instanceof \stdClass ? $this->masterpass = new \StripeSDK\DTOs\Payment\MethodCardWalletMasterpass($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\MethodCardWallet\TypeEnum::from($value) : parent::assignMember($name, $value),
            'visa_checkout' => $value instanceof \stdClass ? $this->visa_checkout = new \StripeSDK\DTOs\Payment\MethodCardWalletVisaCheckout($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
