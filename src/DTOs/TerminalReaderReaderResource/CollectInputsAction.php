<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * CollectInputsAction
 *
 * Represents a reader action to collect customer inputs
 */
final class CollectInputsAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'inputs',
    ];

    /**
     * List of inputs to be collected.
     */
    public \StripeSDK\Collections\TerminalReaderReaderResource\CollectInputsAction\InputsCollection $inputs;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\TerminalReaderReaderResource\CollectInputsAction\MetadataMap $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inputs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->inputs = new \StripeSDK\Collections\TerminalReaderReaderResource\CollectInputsAction\InputsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TerminalReaderReaderResource\Input::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
