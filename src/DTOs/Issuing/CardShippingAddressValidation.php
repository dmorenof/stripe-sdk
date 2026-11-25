<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardShippingAddressValidation
 */
final class CardShippingAddressValidation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mode',
    ];

    /**
     * The address validation capabilities to use.
     */
    public \StripeSDK\Enums\Issuing\CardShippingAddressValidation\ModeEnum $mode;
    /**
     * The normalized shipping address.
     */
    public ?\StripeSDK\DTOs\Address $normalized_address;
    /**
     * The validation result for the shipping address.
     */
    public ?\StripeSDK\Enums\Issuing\CardShippingAddressValidation\ResultEnum $result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\Issuing\CardShippingAddressValidation\ModeEnum::from($value) : parent::assignMember($name, $value),
            'normalized_address' => $value === null || $value instanceof \stdClass ? $this->normalized_address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'result' => $value === null || is_string($value) ? $this->result = $value === null ? null : \StripeSDK\Enums\Issuing\CardShippingAddressValidation\ResultEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
