<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Alert
 *
 * A billing alert is a resource that notifies you when a certain usage threshold on a meter is crossed. For example, you might create a billing alert to notify you when a certain user made 100 API requests.
 */
final class Alert extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'alert_type',
        'id',
        'livemode',
        'object_',
        'title',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'title' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Defines the type of the alert.
     */
    public \StripeSDK\Enums\Billing\Alert\AlertTypeEnum $alert_type;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Billing\Alert\ObjectEnum $object_;
    /**
     * Status of the alert. This can be active, inactive or archived.
     */
    public ?\StripeSDK\Enums\Billing\Alert\StatusEnum $status;
    /**
     * Title of the alert.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    /**
     * Encapsulates configuration of the alert to monitor usage on a specific [Billing Meter](https://docs.stripe.com/api/billing/meter).
     */
    public ?\StripeSDK\DTOs\ThresholdsResourceUsageThresholdConfig $usage_threshold;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alert_type' => is_string($value) ? $this->alert_type = \StripeSDK\Enums\Billing\Alert\AlertTypeEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\Alert\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value === null ? null : \StripeSDK\Enums\Billing\Alert\StatusEnum::from($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'usage_threshold' => $value === null || $value instanceof \stdClass ? $this->usage_threshold = $value === null ? null : new \StripeSDK\DTOs\ThresholdsResourceUsageThresholdConfig($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
