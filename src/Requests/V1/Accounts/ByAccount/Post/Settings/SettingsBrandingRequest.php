<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings;

/**
 * branding_settings_specs
 */
final class SettingsBrandingRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'icon' => [
            'maxLength' => 5000,
        ],
        'logo' => [
            'maxLength' => 5000,
        ],
        'primary_color' => [
            'maxLength' => 5000,
        ],
        'secondary_color' => [
            'maxLength' => 5000,
        ],
    ];

    public string $icon {
        set {
            $this->assigning('icon', $value);
            $this->icon = $value;
        }
    }
    public string $logo {
        set {
            $this->assigning('logo', $value);
            $this->logo = $value;
        }
    }
    public string $primary_color {
        set {
            $this->assigning('primary_color', $value);
            $this->primary_color = $value;
        }
    }
    public string $secondary_color {
        set {
            $this->assigning('secondary_color', $value);
            $this->secondary_color = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'icon' => is_string($value) ? $this->icon = $value : parent::assignMember($name, $value),
            'logo' => is_string($value) ? $this->logo = $value : parent::assignMember($name, $value),
            'primary_color' => is_string($value) ? $this->primary_color = $value : parent::assignMember($name, $value),
            'secondary_color' => is_string($value) ? $this->secondary_color = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
