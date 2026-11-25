<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\Post;

/**
 * transfer_data_specs
 *
 * An optional dictionary including the account to automatically transfer to as part of a destination charge. [See the Connect documentation](https://docs.stripe.com/connect/destination-charges) for details.
 */
final class TransferDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'destination' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public string $destination {
        set {
            $this->assigning('destination', $value);
            $this->destination = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
