<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_card_wallet
 */
final class MethodDetailsCardWallet extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'dynamic_last4' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletAmexExpressCheckout $amex_express_checkout;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletApplePay $apple_pay;
    /**
     * (For tokenized numbers only.) The last four digits of the device account number.
     */
    public ?string $dynamic_last4 {
        set {
            $this->assigning('dynamic_last4', $value);
            $this->dynamic_last4 = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletGooglePay $google_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletLink $link;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletMasterpass $masterpass;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletSamsungPay $samsung_pay;
    /**
     * The type of the card wallet, one of `amex_express_checkout`, `apple_pay`, `google_pay`, `masterpass`, `samsung_pay`, `visa_checkout`, or `link`. An additional hash is included on the Wallet subhash with a name matching this value. It contains additional information specific to the card wallet type.
     */
    public \StripeSDK\Enums\Payment\MethodDetailsCardWallet\TypeEnum $type;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletVisaCheckout $visa_checkout;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dynamic_last4' => $value === null || is_string($value) ? $this->dynamic_last4 = $value : parent::assignMember($name, $value),
            'link' => $value instanceof \stdClass ? $this->link = new \StripeSDK\DTOs\Payment\MethodDetailsCardWalletLink($value) : parent::assignMember($name, $value),
            'masterpass' => $value instanceof \stdClass ? $this->masterpass = new \StripeSDK\DTOs\Payment\MethodDetailsCardWalletMasterpass($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\MethodDetailsCardWallet\TypeEnum::from($value) : parent::assignMember($name, $value),
            'visa_checkout' => $value instanceof \stdClass ? $this->visa_checkout = new \StripeSDK\DTOs\Payment\MethodDetailsCardWalletVisaCheckout($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
