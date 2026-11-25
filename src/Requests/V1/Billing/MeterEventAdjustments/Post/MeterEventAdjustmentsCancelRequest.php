<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\MeterEventAdjustments\Post;

/**
 * event_adjustment_cancel_settings_param
 *
 * Specifies which event to cancel.
 */
final class MeterEventAdjustmentsCancelRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'identifier' => [
            'maxLength' => 100,
        ],
    ];

    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
