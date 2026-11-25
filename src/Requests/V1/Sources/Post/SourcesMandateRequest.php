<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\Post;

/**
 * mandate_params
 *
 * Information about a mandate possibility attached to a source object (generally for bank debits) as well as its acceptance status.
 */
final class SourcesMandateRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'interval' => [
            'maxLength' => 5000,
        ],
        'notification_method' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Sources\Post\Mandate\MandateAcceptanceRequest $acceptance;
    public \StripeSDK\Requests\V1\Sources\Post\Mandate\MandateAmountRequest $amount;
    /**
     * Format: currency
     */
    public string $currency;
    public \StripeSDK\Enums\V1\Sources\Post\Mandate\MandateIntervalEnum $interval {
        set {
            $this->assigning('interval', $value);
            $this->interval = $value;
        }
    }
    public \StripeSDK\Enums\V1\Sources\Post\Mandate\NotificationMethodEnum $notification_method {
        set {
            $this->assigning('notification_method', $value);
            $this->notification_method = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\Sources\Post\Mandate\MandateIntervalEnum::from($value) : parent::assignMember($name, $value),
            'notification_method' => is_string($value) ? $this->notification_method = \StripeSDK\Enums\V1\Sources\Post\Mandate\NotificationMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
