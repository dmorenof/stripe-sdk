<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Radar;

/**
 * RadarReviewResourceSession
 */
final class ReviewResourceSession extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'browser' => [
            'maxLength' => 5000,
        ],
        'device' => [
            'maxLength' => 5000,
        ],
        'platform' => [
            'maxLength' => 5000,
        ],
        'version' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The browser used in this browser session (e.g., `Chrome`).
     */
    public ?string $browser {
        set {
            $this->assigning('browser', $value);
            $this->browser = $value;
        }
    }
    /**
     * Information about the device used for the browser session (e.g., `Samsung SM-G930T`).
     */
    public ?string $device {
        set {
            $this->assigning('device', $value);
            $this->device = $value;
        }
    }
    /**
     * The platform for the browser session (e.g., `Macintosh`).
     */
    public ?string $platform {
        set {
            $this->assigning('platform', $value);
            $this->platform = $value;
        }
    }
    /**
     * The version for the browser session (e.g., `61.0.3163.100`).
     */
    public ?string $version {
        set {
            $this->assigning('version', $value);
            $this->version = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'browser' => $value === null || is_string($value) ? $this->browser = $value : parent::assignMember($name, $value),
            'device' => $value === null || is_string($value) ? $this->device = $value : parent::assignMember($name, $value),
            'platform' => $value === null || is_string($value) ? $this->platform = $value : parent::assignMember($name, $value),
            'version' => $value === null || is_string($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
