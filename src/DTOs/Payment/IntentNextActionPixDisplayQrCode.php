<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionPixDisplayQrCode
 */
final class IntentNextActionPixDisplayQrCode extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'data' => [
            'maxLength' => 5000,
        ],
        'hosted_instructions_url' => [
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
     * The raw data string used to generate QR code, it should be used together with QR code library.
     */
    public string $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }
    /**
     * The date (unix timestamp) when the PIX expires.
     */
    public int $expires_at;
    /**
     * The URL to the hosted pix instructions page, which allows customers to view the pix QR code.
     */
    public string $hosted_instructions_url {
        set {
            $this->assigning('hosted_instructions_url', $value);
            $this->hosted_instructions_url = $value;
        }
    }
    /**
     * The image_url_png string used to render png QR code
     */
    public string $image_url_png {
        set {
            $this->assigning('image_url_png', $value);
            $this->image_url_png = $value;
        }
    }
    /**
     * The image_url_svg string used to render svg QR code
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
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'hosted_instructions_url' => is_string($value) ? $this->hosted_instructions_url = $value : parent::assignMember($name, $value),
            'image_url_png' => is_string($value) ? $this->image_url_png = $value : parent::assignMember($name, $value),
            'image_url_svg' => is_string($value) ? $this->image_url_svg = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
