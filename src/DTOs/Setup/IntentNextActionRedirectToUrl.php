<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * SetupIntentNextActionRedirectToUrl
 */
final class IntentNextActionRedirectToUrl extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'return_url' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * If the customer does not exit their browser while authenticating, they will be redirected to this specified URL after completion.
     */
    public ?string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }
    /**
     * The URL you must redirect your customer to in order to authenticate.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'return_url' => $value === null || is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
