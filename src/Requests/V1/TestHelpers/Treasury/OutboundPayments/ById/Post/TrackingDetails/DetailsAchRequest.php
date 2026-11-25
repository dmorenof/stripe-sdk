<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundPayments\ById\Post\TrackingDetails;

/**
 * ach_tracking_details_params
 */
final class DetailsAchRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'trace_id',
    ];

    protected const array VALIDATION = [
        'trace_id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $trace_id {
        set {
            $this->assigning('trace_id', $value);
            $this->trace_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'trace_id' => is_string($value) ? $this->trace_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
