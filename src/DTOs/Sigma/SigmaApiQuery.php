<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Sigma;

/**
 * Saved Query
 *
 * A saved query object represents a query that can be executed for a run.
 */
final class SigmaApiQuery extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'name',
        'object_',
        'sql',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'sql' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     */
    public int $created;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * The name of the query.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Sigma\SigmaApiQuery\ObjectEnum $object_;
    /**
     * The sql statement for the query.
     */
    public string $sql {
        set {
            $this->assigning('sql', $value);
            $this->sql = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Sigma\SigmaApiQuery\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'sql' => is_string($value) ? $this->sql = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
