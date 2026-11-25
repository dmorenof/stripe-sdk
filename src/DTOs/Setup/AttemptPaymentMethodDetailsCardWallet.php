<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_attempt_payment_method_details_card_wallet
 */
final class AttemptPaymentMethodDetailsCardWallet extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletApplePay $apple_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardWalletGooglePay $google_pay;
    /**
     * The type of the card wallet, one of `apple_pay`, `google_pay`, or `link`. An additional hash is included on the Wallet subhash with a name matching this value. It contains additional information specific to the card wallet type.
     */
    public \StripeSDK\Enums\Setup\AttemptPaymentMethodDetailsCardWallet\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Setup\AttemptPaymentMethodDetailsCardWallet\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
