<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodCardDetailsResourceWallet
 */
final class CardDetailsResourceWallet extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'dynamic_last4' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceWalletResourceApplePay $apple_pay;
    /**
     * (For tokenized numbers only.) The last four digits of the device account number.
     */
    public string $dynamic_last4 {
        set {
            $this->assigning('dynamic_last4', $value);
            $this->dynamic_last4 = $value;
        }
    }
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceWalletResourceGooglePay $google_pay;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceWalletResourceLink $link;
    /**
     * The type of the card wallet, one of `apple_pay`, `google_pay`, or `link`. An additional hash is included on the Wallet subhash with a name matching this value. It contains additional information specific to the card wallet type.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apple_pay' => $value instanceof \stdClass ? $this->apple_pay = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceWalletResourceApplePay($value) : parent::assignMember($name, $value),
            'dynamic_last4' => is_string($value) ? $this->dynamic_last4 = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
