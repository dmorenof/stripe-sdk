<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Client Device Metadata Detail
 *
 * Client device metadata attached to this payment evaluation.
 */
final class ClientDeviceMetadata extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'radar_session',
    ];

    protected const array VALIDATION = [
        'radar_session' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID for the Radar Session associated with the payment evaluation. A [Radar Session](https://docs.stripe.com/radar/radar-session) is a snapshot of the browser metadata and device details that help Radar make more accurate predictions on your payments.
     */
    public string $radar_session {
        set {
            $this->assigning('radar_session', $value);
            $this->radar_session = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'radar_session' => is_string($value) ? $this->radar_session = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
