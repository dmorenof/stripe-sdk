<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryInboundTransfersResourceFailureDetails
 */
final class InboundTransfersResourceFailureDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'code',
    ];

    /**
     * Reason for the failure.
     */
    public \StripeSDK\Enums\Treasury\InboundTransfersResourceFailureDetails\CodeEnum $code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \StripeSDK\Enums\Treasury\InboundTransfersResourceFailureDetails\CodeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
