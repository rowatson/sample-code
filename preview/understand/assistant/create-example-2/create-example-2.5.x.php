<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
$sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "your_auth_token";
$twilio = new Client($sid, $token);

$assistant = $twilio->preview->understand->assistants
                                         ->create(array(
                                                      "uniqueName" => "greet-assistant",
                                                      "initiationActions" => array(
                                                          "actions" => array(
                                                              array(
                                                                  "say" => array(
                                                                      "speech" => "Hello, I'm your virtual assistant! How can I help you?"
                                                                  )
                                                              )
                                                          )
                                                      )
                                                  )
                                         );

print($assistant->sid);