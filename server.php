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

    if (isset($_POST["enviar"])) {
        echo "Botão foi clicado";
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post">
            <Button name="enviar" > enviar</Button>
        </form>
</body>
</html>
