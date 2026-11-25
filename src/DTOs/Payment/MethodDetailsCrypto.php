<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_crypto
 */
final class MethodDetailsCrypto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'buyer_address' => [
            'maxLength' => 5000,
        ],
        'transaction_hash' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The wallet address of the customer.
     */
    public string $buyer_address {
        set {
            $this->assigning('buyer_address', $value);
            $this->buyer_address = $value;
        }
    }
    /**
     * The blockchain network that the transaction was sent on.
     */
    public \StripeSDK\Enums\Payment\MethodDetailsCrypto\NetworkEnum $network;
    /**
     * The token currency that the transaction was sent with.
     */
    public \StripeSDK\Enums\Payment\MethodDetailsCrypto\TokenCurrencyEnum $token_currency;
    /**
     * The blockchain transaction hash of the crypto payment.
     */
    public string $transaction_hash {
        set {
            $this->assigning('transaction_hash', $value);
            $this->transaction_hash = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buyer_address' => is_string($value) ? $this->buyer_address = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\Payment\MethodDetailsCrypto\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'token_currency' => is_string($value) ? $this->token_currency = \StripeSDK\Enums\Payment\MethodDetailsCrypto\TokenCurrencyEnum::from($value) : parent::assignMember($name, $value),
            'transaction_hash' => is_string($value) ? $this->transaction_hash = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
