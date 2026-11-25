<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post;

/**
 * input_params
 */
final class CollectInputsInputsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'custom_text',
        'type',
    ];

    public \StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\CustomTextRequest $custom_text;
    public bool $required;
    public \StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\InputsItemSelectionRequest $selection;
    public \StripeSDK\Collections\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\InputsItemTogglesCollection $toggles;
    public \StripeSDK\Enums\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\InputsItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem\InputsItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
