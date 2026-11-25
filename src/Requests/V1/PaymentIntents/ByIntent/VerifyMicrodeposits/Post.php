<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\VerifyMicrodeposits;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'descriptor_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Two positive integers, in *cents*, equal to the values of the microdeposits sent to the bank account.
     */
    public \StripeSDK\Collections\IntegerCollection $amounts;
    /**
     * The client secret of the PaymentIntent.
     */
    public string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    /**
     * A six-character code starting with SM present in the microdeposit sent to the bank account.
     */
    public string $descriptor_code {
        set {
            $this->assigning('descriptor_code', $value);
            $this->descriptor_code = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->amounts = new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'descriptor_code' => is_string($value) ? $this->descriptor_code = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
