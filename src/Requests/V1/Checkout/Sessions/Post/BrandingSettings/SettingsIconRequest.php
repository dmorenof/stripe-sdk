<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\BrandingSettings;

/**
 * icon_params
 */
final class SettingsIconRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public string $file;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings\Icon\IconTypeEnum $type;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file' => is_string($value) ? $this->file = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings\Icon\IconTypeEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
