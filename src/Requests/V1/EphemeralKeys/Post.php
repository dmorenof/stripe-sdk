<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\EphemeralKeys;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'issuing_card' => [
            'maxLength' => 5000,
        ],
        'nonce' => [
            'maxLength' => 5000,
        ],
        'verification_session' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the Customer you'd like to modify using the resulting ephemeral key.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The ID of the Issuing Card you'd like to access using the resulting ephemeral key.
     */
    public string $issuing_card {
        set {
            $this->assigning('issuing_card', $value);
            $this->issuing_card = $value;
        }
    }
    /**
     * A single-use token, created by Stripe.js, used for creating ephemeral keys for Issuing Cards without exchanging sensitive information.
     */
    public string $nonce {
        set {
            $this->assigning('nonce', $value);
            $this->nonce = $value;
        }
    }
    /**
     * The ID of the Identity VerificationSession you'd like to access using the resulting ephemeral key
     */
    public string $verification_session {
        set {
            $this->assigning('verification_session', $value);
            $this->verification_session = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'issuing_card' => is_string($value) ? $this->issuing_card = $value : parent::assignMember($name, $value),
            'nonce' => is_string($value) ? $this->nonce = $value : parent::assignMember($name, $value),
            'verification_session' => is_string($value) ? $this->verification_session = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
