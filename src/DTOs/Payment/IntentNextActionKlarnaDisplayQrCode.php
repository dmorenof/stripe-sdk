<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionKlarnaDisplayQrCode
 */
final class IntentNextActionKlarnaDisplayQrCode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'image_url_png',
        'image_url_svg',
    ];

    protected const array VALIDATION = [
        'data' => [
            'maxLength' => 5000,
        ],
        'image_url_png' => [
            'maxLength' => 5000,
        ],
        'image_url_svg' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The data being used to generate QR code
     */
    public string $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }
    /**
     * The timestamp at which the QR code expires.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * The image_url_png string used to render QR code
     */
    public string $image_url_png {
        set {
            $this->assigning('image_url_png', $value);
            $this->image_url_png = $value;
        }
    }
    /**
     * The image_url_svg string used to render QR code
     */
    public string $image_url_svg {
        set {
            $this->assigning('image_url_svg', $value);
            $this->image_url_svg = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'image_url_png' => is_string($value) ? $this->image_url_png = $value : parent::assignMember($name, $value),
            'image_url_svg' => is_string($value) ? $this->image_url_svg = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
