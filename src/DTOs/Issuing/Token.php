<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Token
 *
 * An issuing token object is created when an issued card is added to a digital wallet. As a [card issuer](https://docs.stripe.com/issuing), you can [view and manage these tokens](https://docs.stripe.com/issuing/controls/token-management) through Stripe.
 */
final class Token extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'card',
        'created',
        'id',
        'livemode',
        'network',
        'network_updated_at',
        'object_',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'device_fingerprint' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Card associated with this token.
     */
    public \StripeSDK\DTOs\Issuing\Token\CardDTO $card;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The hashed ID derived from the device ID from the card network associated with the token.
     */
    public ?string $device_fingerprint {
        set {
            $this->assigning('device_fingerprint', $value);
            $this->device_fingerprint = $value;
        }
    }
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The last four digits of the token.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * The token service provider / card network associated with the token.
     */
    public \StripeSDK\Enums\Issuing\Token\NetworkEnum $network;
    public \StripeSDK\DTOs\Issuing\NetworkTokenNetworkData $network_data;
    /**
     * Time at which the token was last updated by the card network. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $network_updated_at;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Issuing\Token\ObjectEnum $object_;
    /**
     * The usage state of the token.
     */
    public \StripeSDK\Enums\Issuing\Token\StatusEnum $status;
    /**
     * The digital wallet for this token, if one was used.
     */
    public \StripeSDK\Enums\Issuing\Token\WalletProviderEnum $wallet_provider;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'device_fingerprint' => $value === null || is_string($value) ? $this->device_fingerprint = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\Issuing\Token\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'network_data' => $value instanceof \stdClass ? $this->network_data = new \StripeSDK\DTOs\Issuing\NetworkTokenNetworkData($value) : parent::assignMember($name, $value),
            'network_updated_at' => is_int($value) ? $this->network_updated_at = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\Token\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\Token\StatusEnum::from($value) : parent::assignMember($name, $value),
            'wallet_provider' => is_string($value) ? $this->wallet_provider = \StripeSDK\Enums\Issuing\Token\WalletProviderEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
