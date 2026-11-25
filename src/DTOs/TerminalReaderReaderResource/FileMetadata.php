<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * FileMetadata
 *
 * Metadata of an uploaded file
 */
final class FileMetadata extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'filename',
        'size',
        'type',
    ];

    protected const array VALIDATION = [
        'filename' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Creation time of the object (in seconds since the Unix epoch).
     * Format: unix-time
     */
    public int $created_at;
    /**
     * The original name of the uploaded file (e.g. `receipt.png`).
     */
    public string $filename {
        set {
            $this->assigning('filename', $value);
            $this->filename = $value;
        }
    }
    /**
     * The size (in bytes) of the uploaded file.
     */
    public int $size;
    /**
     * The format of the uploaded file.
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
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'filename' => is_string($value) ? $this->filename = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
