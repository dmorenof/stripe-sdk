<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BillingSchedulesRequest2Variant1Item;

/**
 * billing_schedules_update_params
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 200,
        ],
    ];

    public \StripeSDK\Collections\BillingSchedulesRequest2Variant1Item\AppliesToCollection $applies_to;
    public \StripeSDK\Requests\BillingSchedulesRequest2Variant1Item\BillUntilRequest $bill_until;
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
