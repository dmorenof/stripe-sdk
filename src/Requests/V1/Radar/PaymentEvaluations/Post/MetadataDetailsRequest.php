<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post;

/**
 * client_device_metadata_wrapper
 *
 * Details about the Client Device Metadata to associate with the payment evaluation.
 */
final class MetadataDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'radar_session',
    ];

    protected const array VALIDATION = [
        'radar_session' => [
            'maxLength' => 5000,
        ],
    ];

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
