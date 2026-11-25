<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Cancel;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'cancellation_reason' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Reason for canceling this SetupIntent. Possible values are: `abandoned`, `requested_by_customer`, or `duplicate`
     */
    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Cancel\Post\CancellationReasonEnum $cancellation_reason {
        set {
            $this->assigning('cancellation_reason', $value);
            $this->cancellation_reason = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cancellation_reason' => is_string($value) ? $this->cancellation_reason = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Cancel\Post\CancellationReasonEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
