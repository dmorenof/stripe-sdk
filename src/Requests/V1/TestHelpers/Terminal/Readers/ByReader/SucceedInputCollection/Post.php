<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\SucceedInputCollection;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * This parameter defines the skip behavior for input collection.
     */
    public \StripeSDK\Enums\V1\TestHelpers\Terminal\Readers\ByReader\SucceedInputCollection\Post\RequiredInputsEnum $skip_non_required_inputs;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'skip_non_required_inputs' => is_string($value) ? $this->skip_non_required_inputs = \StripeSDK\Enums\V1\TestHelpers\Terminal\Readers\ByReader\SucceedInputCollection\Post\RequiredInputsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
