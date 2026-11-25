<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsDocumentRequest2Variant1;

/**
 * document_options
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\OptionsDocumentRequest2Variant1\AllowedTypesCollection $allowed_types;
    public bool $require_id_number;
    public bool $require_live_capture;
    public bool $require_matching_selfie;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'require_id_number' => is_bool($value) ? $this->require_id_number = $value : parent::assignMember($name, $value),
            'require_live_capture' => is_bool($value) ? $this->require_live_capture = $value : parent::assignMember($name, $value),
            'require_matching_selfie' => is_bool($value) ? $this->require_matching_selfie = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
