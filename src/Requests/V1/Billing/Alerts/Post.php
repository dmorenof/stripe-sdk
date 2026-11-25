<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\Alerts;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'alert_type',
        'title',
    ];

    protected const array VALIDATION = [
        'title' => [
            'maxLength' => 256,
        ],
    ];

    /**
     * The type of alert to create.
     */
    public \StripeSDK\Enums\V1\Billing\Alerts\Post\AlertTypeEnum $alert_type;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The title of the alert.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    /**
     * The configuration of the usage threshold.
     */
    public \StripeSDK\Requests\V1\Billing\Alerts\Post\UsageThresholdRequest $usage_threshold;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alert_type' => is_string($value) ? $this->alert_type = \StripeSDK\Enums\V1\Billing\Alerts\Post\AlertTypeEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
