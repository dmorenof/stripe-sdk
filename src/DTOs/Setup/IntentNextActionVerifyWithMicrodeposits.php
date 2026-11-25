<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * SetupIntentNextActionVerifyWithMicrodeposits
 */
final class IntentNextActionVerifyWithMicrodeposits extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'arrival_date',
        'hosted_verification_url',
    ];

    protected const array VALIDATION = [
        'hosted_verification_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The timestamp when the microdeposits are expected to land.
     * Format: unix-time
     */
    public int $arrival_date;
    /**
     * The URL for the hosted verification page, which allows customers to verify their bank account.
     */
    public string $hosted_verification_url {
        set {
            $this->assigning('hosted_verification_url', $value);
            $this->hosted_verification_url = $value;
        }
    }
    /**
     * The type of the microdeposit sent to the customer. Used to distinguish between different verification methods.
     */
    public ?\StripeSDK\Enums\Setup\IntentNextActionVerifyWithMicrodeposits\MicrodepositTypeEnum $microdeposit_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'arrival_date' => is_int($value) ? $this->arrival_date = $value : parent::assignMember($name, $value),
            'hosted_verification_url' => is_string($value) ? $this->hosted_verification_url = $value : parent::assignMember($name, $value),
            'microdeposit_type' => $value === null || is_string($value) ? $this->microdeposit_type = $value === null ? null : \StripeSDK\Enums\Setup\IntentNextActionVerifyWithMicrodeposits\MicrodepositTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
