<?php
require_once __DIR__.'/vendor/autoload.php';
    
    $channelName = 'news';
    $recipient= ['ExponentPushToken[4v5SFYFpPpivRa7MRzsT1e]', 'ExponentPushToken[LlovGzMHJnWvfK2MX7FpmL]'];

      // You can quickly bootup an expo instance
      $expo = \ExponentPhpSDK\Expo::normalSetup();

    foreach ($recipient as $value) {
        // Subscribe the recipient to the server
        $expo->subscribe($channelName, $value);
    }
    
    // Build the notification data
    $notification = ['body' => 'Sucesso Lucas!'];
    
    // Notify an interest with a notification
    $expo->notify([$channelName], $notification);