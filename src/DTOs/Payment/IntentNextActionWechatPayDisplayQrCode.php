<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionWechatPayDisplayQrCode
 */
final class IntentNextActionWechatPayDisplayQrCode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'hosted_instructions_url',
        'image_data_url',
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
        'image_data_url' => [
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
     * The URL to the hosted WeChat Pay instructions page, which allows customers to view the WeChat Pay QR code.
     */
    public string $hosted_instructions_url {
        set {
            $this->assigning('hosted_instructions_url', $value);
            $this->hosted_instructions_url = $value;
        }
    }
    /**
     * The base64 image data for a pre-generated QR code
     */
    public string $image_data_url {
        set {
            $this->assigning('image_data_url', $value);
            $this->image_data_url = $value;
        }
    }
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
            'hosted_instructions_url' => is_string($value) ? $this->hosted_instructions_url = $value : parent::assignMember($name, $value),
            'image_data_url' => is_string($value) ? $this->image_data_url = $value : parent::assignMember($name, $value),
            'image_url_png' => is_string($value) ? $this->image_url_png = $value : parent::assignMember($name, $value),
            'image_url_svg' => is_string($value) ? $this->image_url_svg = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
