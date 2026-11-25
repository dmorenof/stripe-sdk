<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * RefundNextAction
 */
final class RefundNextAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\RefundNextActionDisplayDetails $display_details;
    /**
     * Type of the next action to perform.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_details' => $value instanceof \stdClass ? $this->display_details = new \StripeSDK\DTOs\RefundNextActionDisplayDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
