<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * RadarRule
 */
final class Rule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'id',
        'predicate',
    ];

    protected const array VALIDATION = [
        'action' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'predicate' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The action taken on the payment.
     */
    public string $action {
        set {
            $this->assigning('action', $value);
            $this->action = $value;
        }
    }
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The predicate to evaluate the payment against.
     */
    public string $predicate {
        set {
            $this->assigning('predicate', $value);
            $this->predicate = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'predicate' => is_string($value) ? $this->predicate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
