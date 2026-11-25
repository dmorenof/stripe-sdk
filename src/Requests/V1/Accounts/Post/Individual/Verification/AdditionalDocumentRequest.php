<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Individual\Verification;

/**
 * person_verification_document_specs
 */
final class AdditionalDocumentRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'back' => [
            'maxLength' => 500,
        ],
        'front' => [
            'maxLength' => 500,
        ],
    ];

    public string $back {
        set {
            $this->assigning('back', $value);
            $this->back = $value;
        }
    }
    public string $front {
        set {
            $this->assigning('front', $value);
            $this->front = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'back' => is_string($value) ? $this->back = $value : parent::assignMember($name, $value),
            'front' => is_string($value) ? $this->front = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
