<?php require_once("../common/common.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="../css/notificationlist.css">
    <link rel="stylesheet" href="../css/company.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/maker.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>会社説明</title>
</head>
<body>
    <?php require_once("../__header.php");
    ?>


    <div class="wrapper">
        <div class="wrapper1">
            <div class="content">
                <!-- <img src="./img/top-fv.png"  class="absolute01" alt="top-fv" width="100%"> -->
                <img src=""  class="absolute01" alt="top-fv" width="100%">
                <div class="mojimoji">
                <img src="./img/main-title.png"  class="main-title" alt="main-title" width="100%">
                    <!-- <p><span class="moji1">信頼</span><span class="moji2">の整備</span></p>
                    <p><span class="moji1">　安心</span><span class="moji2">の走り</span></p>  -->
                </div>

                <!-- <div class="top_button">
                    <div class="message_btn">
                        <span class="icon">
                            <img src="./img/message-icon.png" alt="message-icon">
                        </span>
                        <span class="text">メ</span>
                        <span class="text">ッ</span>
                        <span class="text">セ</span>
                        <span class="text turn">ー</span>
                        <span class="text">ジ</span>
                        <span class="text">を</span>
                        <span class="text">送</span>
                        <span class="text">る</span>
                    </div>
                </div> -->

                </div>
            </div>
        </div>

        <div class="wrapper2">
				<div class="info_title">
					<span class="gradation_border">お知らせ</span>
				</div>
        <?php
        $MAX_NOTICE_DATA = 3;
        $MAX_PAGE = 0;
        $PAGE = 0;
        require_once('../__notificationlist.php');
        ?>
            <div class="notice_btn">
                <div class="angular_btn">
                    <span>一覧へ</span>
                </div>
		    </div>
		</div>

        <div class="wrapper3">
            <div class="wrapper3-content">
              <div class="content-title"><span>コンセプト</span></div>
                    <div class="wrapper3-img">    
                        <img src="./img/concept.png" alt="concept" width="100%">
                            <div class="img-message">
                            カーテクの更科はスバル車をメインに一般整備から競技車輌の製作まで行っています。くるまをもっとたくさんの人達に楽しんでいただきたいという方針で経営しております。<br>
                            スバル車に限らず国産・輸入各自動車メーカーの新車､中古車､車検､一般整備､板金塗装､各種パーツの販売、取り付け、チューニング、競技車両の製作、特殊車両の作製をしています。モータースポーツでの実績、培ったノウハウを活かし､整備等の技術を一般ユーザーに提供しています。<br>
                            自動車の他にチェンソー､発電機､草刈機...etc <br>
                            農機具、コンクリートカッターなども販売､修理も承ります。<br>
                            とにかくエンジンが搭載されているモノならなんでもお任せください！<br>
                            一味違った知る人ぞ知る町のくるま屋です。<br>
                            新潟では、SUBARUといえば、カーテクの更科と言われております。<br>
                            気軽にご相談ください。    
                        </div>
                    </div>
            </div>

            <div class="wrapper3-content">
              <div class="content-title"><span>代表挨拶</span></div>
              <div class="wrapper3-img">    
                    <img src="./img/message.png" alt="message" class="img" width="100%">
                    <div class="img-message">こんにちは。カーテクの更科代表更科昌義です。<br>
                        幼い頃からオヤジの影響で,レース・ラリー・ダートトライアル等経験しており、現在は、土系を中心とした競技ダートトライアルをメインに活動しております。<br>
                        また、ラリーのオフィシャル等にも参加しており、冬季には、氷上雪上での講習会、ジムカーナ＆ダートラ練習会を開催し、ストリート～競技の方と、幅広く、ドライバーの運転技能向上育成に力を入れています。
                    </div>  
              </div>
            </div>

            <div class="applybtn">
				<div class="button-applybtn" id="memberButton"><span>従業員紹介</span></div>
			</div>
        </div>

        <div class="wrapper4">
            <div class="content-title">私たちができること</div>
            <div class="content-subtitle">お客様が大切にされている愛車を安心安全に乗れるように整備・修理をしています。</div>
            <div class="wrapper4-content">
                <div class="content">
                    <img src="./img/wcd1.png" alt="wcd1">
                    <div class="title">
                        <p>安心の車検整備を徹底しております</p>
                    </div>
                    <div class="content-message">
                        <p>設備・整備士ともに、厳格な基準をクリアした当社であれば、常にハイクオリティなメンテナンスをお客様へとご提供できます。
                            初めての方から他社での車検のお見積りにお悩みの方・故障原因がわからない方・次回車検をご検討の方まで、どんな方でもどうぞお気軽にお問い合わせください。 
                            お客様のニーズに合わせたプランをご提案いたします。</p>
                    </div>
                </div>
                <div class="content">
                    <img src="./img/wcd2.png" alt="wcd2">
                    <div class="title">
                        <p>大小問わず、傷・へこみを適正価格でお直しします</p>
                    </div>
                    <div class="content-message">
                        <p>輸入車のボディで数多く採用されているアルミボディ・スチールボディ等の特殊鋼板にも対応しております。
                            溶接・調色が困難と言われているアルミボディ・スチールボディですが、豊富な知見・技術・実績を積み重ねてまいりました。<br>
                            他店で施工を断られた、またディーラーでの修理コストにお悩みの方の役にどんどんご相談ください。</p>
                        </div>
                </div>
                <div class="content">
                    <img src="./img/wcd3.png" alt="wcd3">
                    <div class="title">
                        <p>モータースポーツで培ってきた技術で壊れにくく速い車を製作しています</p>
                    </div>
                    <div class="content-message">
                        <p>レース、ラリー、ジムカーナ、ダートトライアル等に出場している車両の製作・メンテナンスを行なっています。<br>
                        レギュレーションに合わせた車両の制作やお客様にご要望・予算に合わせた車両のチューニングプランを用意しております。
                        もちろんストリート・ドレスアップにも合わせた製作も行なっておりますので、気軽にご相談ください。</p>
                    </div>
                </div>
            </div> 

            <div class="applybtn">
            <div class="button-applybtn"><span>競技車両制作ページを見る</span></div>
            </div>

        </div>

        <div class="wrapper5">
            <div class="content-title">お問い合わせ後の流れ</div>
            <div class="inquiry">
                <div class="inquiry-content">
                    <div class="list-number-top"><span>1</span></div>
                    <div class="inquiry-list">
                    <img src="./img/icon-phone.png" alt="wcd3">
                        <span>お問い合わせ</span>
                    </div>
                </div>

                <div class="inquiry-content">
                    <div class="list-number"><span>2</span></div>
                    <div class="inquiry-list">
                    <img src="./img/icon-carf.png" alt="wcd3">
                    <span>来店</span>   
                    </div>
                </div>

                <div class="inquiry-content">
                    <div class="list-number"><span>3</span></div>
                    <div class="inquiry-list">
                    <img src="./img/icon-speech.png" alt="wcd3">
                        <span>修理内容のご相談</span>
                    </div>
                </div>

                <div class="inquiry-content">
                    <div class="list-number"><span>4</span></div>
                    <div class="inquiry-list">
                    <img src="./img/icon-car.png" alt="wcd3">
                        <span>入庫</span>  
                    </div>
                </div>

                <div class="inquiry-content">
                    <div class="list-number"><span>5</span></div>
                    <div class="inquiry-list">
                    <img src="./img/icon-tools.png" alt="wcd3">
                        <span>作業開始</span>
                    </div>
                </div>

                <div class="inquiry-content">
                    <div class="list-number-bottom"><span>6</span></div>
                    <div class="inquiry-list">
                    <img src="./img/icon-handshake.png" alt="wcd3">
                        <span>お渡し</span>
                    </div>
                </div>
            </div>  

            <div class="applybtn">
            <div class="button-applybtn"><span>お問い合わせ</span></div>
            </div>
        </div>



    </div>
<?php
require_once("../__company.php");
?> 

<?php 
require_once("../__maker.php");
?>

<?php 
require_once("../__footer.php");
?>


<script src="index.js" defer></script>
</body>
</html>