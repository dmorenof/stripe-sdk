<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountRequirementsError
 */
final class RequirementsError extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'code',
        'reason',
        'requirement',
    ];

    protected const array VALIDATION = [
        'reason' => [
            'maxLength' => 5000,
        ],
        'requirement' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The code for the type of error.
     */
    public \StripeSDK\Enums\Account\RequirementsError\CodeEnum $code;
    /**
     * An informative message that indicates the error type and provides additional details about the error.
     */
    public string $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }
    /**
     * The specific user onboarding requirement field (in the requirements hash) that needs to be resolved.
     */
    public string $requirement {
        set {
            $this->assigning('requirement', $value);
            $this->requirement = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \StripeSDK\Enums\Account\RequirementsError\CodeEnum::from($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'requirement' => is_string($value) ? $this->requirement = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
