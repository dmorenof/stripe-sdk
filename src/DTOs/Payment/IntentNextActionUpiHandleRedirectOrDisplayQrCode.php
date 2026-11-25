<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionUpiHandleRedirectOrDisplayQrCode
 */
final class IntentNextActionUpiHandleRedirectOrDisplayQrCode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'hosted_instructions_url',
        'qr_code',
    ];

    protected const array VALIDATION = [
        'hosted_instructions_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The URL to the hosted UPI instructions page, which allows customers to view the QR code.
     */
    public string $hosted_instructions_url {
        set {
            $this->assigning('hosted_instructions_url', $value);
            $this->hosted_instructions_url = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\IntentNextActionUpiqrCode $qr_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hosted_instructions_url' => is_string($value) ? $this->hosted_instructions_url = $value : parent::assignMember($name, $value),
            'qr_code' => $value instanceof \stdClass ? $this->qr_code = new \StripeSDK\DTOs\Payment\IntentNextActionUpiqrCode($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
