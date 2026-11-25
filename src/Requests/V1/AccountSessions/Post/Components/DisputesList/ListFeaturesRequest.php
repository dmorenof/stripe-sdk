<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions\Post\Components\DisputesList;

/**
 * disputes_list_features_param
 */
final class ListFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $capture_payments;
    public bool $destination_on_behalf_of_charge_management;
    public bool $dispute_management;
    public bool $refund_management;
    public bool $smart_disputes_management;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_payments' => is_bool($value) ? $this->capture_payments = $value : parent::assignMember($name, $value),
            'destination_on_behalf_of_charge_management' => is_bool($value) ? $this->destination_on_behalf_of_charge_management = $value : parent::assignMember($name, $value),
            'dispute_management' => is_bool($value) ? $this->dispute_management = $value : parent::assignMember($name, $value),
            'refund_management' => is_bool($value) ? $this->refund_management = $value : parent::assignMember($name, $value),
            'smart_disputes_management' => is_bool($value) ? $this->smart_disputes_management = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
