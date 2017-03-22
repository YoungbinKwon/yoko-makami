<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/voicesearch.css"/>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/voicesearch.js"></script>
  </head>
  <body class="search">
    VoiceSearch Search ページ
    <form action="" method="GET">
        <input type="text" name="value">
        <input type="submit" value="Analyze">
    </form>
<?php 
if (isset($text) && isset($top_class)) {
    echo("<p> text=" . $text . " top_class=" . $top_class . "</p>");
}    
?>
  </body>
</html>
