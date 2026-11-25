<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionBrandingSettingsIcon
 */
final class PagesCheckoutSessionBrandingSettingsIcon extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'file' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of a [File upload](https://stripe.com/docs/api/files) representing the icon. Purpose must be `business_icon`. Required if `type` is `file` and disallowed otherwise.
     */
    public string $file {
        set {
            $this->assigning('file', $value);
            $this->file = $value;
        }
    }
    /**
     * The type of image for the icon. Must be one of `file` or `url`.
     */
    public \StripeSDK\Enums\Payment\PagesCheckoutSessionBrandingSettingsIcon\TypeEnum $type;
    /**
     * The URL of the image. Present when `type` is `url`.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file' => is_string($value) ? $this->file = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\PagesCheckoutSessionBrandingSettingsIcon\TypeEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
