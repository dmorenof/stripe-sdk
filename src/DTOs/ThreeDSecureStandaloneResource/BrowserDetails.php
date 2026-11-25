<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * BrowserDetailsResource
 *
 * Contains details on the browser for a standalone 3DS Authentication.
 */
final class BrowserDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accept_header',
        'ip_address',
        'javascript_enabled',
        'language',
        'user_agent',
    ];

    protected const array VALIDATION = [
        'accept_header' => [
            'maxLength' => 5000,
        ],
        'ip_address' => [
            'maxLength' => 5000,
        ],
        'language' => [
            'maxLength' => 5000,
        ],
        'user_agent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The HTTP accept headers from the cardholder's browser.
     */
    public string $accept_header {
        set {
            $this->assigning('accept_header', $value);
            $this->accept_header = $value;
        }
    }
    /**
     * The color depth of the cardholder’s screen.
     */
    public int $color_depth;
    /**
     * The IP address of the browser.
     */
    public string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    /**
     * The cardholder browser’s ability to execute Java.
     */
    public bool $java_enabled;
    /**
     * The cardholder browser’s ability to execute JavaScript.
     */
    public bool $javascript_enabled;
    /**
     * An IETF BCP 47 language tag representing the browser language.
     */
    public string $language {
        set {
            $this->assigning('language', $value);
            $this->language = $value;
        }
    }
    /**
     * The total height of the cardholder’s screen in pixels.
     */
    public int $screen_height;
    /**
     * The total width of the cardholder’s screen in pixels.
     */
    public int $screen_width;
    /**
     * The time difference between UTC time and the local time of the cardholder’s browser, in minutes.
     */
    public int $timezone_offset;
    /**
     * The browser user agent.
     */
    public string $user_agent {
        set {
            $this->assigning('user_agent', $value);
            $this->user_agent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accept_header' => is_string($value) ? $this->accept_header = $value : parent::assignMember($name, $value),
            'color_depth' => is_int($value) ? $this->color_depth = $value : parent::assignMember($name, $value),
            'ip_address' => is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'java_enabled' => is_bool($value) ? $this->java_enabled = $value : parent::assignMember($name, $value),
            'javascript_enabled' => is_bool($value) ? $this->javascript_enabled = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'screen_height' => is_int($value) ? $this->screen_height = $value : parent::assignMember($name, $value),
            'screen_width' => is_int($value) ? $this->screen_width = $value : parent::assignMember($name, $value),
            'timezone_offset' => is_int($value) ? $this->timezone_offset = $value : parent::assignMember($name, $value),
            'user_agent' => is_string($value) ? $this->user_agent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
