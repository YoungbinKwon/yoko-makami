<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
  </head>
  <body class="index">
    <table class="keisei">
      <tr>
        <td>名前</td>
        <td><?php echo($customer[1]['name']);?></td>
      </tr>
      <tr>
        <td>プレー回数</td>
        <td><?php echo($customer[1]['play_count']);?></td>
      </tr>
      <tr>
        <td>平均プレー料金</td>
        <td><?php echo($customer[1]['ave_play_fee']);?></td>
      </tr>
      <tr>
        <td>平均スタート時間</td>
        <td><?php echo($customer[1]['ave_start_time']);?></td>
      </tr>
      <tr>
        <td>住所</td>
        <td><?php echo($customer[1]['prefecture']);?></td>
      </tr>
    </table>

    <table class="hoshikawa">
      <tr>
        <td>名前</td>
        <td><?php echo($customer[2]['name']);?></td>
      </tr>
      <tr>
        <td>プレー回数</td>
        <td><?php echo($customer[2]['play_count']);?></td>
      </tr>
      <tr>
        <td>平均プレー料金</td>
        <td><?php echo($customer[2]['ave_play_fee']);?></td>
      </tr>
      <tr>
        <td>平均スタート時間</td>
        <td><?php echo($customer[2]['ave_start_time']);?></td>
      </tr>
      <tr>
        <td>住所</td>
        <td><?php echo($customer[2]['prefecture']);?></td>
      </tr>
    </table>

    <table class="moise">
      <tr>
        <td>名前</td>
        <td><?php echo($customer[3]['name']);?></td>
      </tr>
      <tr>
        <td>プレー回数</td>
        <td><?php echo($customer[3]['play_count']);?></td>
      </tr>
      <tr>
        <td>平均プレー料金</td>
        <td><?php echo($customer[3]['ave_play_fee']);?></td>
      </tr>
      <tr>
        <td>平均スタート時間</td>
        <td><?php echo($customer[3]['ave_start_time']);?></td>
      </tr>
      <tr>
        <td>住所</td>
        <td><?php echo($customer[3]['prefecture']);?></td>
      </tr>
    </table>

    <table class="youngbin">
      <tr>
        <td>名前</td>
        <td><?php echo($customer[4]['name']);?></td>
      </tr>
      <tr>
        <td>プレー回数</td>
        <td><?php echo($customer[4]['play_count']);?></td>
      </tr>
      <tr>
        <td>平均プレー料金</td>
        <td><?php echo($customer[4]['ave_play_fee']);?></td>
      </tr>
      <tr>
        <td>平均スタート時間</td>
        <td><?php echo($customer[4]['ave_start_time']);?></td>
      </tr>
      <tr>
        <td>住所</td>
        <td><?php echo($customer[4]['prefecture']);?></td>
      </tr>
    </table>
  </body>
</html>
