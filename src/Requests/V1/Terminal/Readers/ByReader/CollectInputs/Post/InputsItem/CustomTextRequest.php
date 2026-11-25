<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem;

/**
 * custom_text_params
 */
final class CustomTextRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'title',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 500,
        ],
        'skip_button' => [
            'maxLength' => 14,
        ],
        'submit_button' => [
            'maxLength' => 30,
        ],
        'title' => [
            'maxLength' => 40,
        ],
    ];

    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public string $skip_button {
        set {
            $this->assigning('skip_button', $value);
            $this->skip_button = $value;
        }
    }
    public string $submit_button {
        set {
            $this->assigning('submit_button', $value);
            $this->submit_button = $value;
        }
    }
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'skip_button' => is_string($value) ? $this->skip_button = $value : parent::assignMember($name, $value),
            'submit_button' => is_string($value) ? $this->submit_button = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
