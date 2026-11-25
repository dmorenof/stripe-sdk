<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeWechat extends \Dmorenof\SdkRuntime\DTO
{
    public string $prepay_id;
    public ?string $qr_code_url;
    public string $statement_descriptor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'prepay_id' => is_string($value) ? $this->prepay_id = $value : parent::assignMember($name, $value),
            'qr_code_url' => $value === null || is_string($value) ? $this->qr_code_url = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
