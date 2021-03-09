<?php

    // プレイヤーの手がPOSTされたら実行

    if (!empty($_POST['player_hand'])) {

        // プレイヤーの手を代入

        $player_hand = $_POST['player_hand'];

    

        // PCの手をランダムで選択

        $array_enemy_hand = ['グー', 'チョキ', 'パー'];

        $key_enemy_hand = array_rand($array_enemy_hand);

        $pchand = $array_enemy_hand[$key_enemy_hand];

    

        // 勝敗を判定

        if ($player_hand == $pchand) {

            $result = 'あいこ!';

        } elseif ($player_hand == 'グー' && $pchand == 'チョキ') {

            $result = '勝ち!';

        } elseif ($player_hand == 'チョキ' && $pchand == 'パー') {

            $result = '勝ち!';

        } elseif ($player_hand == 'パー' && $pchand == 'グー') {

            $result = '勝ち!';

        } else {

            $result = '負け!';

        }

    } else {

        $result = '';

    }

?>

    <!DOCTYPE html>
    <html>

    <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    </head>

    <body>

    <h1>じゃんけん</h1>

    出す手を選んで勝負してください。

    <div class="form-box">

        <form action="" method="post">

            <label>

                <input type="radio" name="player_hand" value="グー" checked>グー

            </label>

            <label>

                <input type="radio" name="player_hand" value="チョキ">チョキ

            </label>

            <label>

                <input type="radio" name="player_hand" value="パー">パー

            </label>

            <button type="submit" class="battle-button">勝負する！</button>

        </form>

    

    <div class="result-box">

        <p class="result-word"><?= $result ?></p>

        あなた：<?= $player_hand ?><br>

        コンピューター：<?= $pchand ?><br>

    </div>

    </body>

    </html>

