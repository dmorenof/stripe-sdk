<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingPersonalizationDesignCarrierText
 */
final class PersonalizationDesignCarrierText extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'footer_body' => [
            'maxLength' => 5000,
        ],
        'footer_title' => [
            'maxLength' => 5000,
        ],
        'header_body' => [
            'maxLength' => 5000,
        ],
        'header_title' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The footer body text of the carrier letter.
     */
    public ?string $footer_body {
        set {
            $this->assigning('footer_body', $value);
            $this->footer_body = $value;
        }
    }
    /**
     * The footer title text of the carrier letter.
     */
    public ?string $footer_title {
        set {
            $this->assigning('footer_title', $value);
            $this->footer_title = $value;
        }
    }
    /**
     * The header body text of the carrier letter.
     */
    public ?string $header_body {
        set {
            $this->assigning('header_body', $value);
            $this->header_body = $value;
        }
    }
    /**
     * The header title text of the carrier letter.
     */
    public ?string $header_title {
        set {
            $this->assigning('header_title', $value);
            $this->header_title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'footer_body' => $value === null || is_string($value) ? $this->footer_body = $value : parent::assignMember($name, $value),
            'footer_title' => $value === null || is_string($value) ? $this->footer_title = $value : parent::assignMember($name, $value),
            'header_body' => $value === null || is_string($value) ? $this->header_body = $value : parent::assignMember($name, $value),
            'header_title' => $value === null || is_string($value) ? $this->header_title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
