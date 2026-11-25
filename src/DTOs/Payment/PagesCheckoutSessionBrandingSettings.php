<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionBrandingSettings
 */
final class PagesCheckoutSessionBrandingSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'background_color',
        'border_style',
        'button_color',
        'display_name',
        'font_family',
    ];

    protected const array VALIDATION = [
        'background_color' => [
            'maxLength' => 5000,
        ],
        'button_color' => [
            'maxLength' => 5000,
        ],
        'display_name' => [
            'maxLength' => 5000,
        ],
        'font_family' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A hex color value starting with `#` representing the background color for the Checkout Session.
     */
    public string $background_color {
        set {
            $this->assigning('background_color', $value);
            $this->background_color = $value;
        }
    }
    /**
     * The border style for the Checkout Session. Must be one of `rounded`, `rectangular`, or `pill`.
     */
    public \StripeSDK\Enums\Payment\PagesCheckoutSessionBrandingSettings\BorderStyleEnum $border_style;
    /**
     * A hex color value starting with `#` representing the button color for the Checkout Session.
     */
    public string $button_color {
        set {
            $this->assigning('button_color', $value);
            $this->button_color = $value;
        }
    }
    /**
     * The display name shown on the Checkout Session.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The font family for the Checkout Session. Must be one of the [supported font families](https://docs.stripe.com/payments/checkout/customization/appearance?payment-ui=stripe-hosted#font-compatibility).
     */
    public string $font_family {
        set {
            $this->assigning('font_family', $value);
            $this->font_family = $value;
        }
    }
    /**
     * The icon for the Checkout Session. You cannot set both `logo` and `icon`.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionBrandingSettingsIcon $icon;
    /**
     * The logo for the Checkout Session. You cannot set both `logo` and `icon`.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionBrandingSettingsLogo $logo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'background_color' => is_string($value) ? $this->background_color = $value : parent::assignMember($name, $value),
            'border_style' => is_string($value) ? $this->border_style = \StripeSDK\Enums\Payment\PagesCheckoutSessionBrandingSettings\BorderStyleEnum::from($value) : parent::assignMember($name, $value),
            'button_color' => is_string($value) ? $this->button_color = $value : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'font_family' => is_string($value) ? $this->font_family = $value : parent::assignMember($name, $value),
            'icon' => $value === null || $value instanceof \stdClass ? $this->icon = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionBrandingSettingsIcon($value) : parent::assignMember($name, $value),
            'logo' => $value === null || $value instanceof \stdClass ? $this->logo = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionBrandingSettingsLogo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
