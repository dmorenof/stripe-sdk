<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingPhysicalBundleFeatures
 */
final class PhysicalBundleFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'card_logo',
        'carrier_text',
        'second_line',
    ];

    /**
     * The policy for how to use card logo images in a card design with this physical bundle.
     */
    public \StripeSDK\Enums\Issuing\PhysicalBundleFeatures\CardLogoEnum $card_logo;
    /**
     * The policy for how to use carrier letter text in a card design with this physical bundle.
     */
    public \StripeSDK\Enums\Issuing\PhysicalBundleFeatures\CarrierTextEnum $carrier_text;
    /**
     * The policy for how to use a second line on a card with this physical bundle.
     */
    public \StripeSDK\Enums\Issuing\PhysicalBundleFeatures\SecondLineEnum $second_line;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_logo' => is_string($value) ? $this->card_logo = \StripeSDK\Enums\Issuing\PhysicalBundleFeatures\CardLogoEnum::from($value) : parent::assignMember($name, $value),
            'carrier_text' => is_string($value) ? $this->carrier_text = \StripeSDK\Enums\Issuing\PhysicalBundleFeatures\CarrierTextEnum::from($value) : parent::assignMember($name, $value),
            'second_line' => is_string($value) ? $this->second_line = \StripeSDK\Enums\Issuing\PhysicalBundleFeatures\SecondLineEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
