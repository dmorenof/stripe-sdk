<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionPromptpayDisplayQrCode
 */
final class IntentNextActionPromptpayDisplayQrCode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'hosted_instructions_url',
        'image_url_png',
        'image_url_svg',
    ];

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
     * The URL to the hosted PromptPay instructions page, which allows customers to view the PromptPay QR code.
     */
    public string $hosted_instructions_url {
        set {
            $this->assigning('hosted_instructions_url', $value);
            $this->hosted_instructions_url = $value;
        }
    }
    /**
     * The PNG path used to render the QR code, can be used as the source in an HTML img tag
     */
    public string $image_url_png {
        set {
            $this->assigning('image_url_png', $value);
            $this->image_url_png = $value;
        }
    }
    /**
     * The SVG path used to render the QR code, can be used as the source in an HTML img tag
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
            'hosted_instructions_url' => is_string($value) ? $this->hosted_instructions_url = $value : parent::assignMember($name, $value),
            'image_url_png' => is_string($value) ? $this->image_url_png = $value : parent::assignMember($name, $value),
            'image_url_svg' => is_string($value) ? $this->image_url_svg = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
