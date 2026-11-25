<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountBrandingSettings
 */
final class BrandingSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'primary_color' => [
            'maxLength' => 5000,
        ],
        'secondary_color' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) An icon for the account. Must be square and at least 128px x 128px.
     */
    public ?\StripeSDK\DTOs\Account\BrandingSettings\IconDTO $icon;
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) A logo for the account that will be used in Checkout instead of the icon and without the account's name next to it if provided. Must be at least 128px x 128px.
     */
    public ?\StripeSDK\DTOs\Account\BrandingSettings\LogoDTO $logo;
    /**
     * A CSS hex color value representing the primary branding color for this account
     */
    public ?string $primary_color {
        set {
            $this->assigning('primary_color', $value);
            $this->primary_color = $value;
        }
    }
    /**
     * A CSS hex color value representing the secondary branding color for this account
     */
    public ?string $secondary_color {
        set {
            $this->assigning('secondary_color', $value);
            $this->secondary_color = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'primary_color' => $value === null || is_string($value) ? $this->primary_color = $value : parent::assignMember($name, $value),
            'secondary_color' => $value === null || is_string($value) ? $this->secondary_color = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
