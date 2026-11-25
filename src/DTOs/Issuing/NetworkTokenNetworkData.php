<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingNetworkTokenNetworkData
 */
final class NetworkTokenNetworkData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Issuing\NetworkTokenDevice $device;
    public \StripeSDK\DTOs\Issuing\NetworkTokenMastercard $mastercard;
    /**
     * The network that the token is associated with. An additional hash is included with a name matching this value, containing tokenization data specific to the card network.
     */
    public \StripeSDK\Enums\Issuing\NetworkTokenNetworkData\TypeEnum $type;
    public \StripeSDK\DTOs\Issuing\NetworkTokenVisa $visa;
    public \StripeSDK\DTOs\Issuing\NetworkTokenWalletProvider $wallet_provider;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'device' => $value instanceof \stdClass ? $this->device = new \StripeSDK\DTOs\Issuing\NetworkTokenDevice($value) : parent::assignMember($name, $value),
            'mastercard' => $value instanceof \stdClass ? $this->mastercard = new \StripeSDK\DTOs\Issuing\NetworkTokenMastercard($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Issuing\NetworkTokenNetworkData\TypeEnum::from($value) : parent::assignMember($name, $value),
            'visa' => $value instanceof \stdClass ? $this->visa = new \StripeSDK\DTOs\Issuing\NetworkTokenVisa($value) : parent::assignMember($name, $value),
            'wallet_provider' => $value instanceof \stdClass ? $this->wallet_provider = new \StripeSDK\DTOs\Issuing\NetworkTokenWalletProvider($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
