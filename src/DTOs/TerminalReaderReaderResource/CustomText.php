<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * Custom Text
 *
 * Represents custom text to be displayed when collecting the input using a reader
 */
final class CustomText extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'skip_button' => [
            'maxLength' => 5000,
        ],
        'submit_button' => [
            'maxLength' => 5000,
        ],
        'title' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Customize the default description for this input
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Customize the default label for this input's skip button
     */
    public ?string $skip_button {
        set {
            $this->assigning('skip_button', $value);
            $this->skip_button = $value;
        }
    }
    /**
     * Customize the default label for this input's submit button
     */
    public ?string $submit_button {
        set {
            $this->assigning('submit_button', $value);
            $this->submit_button = $value;
        }
    }
    /**
     * Customize the default title for this input
     */
    public ?string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'skip_button' => $value === null || is_string($value) ? $this->skip_button = $value : parent::assignMember($name, $value),
            'submit_button' => $value === null || is_string($value) ? $this->submit_button = $value : parent::assignMember($name, $value),
            'title' => $value === null || is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
