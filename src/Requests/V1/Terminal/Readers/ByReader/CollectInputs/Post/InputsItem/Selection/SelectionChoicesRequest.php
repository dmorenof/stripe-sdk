<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\Selection;

/**
 * choice_params
 */
final class SelectionChoicesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'text',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 50,
        ],
        'text' => [
            'maxLength' => 30,
        ],
    ];

    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\Enums\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\Selection\ChoicesItem\ChoicesItemStyleEnum $style;
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'style' => is_string($value) ? $this->style = \StripeSDK\Enums\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\Selection\ChoicesItem\ChoicesItemStyleEnum::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
