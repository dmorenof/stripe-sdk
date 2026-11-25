<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * File
 *
 * This object represents files hosted on Stripe's servers. You can upload
 * files with the [create file](https://docs.stripe.com/api#create_file) request
 * (for example, when uploading dispute evidence). Stripe also
 * creates files independently (for example, the results of a [Sigma scheduled
 * query](#scheduled_queries)).
 *
 * Related guide: [File upload guide](https://docs.stripe.com/file-upload)
 */
final class File extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'object_',
        'purpose',
        'size',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'filename' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'title' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The file expires and isn't available at this time in epoch seconds.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * The suitable name for saving the file to a filesystem.
     */
    public ?string $filename {
        set {
            $this->assigning('filename', $value);
            $this->filename = $value;
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
     * A list of [file links](https://docs.stripe.com/api#file_links) that point at this file.
     */
    public ?\StripeSDK\DTOs\File\LinksDTO $links;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\File\ObjectEnum $object_;
    /**
     * The [purpose](https://docs.stripe.com/file-upload#uploading-a-file) of the uploaded file.
     */
    public \StripeSDK\Enums\File\PurposeEnum $purpose;
    /**
     * The size of the file object in bytes.
     */
    public int $size;
    /**
     * A suitable title for the document.
     */
    public ?string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    /**
     * The returned file type (for example, `csv`, `pdf`, `jpg`, or `png`).
     */
    public ?string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    /**
     * Use your live secret API key to download the file from this URL.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'filename' => $value === null || is_string($value) ? $this->filename = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\File\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'purpose' => is_string($value) ? $this->purpose = \StripeSDK\Enums\File\PurposeEnum::from($value) : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'title' => $value === null || is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
