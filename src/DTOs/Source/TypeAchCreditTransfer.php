<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeAchCreditTransfer extends \Dmorenof\SdkRuntime\DTO
{
    public ?string $account_number;
    public ?string $bank_name;
    public ?string $fingerprint;
    public ?string $refund_account_holder_name;
    public ?string $refund_account_holder_type;
    public ?string $refund_routing_number;
    public ?string $routing_number;
    public ?string $swift_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_number' => $value === null || is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'refund_account_holder_name' => $value === null || is_string($value) ? $this->refund_account_holder_name = $value : parent::assignMember($name, $value),
            'refund_account_holder_type' => $value === null || is_string($value) ? $this->refund_account_holder_type = $value : parent::assignMember($name, $value),
            'refund_routing_number' => $value === null || is_string($value) ? $this->refund_routing_number = $value : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            'swift_code' => $value === null || is_string($value) ? $this->swift_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
