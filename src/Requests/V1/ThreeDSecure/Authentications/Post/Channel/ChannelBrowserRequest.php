<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\Channel;

/**
 * browser
 */
final class ChannelBrowserRequest extends \Dmorenof\SdkRuntime\DTO
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
            'maxLength' => 2048,
        ],
        'device_id' => [
            'maxLength' => 64,
        ],
        'ip_address' => [
            'maxLength' => 45,
        ],
        'language' => [
            'maxLength' => 35,
        ],
        'user_agent' => [
            'maxLength' => 2048,
        ],
    ];

    public string $accept_header {
        set {
            $this->assigning('accept_header', $value);
            $this->accept_header = $value;
        }
    }
    public int $color_depth;
    public string $device_id {
        set {
            $this->assigning('device_id', $value);
            $this->device_id = $value;
        }
    }
    public string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    public bool $java_enabled;
    public bool $javascript_enabled;
    public string $language {
        set {
            $this->assigning('language', $value);
            $this->language = $value;
        }
    }
    public int $screen_height;
    public int $screen_width;
    public int $timezone_offset;
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
            'device_id' => is_string($value) ? $this->device_id = $value : parent::assignMember($name, $value),
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
