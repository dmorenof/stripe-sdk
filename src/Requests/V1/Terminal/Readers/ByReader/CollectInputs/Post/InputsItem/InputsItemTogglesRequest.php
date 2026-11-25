<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem;

/**
 * toggle_params
 */
final class InputsItemTogglesRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 50,
        ],
        'title' => [
            'maxLength' => 50,
        ],
    ];

    public \StripeSDK\Enums\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\TogglesItem\DefaultValueEnum $default_value;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
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
            'default_value' => is_string($value) ? $this->default_value = \StripeSDK\Enums\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\TogglesItem\DefaultValueEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
