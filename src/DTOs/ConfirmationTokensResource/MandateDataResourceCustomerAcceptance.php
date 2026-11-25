<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConfirmationTokensResource;

/**
 * Customer Acceptance
 *
 * This hash contains details about the customer acceptance of the Mandate.
 */
final class MandateDataResourceCustomerAcceptance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * If this is a Mandate accepted online, this hash contains details about the online acceptance.
     */
    public ?\StripeSDK\DTOs\ConfirmationTokensResource\MandateDataResourceCustomerAcceptanceResourceOnline $online;
    /**
     * The type of customer acceptance information included with the Mandate.
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
            'online' => $value === null || $value instanceof \stdClass ? $this->online = $value === null ? null : new \StripeSDK\DTOs\ConfirmationTokensResource\MandateDataResourceCustomerAcceptanceResourceOnline($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
