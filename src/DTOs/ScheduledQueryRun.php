<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Scheduled Query
 *
 * If you have [scheduled a Sigma query](https://docs.stripe.com/sigma/scheduled-queries), you'll
 * receive a `sigma.scheduled_query_run.created` webhook each time the query
 * runs. The webhook contains a `ScheduledQueryRun` object, which you can use to
 * retrieve the query results.
 */
final class ScheduledQueryRun extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'data_load_time',
        'id',
        'livemode',
        'object_',
        'result_available_until',
        'sql',
        'status',
        'title',
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
        'sql' => [
            'maxLength' => 100000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
        'title' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * When the query was run, Sigma contained a snapshot of your Stripe data at this time.
     * Format: unix-time
     */
    public int $data_load_time;
    public \StripeSDK\DTOs\SigmaScheduledQueryRunError $error;
    /**
     * The file object representing the results of the query.
     */
    public ?\StripeSDK\DTOs\File $file;
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
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\ScheduledQueryRun\ObjectEnum $object_;
    /**
     * Time at which the result expires and is no longer available for download.
     * Format: unix-time
     */
    public int $result_available_until;
    /**
     * SQL for the query.
     */
    public string $sql {
        set {
            $this->assigning('sql', $value);
            $this->sql = $value;
        }
    }
    /**
     * The query's execution status, which will be `completed` for successful runs, and `canceled`, `failed`, or `timed_out` otherwise.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * Title of the query.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'data_load_time' => is_int($value) ? $this->data_load_time = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \StripeSDK\DTOs\SigmaScheduledQueryRunError($value) : parent::assignMember($name, $value),
            'file' => $value === null || $value instanceof \stdClass ? $this->file = $value === null ? null : new \StripeSDK\DTOs\File($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ScheduledQueryRun\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'result_available_until' => is_int($value) ? $this->result_available_until = $value : parent::assignMember($name, $value),
            'sql' => is_string($value) ? $this->sql = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
