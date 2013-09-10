<?php
/**
 * @author Hemendra <hemendra.chaudhary619@gmail.com>
 */
$app = array(
    '0' => array(
        'app_id' => '336197989828137',
        'app_name' => 'See online friends',
        'app_url' => 'http://boiling-gorge-1896.herokuapp.com/',
        'app_image_url' => 'https://m-static.ak.fbcdn.net/rsrc.php/v2/yu/r/ksv094IcU42.png'
    ),
    '1' => array(
        'app_id' => '569940249699950',
        'app_name' => 'like gate test',
        'app_url' => 'https://infinite-badlands-3830.herokuapp.com/',
        'app_image_url' => 'https://m-static.ak.fbcdn.net/rsrc.php/v2/yu/r/ksv094IcU42.png'
    ),
);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">

            <?php foreach ($app as $key => $value) {
                ?>
                <div class="appbox">
                    <p><?php echo $value['app_name']; ?></p>
                    <img src="<?php echo $value['app_image_url']; ?>" alt="App image" height="120px" width="190px"/>
                    <a href="http://www.facebook.com/dialog/pagetab?app_id=<?php echo $value['app_id']; ?>&next=<?php echo $value['app_url']; ?>">Install App</a>
                </div>
            <?php } ?>
        </div>
    </body>
</html>
