<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

final class TypeKlarna extends \Dmorenof\SdkRuntime\DTO
{
    public string $background_image_url;
    public ?string $client_token;
    public string $first_name;
    public string $last_name;
    public string $locale;
    public string $logo_url;
    public string $page_title;
    public string $pay_later_asset_urls_descriptive;
    public string $pay_later_asset_urls_standard;
    public string $pay_later_name;
    public string $pay_later_redirect_url;
    public string $pay_now_asset_urls_descriptive;
    public string $pay_now_asset_urls_standard;
    public string $pay_now_name;
    public string $pay_now_redirect_url;
    public string $pay_over_time_asset_urls_descriptive;
    public string $pay_over_time_asset_urls_standard;
    public string $pay_over_time_name;
    public string $pay_over_time_redirect_url;
    public string $payment_method_categories;
    public string $purchase_country;
    public string $purchase_type;
    public string $redirect_url;
    public int $shipping_delay;
    public string $shipping_first_name;
    public string $shipping_last_name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'background_image_url' => is_string($value) ? $this->background_image_url = $value : parent::assignMember($name, $value),
            'client_token' => $value === null || is_string($value) ? $this->client_token = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'logo_url' => is_string($value) ? $this->logo_url = $value : parent::assignMember($name, $value),
            'page_title' => is_string($value) ? $this->page_title = $value : parent::assignMember($name, $value),
            'pay_later_asset_urls_descriptive' => is_string($value) ? $this->pay_later_asset_urls_descriptive = $value : parent::assignMember($name, $value),
            'pay_later_asset_urls_standard' => is_string($value) ? $this->pay_later_asset_urls_standard = $value : parent::assignMember($name, $value),
            'pay_later_name' => is_string($value) ? $this->pay_later_name = $value : parent::assignMember($name, $value),
            'pay_later_redirect_url' => is_string($value) ? $this->pay_later_redirect_url = $value : parent::assignMember($name, $value),
            'pay_now_asset_urls_descriptive' => is_string($value) ? $this->pay_now_asset_urls_descriptive = $value : parent::assignMember($name, $value),
            'pay_now_asset_urls_standard' => is_string($value) ? $this->pay_now_asset_urls_standard = $value : parent::assignMember($name, $value),
            'pay_now_name' => is_string($value) ? $this->pay_now_name = $value : parent::assignMember($name, $value),
            'pay_now_redirect_url' => is_string($value) ? $this->pay_now_redirect_url = $value : parent::assignMember($name, $value),
            'pay_over_time_asset_urls_descriptive' => is_string($value) ? $this->pay_over_time_asset_urls_descriptive = $value : parent::assignMember($name, $value),
            'pay_over_time_asset_urls_standard' => is_string($value) ? $this->pay_over_time_asset_urls_standard = $value : parent::assignMember($name, $value),
            'pay_over_time_name' => is_string($value) ? $this->pay_over_time_name = $value : parent::assignMember($name, $value),
            'pay_over_time_redirect_url' => is_string($value) ? $this->pay_over_time_redirect_url = $value : parent::assignMember($name, $value),
            'payment_method_categories' => is_string($value) ? $this->payment_method_categories = $value : parent::assignMember($name, $value),
            'purchase_country' => is_string($value) ? $this->purchase_country = $value : parent::assignMember($name, $value),
            'purchase_type' => is_string($value) ? $this->purchase_type = $value : parent::assignMember($name, $value),
            'redirect_url' => is_string($value) ? $this->redirect_url = $value : parent::assignMember($name, $value),
            'shipping_delay' => is_int($value) ? $this->shipping_delay = $value : parent::assignMember($name, $value),
            'shipping_first_name' => is_string($value) ? $this->shipping_first_name = $value : parent::assignMember($name, $value),
            'shipping_last_name' => is_string($value) ? $this->shipping_last_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
