<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EnhancedEvidenceRequest2Variant1;

/**
 * mastercard_compliance
 */
final class MastercardComplianceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $fee_acknowledged;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fee_acknowledged' => is_bool($value) ? $this->fee_acknowledged = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
