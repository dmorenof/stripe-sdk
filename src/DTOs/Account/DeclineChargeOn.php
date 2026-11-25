<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountDeclineChargeOn
 */
final class DeclineChargeOn extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'avs_failure',
        'cvc_failure',
    ];

    /**
     * Whether Stripe automatically declines charges with an incorrect ZIP or postal code. This setting only applies when a ZIP or postal code is provided and they fail bank verification.
     */
    public bool $avs_failure;
    /**
     * Whether Stripe automatically declines charges with an incorrect CVC. This setting only applies when a CVC is provided and it fails bank verification.
     */
    public bool $cvc_failure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'avs_failure' => is_bool($value) ? $this->avs_failure = $value : parent::assignMember($name, $value),
            'cvc_failure' => is_bool($value) ? $this->cvc_failure = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
