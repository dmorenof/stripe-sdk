<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoVerificationSessionOptions
 */
final class VerificationSessionOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Gelato\SessionDocumentOptions $document;
    public \StripeSDK\DTOs\Gelato\SessionEmailOptions $email;
    public \StripeSDK\DTOs\Gelato\SessionIdNumberOptions $id_number;
    public \StripeSDK\DTOs\Gelato\SessionMatchingOptions $matching;
    public \StripeSDK\DTOs\Gelato\SessionPhoneOptions $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'document' => $value instanceof \stdClass ? $this->document = new \StripeSDK\DTOs\Gelato\SessionDocumentOptions($value) : parent::assignMember($name, $value),
            'email' => $value instanceof \stdClass ? $this->email = new \StripeSDK\DTOs\Gelato\SessionEmailOptions($value) : parent::assignMember($name, $value),
            'matching' => $value instanceof \stdClass ? $this->matching = new \StripeSDK\DTOs\Gelato\SessionMatchingOptions($value) : parent::assignMember($name, $value),
            'phone' => $value instanceof \stdClass ? $this->phone = new \StripeSDK\DTOs\Gelato\SessionPhoneOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
