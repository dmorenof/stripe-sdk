<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * branding_settings_params
 *
 * The branding settings for the Checkout Session. This parameter is not allowed if ui_mode is `elements`.
 */
final class BrandingSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\BrandingSettings\BackgroundColorRequest $background_color;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings\BorderStyleEnum $border_style;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\BrandingSettings\ButtonColorRequest $button_color;
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings\FontFamilyEnum $font_family;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\BrandingSettings\SettingsIconRequest $icon;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\BrandingSettings\SettingsLogoRequest $logo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'border_style' => is_string($value) ? $this->border_style = \StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings\BorderStyleEnum::from($value) : parent::assignMember($name, $value),
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'font_family' => is_string($value) ? $this->font_family = \StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings\FontFamilyEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
