<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InvoicesResource;

/**
 * InvoicesResourceConfirmationSecret
 */
final class ConfirmationSecret extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'client_secret',
        'type',
    ];

    protected const array VALIDATION = [
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The client_secret of the payment that Stripe creates for the invoice after finalization.
     */
    public string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    /**
     * The type of client_secret. Currently this is always payment_intent, referencing the default payment_intent that Stripe creates during invoice finalization
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
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
