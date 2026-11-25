<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Disputes\Post;

/**
 * evidence_param
 *
 * Evidence provided for the dispute.
 */
final class DisputesEvidenceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\Evidence\EvidenceCanceledRequest $canceled;
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\Evidence\EvidenceDuplicateRequest $duplicate;
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\Evidence\EvidenceFraudulentRequest $fraudulent;
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\Evidence\AsDescribedRequest $merchandise_not_as_described;
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\Evidence\ValidAuthorizationRequest $no_valid_authorization;
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\Evidence\NotReceivedRequest $not_received;
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\Evidence\EvidenceOtherRequest $other;
    public \StripeSDK\Enums\V1\Issuing\Disputes\Post\Evidence\EvidenceReasonEnum $reason;
    public \StripeSDK\Requests\V1\Issuing\Disputes\Post\Evidence\AnyOfServiceNotAsDescribed\AsDescribedRequest $service_not_as_described;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\V1\Issuing\Disputes\Post\Evidence\EvidenceReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
