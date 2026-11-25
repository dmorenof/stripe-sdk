<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationFraudChallenge
 */
final class AuthorizationFraudChallenge extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel',
        'status',
    ];

    /**
     * The method by which the fraud challenge was delivered to the cardholder.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationFraudChallenge\ChannelEnum $channel;
    /**
     * The status of the fraud challenge.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationFraudChallenge\StatusEnum $status;
    /**
     * If the challenge is not deliverable, the reason why.
     */
    public ?\StripeSDK\Enums\Issuing\AuthorizationFraudChallenge\UndeliverableReasonEnum $undeliverable_reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \StripeSDK\Enums\Issuing\AuthorizationFraudChallenge\ChannelEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\AuthorizationFraudChallenge\StatusEnum::from($value) : parent::assignMember($name, $value),
            'undeliverable_reason' => $value === null || is_string($value) ? $this->undeliverable_reason = $value === null ? null : \StripeSDK\Enums\Issuing\AuthorizationFraudChallenge\UndeliverableReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
