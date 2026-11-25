<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionCashappHandleRedirectOrDisplayQrCode
 */
final class IntentNextActionCashappHandleRedirectOrDisplayQrCode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'hosted_instructions_url',
        'mobile_auth_url',
        'qr_code',
    ];

    protected const array VALIDATION = [
        'hosted_instructions_url' => [
            'maxLength' => 5000,
        ],
        'mobile_auth_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The URL to the hosted Cash App Pay instructions page, which allows customers to view the QR code, and supports QR code refreshing on expiration.
     */
    public string $hosted_instructions_url {
        set {
            $this->assigning('hosted_instructions_url', $value);
            $this->hosted_instructions_url = $value;
        }
    }
    /**
     * The url for mobile redirect based auth
     */
    public string $mobile_auth_url {
        set {
            $this->assigning('mobile_auth_url', $value);
            $this->mobile_auth_url = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\IntentNextActionCashappQrCode $qr_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hosted_instructions_url' => is_string($value) ? $this->hosted_instructions_url = $value : parent::assignMember($name, $value),
            'mobile_auth_url' => is_string($value) ? $this->mobile_auth_url = $value : parent::assignMember($name, $value),
            'qr_code' => $value instanceof \stdClass ? $this->qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionCashappQrCode($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
