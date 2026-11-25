<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Files;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'file',
        'purpose',
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A file to upload. Make sure that the specifications follow RFC 2388, which defines file transfers for the `multipart/form-data` protocol.
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $file;
    /**
     * Optional parameters that automatically create a [file link](https://docs.stripe.com/api#file_links) for the newly created file.
     */
    public \StripeSDK\Requests\V1\Files\Post\LinkDataRequest $file_link_data;
    /**
     * The [purpose](https://docs.stripe.com/file-upload#uploading-a-file) of the uploaded file.
     */
    public \StripeSDK\Enums\V1\Files\Post\FilesPurposeEnum $purpose;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'purpose' => is_string($value) ? $this->purpose = \StripeSDK\Enums\V1\Files\Post\FilesPurposeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
