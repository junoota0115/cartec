<?php require_once("../common/common.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="./member.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="../css/company.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/maker.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>社員紹介</title>
</head>

<body>

<?php 
require_once("../__header.php");
?>
    <div class="member_wrapper1">
    <img src="./img/member-title.png" alt="icon">
    </div>

    <div class="member_wrapper2">
        <div class="member_lists">
            <div class="member_list">
            <div class="member_list_left">
                <img src="" alt="member1" class="member1">
            </div>
            <!-- <img src="./img/member1.png" alt="member1" class="member1">-->
            <div class="member_list_right">
                <p>こんにちは。<br>
                    カーテクの更科代表更科昌義です。<br>
                    幼い頃からオヤジの影響で、レース・ラリー・ダートトライアル等経験しており、現在は、土系を中心とした競技ダートトライアルをメインに活動しております。<br>
                    また、ラリーのオフィシャル等にも参加しており、冬季には、氷上雪上での講習会、ジムカーナ＆ダートラ練習会を開催し、ストリート～競技の方と、幅広く、ドライバーの運転技能向上育成に力を入れています。
                </p>
                <div class="member_name">
                    <span>代表取締役</span>
                    <span>更科 昌義</span>
                </div>
            </div>
            </div>
            <div class="member_list">
            <div class="member_list_left">
            <img src="" alt="member2" class="member2">
            </div>
            <!-- <img src="./img/member2.png" alt="member2"> -->
            <div class="member_list_right">
                <p>呼び名ヤス<br>
                    カーテクの更科メカニックを担当。<br>
                    幼い頃から助手席でオヤジのドライビングテクニックを見て育つ。<br>
                    現在、ダートトライアルに参戦中。
                </p>
                <div class="member_name">
                    <span>専務</span>
                    <span>メカニック担当</span>
                    <span>更科 泰隆</span>
                </div>
                </div>
                
            </div>

            <div class="applybtn">
                <div class="button-applybtn" id="topButton"><span>トップへ戻る</span></div>
                </div>
        </div>

    </div>


            <?php require_once("../__maker.php");
        ?>

            <?php require_once("../__footer.php");
        ?>

<script src="member.js" defer></script>
</body>
</html>