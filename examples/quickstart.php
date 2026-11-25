<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use StripeSDK\Configuration;
use StripeSDK\StripeAPISDK;
use StripeSDK\Requests\V1\PaymentIntents\Post as PaymentIntentRequest;
use StripeSDK\V1\PaymentIntents;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['basicAuth' => ['username' => getenv('STRIPE_SECRET_KEY') ?: '', 'password' => '']]);
StripeAPISDK::configure($configuration);

$intent = PaymentIntents::post(new PaymentIntentRequest((object) [
    'amount' => 2000,
    'currency' => 'eur',
    'automatic_payment_methods' => (object) ['enabled' => true],
]));

echo json_encode($intent), "\n";
