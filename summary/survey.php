<?php

/*必要ファイルの読み込み*/
if( $_SERVER['SERVER_NAME'] == 'persephone.cl.ait.kyushu-u.ac.jp' || $_SERVER['SERVER_NAME'] == 'hades.cl.ait.kyushu-u.ac.jp' ){
    require( $_SERVER['DOCUMENT_ROOT'] . '/../itoFilepath.php' );
}else{
    require( $_SERVER['DOCUMENT_ROOT'] . '/sf_ito/document_root/itoFilepath.php' ); 
}

/*セッションからクッキーを生成*/
session_start();
if( isset( $_SESSION['ITO_SUPER_ADDRESS'] ) )
    setcookie( 'ITO_SUPER_ADDRESS', htmlspecialchars( $_SESSION['ITO_SUPER_ADDRESS'] ), time() + 365 * 24 * 60 * 60 );   #1年

/*クッキーからセッションを生成*/
if( isset( $_COOKIE['ITO_SUPER_ADDRESS'] ) )
    $_SESSION['ITO_SUPER_ADDRESS'] = htmlspecialchars( $_COOKIE['ITO_SUPER_ADDRESS'] );

ini_set( 'display_errors', 1 );

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート集計結果</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- 自作のcss -->
    <link href="../css/style.css"     rel="stylesheet" media="screen" >
    <link href="../css/style_pc.css"  rel="stylesheet" media="screen and (min-width: 641px)" >
    <link href="../css/style_smp.css" rel="stylesheet" media="screen and (max-width: 640px)" >
    <link href="../css/top_pc.css"  rel="stylesheet" media="screen and (min-width: 641px)" >
    <link href="../css/top_smp.css" rel="stylesheet" media="screen and (max-width: 640px)" >
    <link href="css/style.css"     rel="stylesheet" media="screen" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="js/Chart.js"></script>

    <!-- googleanalytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-66798994-1', 'auto');
    ga('send', 'pageview');
    </script>
</head>
<body>
    <!-- ナビゲーションバーの設定 -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- ヘッダ情報 -->
            <div class="navbar-header">
                <a class="navbar-brand" href="../">伊都周辺へのスーパー誘致に関する調査</a>
            </div>
            <!-- リストの配置 -->
            <ul class="nav navbar-nav">
                <?php printNavigation( 'result' ); ?>
                </ul>
        </div>
    </nav>
    <main class="container" role="main">
        <article>
            <h1>アンケート集計結果</h1>
            <p>
                本活動Webサイトにて実施したアンケートは、
                <a target="_blank" href="survey.pdf">こちら</a>です。
                このページでは、
                このアンケートの回答を集計したものを掲載しています。
            </p>

            <h2 id="Q1">設問1.回答者について</h2>
            <div class="Q1">
                <div class="Q1_1">
                    <h3>1-1.性別</h3>
                    <p>回答者のうち3分の2が男性であるという結果となりました。<br><br></p>
                    <img src="survey/Q1_1.png" class="pie-chart" />
                    <table border=1>
                        <tr style="color : #fff;">
                            <th style="text-align: center; background-color:#3676e0;">男性</th>
                            <th style="text-align: center; background-color:#da163e;">女性</th>
                            <th style="text-align: center; background-color:#ffffff; color:#000">回答しない</th>
                        </tr>
                        <tr>
                            <td>90人</td>
                            <td>41人</td>
                            <td>2人</td>
                        </tr>
                    </table>
                </div>

                <div class="Q1_2">
                    <h3>1-2.九州大学との関係</h3>
                    <p>「その他」を選んだ人のうち、3人はその関係に関しては回答しておらず、1人は九州大学の元職員でした。</p>
                    <img src="survey/Q1_2.png" class="pie-chart" />
                    <table style="text-align: center;" border=1>
                    <tr style="color : #fff;">
                        <th style="text-align: center; background-color:#e0a036;">学生</th>
                        <th style="text-align: center; background-color:#76e036;">職員</th>
                        <th style="text-align: center; background-color:#aaaaaa;">その他</th>
                        <th style="text-align: center; background-color:#ffffff; color:#000;">回答しない</th>
                    </tr>
                    <tr>
                        <td>122人</td>
                        <td>6人</td>
                        <td>4人</td>
                        <td>2人</td>
                    </tr>
                    </table>
                </div>
            </div>

            <div class="Q1">
                <div class="Q1_3">
                    <h3>1-3.住んでいる地域</h3>
                    <p>「その他」としては、実家から通っている人や、貝塚や箱崎などの箱崎キャンパス周辺の地域に住んでいるという回答がありました。</p>
                    <img src="survey/Q1_3.png" class="pie-chart" />
                    <table border=1>
                    <tr style="color : #fff;">
                        <th style="text-align: center; background-color:#da163e;">姪浜</th>
                        <th style="text-align: center; background-color:#3676e0;">今宿</th>
                        <th style="text-align: center; background-color:#76e036;">九大学研都市</th>
                        <th style="text-align: center; background-color:#e0a036;">周船寺</th>
                        <th style="text-align: center; background-color:#e04b36;">波多江</th>
                        <th style="text-align: center; background-color:#a036e0;">富士見</th>
                    </tr>
                    <tr>
                        <td>3人</td>
                        <td>4人</td>
                        <td>18人</td>
                        <td>15人</td>
                        <td>5人</td>
                        <td>13人</td>
                    </tr>
                    </table>
                    <table border=1>
                    <tr style="color : #fff;">
                        <th style="text-align: center; background-color:#4b36e0;">九大伊都キャンパス周辺</th>
                        <th style="text-align: center; background-color:#aaaaaa;">その他</th>
                        <th style="text-align: center; background-color:#ffffff; color: #000;">回答しない</th>
                    </tr>
                    <tr>
                        <td>49人</td>
                        <td>26人</td>
                        <td>1人</td>
                    </tr>
                    </table>
                </div>
            </div>

            <h2 id="Q2">設問2.伊都キャンパス周辺での普段の買い物について</h2>
            <h3>2-1.伊都キャンパス周辺でよく利用するお店について</h3>
            <h4>2-1-1.伊都キャンパス周辺での食材の購入場所</h4>
            <div class="Q2_1_1 clearfix">
                <table border="1">
                    <caption>食材の購入場所-男女別と全回答</caption>
                    <tr><th>店舗                        </th><th>男性</th><th>女性</th><th>全回答</th></tr>
                    <tr><td>イオンモール福岡伊都店      </td><td>57人</td><td>26人</td><td>  85人</td></tr>
                    <tr><td>マックスバリュ 周船寺店     </td><td>49人</td><td>15人</td><td>  66人</td></tr>
                    <tr><td>マルキョウ高田店            </td><td>18人</td><td> 6人</td><td>  25人</td></tr>
                    <tr><td>JA糸島産直市場伊都菜彩      </td><td> 4人</td><td> 4人</td><td>   8人</td></tr>
                    <tr><td>ダイレックス 伊都店         </td><td>15人</td><td> 4人</td><td>  19人</td></tr>
                    <tr><td>サニー 姪浜店               </td><td> 0人</td><td> 2人</td><td>   2人</td></tr>
                    <tr><td>ルミエール今宿店            </td><td>15人</td><td> 6人</td><td>  22人</td></tr>
                    <tr><td>九大生協                    </td><td>45人</td><td>18人</td><td>  64人</td></tr>
                    <tr><td>ローソン(学内)              </td><td>45人</td><td>18人</td><td>  64人</td></tr>
                    <tr><td>その他のコンビニやスーパー  </td><td>19人</td><td> 1人</td><td>  21人</td></tr>
                    <tr><td>買い物をしない              </td><td> 3人</td><td> 0人</td><td>   3人</td></tr>
                    <tr><td>その他                      </td><td> 6人</td><td> 6人</td><td>  13人</td></tr>
                    <tr><td>回答しない                  </td><td> 1人</td><td> 0人</td><td>   1人</td></tr>
                </table>
                <table border="1">
                    <caption>食材の購入場所-地域別</caption>
                    <tr><th>店舗                        </th><th>九大学研都市</th><th>周船寺</th><th>富士見</th><th>伊都キャンパス周辺</th></tr>
                    <tr><td>イオンモール福岡伊都店      </td><td>        18人</td><td>   5人</td><td>   5人</td><td>              39人</td></tr>
                    <tr><td>マックスバリュ 周船寺店     </td><td>         3人</td><td>  14人</td><td>   9人</td><td>              28人</td></tr>
                    <tr><td>マルキョウ高田店            </td><td>         0人</td><td>   7人</td><td>   5人</td><td>               8人</td></tr>
                    <tr><td>JA糸島産直市場伊都菜彩      </td><td>         1人</td><td>   1人</td><td>   1人</td><td>               1人</td></tr>
                    <tr><td>ダイレックス 伊都店         </td><td>         5人</td><td>   0人</td><td>   2人</td><td>              10人</td></tr>
                    <tr><td>サニー 姪浜店               </td><td>         0人</td><td>   0人</td><td>   0人</td><td>               0人</td></tr>
                    <tr><td>ルミエール今宿店            </td><td>         3人</td><td>   1人</td><td>   1人</td><td>              11人</td></tr>
                    <tr><td>九大生協                    </td><td>         9人</td><td>   5人</td><td>   4人</td><td>              26人</td></tr>
                    <tr><td>ローソン(学内)              </td><td>        10人</td><td>   5人</td><td>   2人</td><td>              10人</td></tr>
                    <tr><td>その他のコンビニやスーパー  </td><td>         2人</td><td>   1人</td><td>   4人</td><td>              12人</td></tr>
                    <tr><td>買い物をしない              </td><td>         0人</td><td>   0人</td><td>   0人</td><td>               0人</td></tr>
                    <tr><td>その他                      </td><td>         2人</td><td>   2人</td><td>   0人</td><td>               2人</td></tr>
                    <tr><td>回答しない                  </td><td>         0人</td><td>   0人</td><td>   0人</td><td>               1人</td></tr>
                </table>
            </div>
            <div class="Q2_1_1">
                <figure>
                    <img src="survey/Q2_1_1.png" class="bar-chart" />
                    <figcaption>食材の購入場所-全回答の集計</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q2_1_1_gender.png" class="bar-chart" />
                    <figcaption>食材の購入場所-男女別</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q2_1_1_place.png" class="bar-chart" />
                    <figcaption>食材の購入場所-住んでいる地域別</figcaption>
                </figure>
            </div>
            <p>
                　その他の回答としては、
                「ファミリーマート元岡店、九大学研都市店」「ローソン田尻店」のようなコンビニや、
                「ハローデイ姪浜店」「西鉄ストア」「ドラッグコスモス伊都店」のようなスーパーマーケットやドラッグストアなどがあげられました。<br>
                　よく利用されている店舗としては、「イオンモール福岡伊都店」と「マックスバリュ周船寺店」が多いようです。
                男女間に利用するスーパーマーケットについての差は見られませんでした。
                しかし、
                住んでいる地域別に見れば、「九大学研都市」に住む人々は「イオンモール福岡伊都店」を多く利用し、
                「周船寺」や「富士見」に住む人々は「マックスバリュ 周船寺店」を多く利用する傾向にあります。
                <strong>食材を買う際には、
                住んでいる地域で最も近いスーパーマーケットを利用する傾向にある</strong>ことがわかります。
            </p>

            <h4>2-1-2.伊都キャンパス周辺での日用品の購入場所</h4>
            <div class="Q2_1_2 clearfix">
                <table border="1">
                    <caption>日用品の購入場所-男女別と全回答</caption>
                    <tr><th>店舗                        </th><th>男性</th><th>女性</th><th>全回答</th></tr>
                    <tr><td>イオンモール福岡伊都店      </td><td>56人</td><td>29人</td><td>  87人</td></tr>
                    <tr><td>マックスバリュ 周船寺店     </td><td>32人</td><td> 8人</td><td>  41人</td></tr>
                    <tr><td>マルキョウ高田店            </td><td> 9人</td><td> 5人</td><td>  14人</td></tr>
                    <tr><td>JA糸島産直市場伊都菜彩      </td><td> 0人</td><td> 0人</td><td>   0人</td></tr>
                    <tr><td>ダイレックス 伊都店         </td><td>10人</td><td> 2人</td><td>  12人</td></tr>
                    <tr><td>サニー 姪浜店               </td><td> 0人</td><td> 3人</td><td>   3人</td></tr>
                    <tr><td>ルミエール今宿店            </td><td>13人</td><td> 2人</td><td>  15人</td></tr>
                    <tr><td>九大生協                    </td><td>17人</td><td>11人</td><td>  29人</td></tr>
                    <tr><td>ローソン(学内)              </td><td>17人</td><td>11人</td><td>  28人</td></tr>
                    <tr><td>その他のコンビニやスーパー  </td><td> 5人</td><td> 0人</td><td>   5人</td></tr>
                    <tr><td>買い物をしない              </td><td> 0人</td><td> 0人</td><td>   0人</td></tr>
                    <tr><td>その他                      </td><td>12人</td><td> 6人</td><td>  19人</td></tr>
                    <tr><td>回答しない                  </td><td> 1人</td><td> 0人</td><td>   1人</td></tr>
                </table>
                <table border="1">
                    <caption>日用品の購入場所-地域別</caption>
                    <tr><th>店舗                        </th><th>九大学研都市</th><th>周船寺</th><th>富士見</th><th>伊都キャンパス周辺</th></tr>
                    <tr><td>イオンモール福岡伊都店      </td><td>        18人</td><td>   6人</td><td>   8人</td><td>              36人</td></tr>
                    <tr><td>マックスバリュ 周船寺店     </td><td>         2人</td><td>  10人</td><td>   7人</td><td>              17人</td></tr>
                    <tr><td>マルキョウ高田店            </td><td>         0人</td><td>   4人</td><td>   3人</td><td>               5人</td></tr>
                    <tr><td>JA糸島産直市場伊都菜彩      </td><td>         0人</td><td>   0人</td><td>   0人</td><td>               0人</td></tr>
                    <tr><td>ダイレックス 伊都店         </td><td>         3人</td><td>   0人</td><td>   1人</td><td>               6人</td></tr>
                    <tr><td>サニー 姪浜店               </td><td>         0人</td><td>   0人</td><td>   0人</td><td>               0人</td></tr>
                    <tr><td>ルミエール今宿店            </td><td>         3人</td><td>   1人</td><td>   0人</td><td>               7人</td></tr>
                    <tr><td>九大生協                    </td><td>         3人</td><td>   3人</td><td>   3人</td><td>              11人</td></tr>
                    <tr><td>ローソン(学内)              </td><td>         2人</td><td>   3人</td><td>   1人</td><td>              11人</td></tr>
                    <tr><td>その他のコンビニやスーパー  </td><td>         0人</td><td>   0人</td><td>   1人</td><td>               4人</td></tr>
                    <tr><td>買い物をしない              </td><td>         0人</td><td>   0人</td><td>   0人</td><td>               0人</td></tr>
                    <tr><td>その他                      </td><td>         2人</td><td>   2人</td><td>   1人</td><td>               6人</td></tr>
                    <tr><td>回答しない                  </td><td>         0人</td><td>   0人</td><td>   0人</td><td>               1人</td></tr>
                </table>
            </div>
            <div class="Q2_1_2">
                <figure>
                    <img src="survey/Q2_1_2.png" class="bar-chart" />
                    <figcaption>日用品の購入場所-全回答の集計</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q2_1_2_gender.png" class="bar-chart"  />
                    <figcaption>日用品の購入場所-男女別</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q2_1_2_place.png" class="bar-chart" />
                    <figcaption>日用品の購入場所-住んでいる地域別</figcaption>
                </figure>
            </div>
            <p>
                　その他の回答としては、「ナフコ元岡店」「ドラッグコスモス伊都店」「GooDay周船寺店」があり、
                特に、
                「ナフコ元岡店」に関しては9人の回答者がいました。<br>
                　日用品の場合、
                最もよく利用されている店舗は「イオンモール福岡伊都店」であることがわかります。
                「イオンモール福岡伊都店」は、
                選択肢の中で最も規模の大きなスーパーマーケットです。
                そのため、
                日用品の品揃えは他の選択肢の店舗よりも豊富です。
                その事実がこの結果として表れました。
                こちらも、
                男女間の結果にそれほど大きな違いは見られませんでした。<br>
                　しかし、「富士見」や「周船寺」に住む人々はの中には日用品も「マックスバリュ周船寺店」で買う人が多く、
                食材ほどではありませんが、
                <strong>日用品の場合も住んでいる地域で最も近い店舗を選ぶ傾向がある</strong>ことがわかります。
            </p>

            <h3>2-2.伊都キャンパスでの買い物の頻度</h3>
            <div class="Q2_2 clearfix">
                <table border="1">
                    <caption>買い物の頻度-男女別と全回答</caption>
                    <tr><th>頻度           </th><th>男性</th><th>女性</th><th>全回答</th></tr>
                    <tr><td>週1〜2回       </td><td>54人</td><td>22人</td><td>  87人</td></tr>
                    <tr><td>週3〜4回       </td><td>19人</td><td> 9人</td><td>  41人</td></tr>
                    <tr><td>種5〜7回       </td><td>12人</td><td> 6人</td><td>  14人</td></tr>
                    <tr><td>買い物をしない </td><td> 4人</td><td> 4人</td><td>   0人</td></tr>
                    <tr><td>回答しない     </td><td> 0人</td><td> 0人</td><td>  12人</td></tr>
                </table>
                <table border="1">
                    <caption>買い物の頻度-地域別</caption>
                    <tr><th>頻度           </th><th>九大学研都市</th><th>周船寺</th><th>富士見</th><th>伊都キャンパス周辺</th></tr>
                    <tr><td>週1〜2回       </td><td>         8人</td><td>   6人</td><td>   6人</td><td>              36人</td></tr>
                    <tr><td>週3〜4回       </td><td>         4人</td><td>   6人</td><td>   5人</td><td>               7人</td></tr>
                    <tr><td>週5〜7回       </td><td>         5人</td><td>   2人</td><td>   0人</td><td>               6人</td></tr>
                    <tr><td>買い物をしない </td><td>         1人</td><td>   1人</td><td>   1人</td><td>               0人</td></tr>
                    <tr><td>回答しない     </td><td>         3人</td><td>   0人</td><td>   0人</td><td>               0人</td></tr>
                </table>
            </div>
            <div class="Q2_2 clearfix">
                <figure class="half">
                    <img src="survey/Q2_2.png" class="pie-chart" />
                    <figcaption>買い物の頻度</figcaption>
                </figure>
                <figure class="half">
                    <img src="survey/Q2_2_property.png" class="pie-chart" />
                    <figcaption>男女別・住んでいる地域別の買い物の頻度</figcaption>
                </figure>
            </div>
            <p>
                　買い物の頻度は、
                住んでいる地域別に見ると大きく異なることがわかります。
                「九大学研都市」に住む人々は「週1〜2回」と答えた人が30%であるのに対し、
                「伊都キャンパス周辺」に住む人々は「週1〜2回」と答えた人が73%と2倍以上となっています。
                <strong>スーパーマーケットが近くにない地域に住んでいる人ほど、
                買い物の頻度が減少していく</strong>ことがわかります。
            </p>

            <h3>2-3.買い物に関して不便に思うこと</h3>
            <div class="Q2_3 clearfix">
                <table border="1">
                    <caption>買い物に関して不満に思うこと</caption>
                    <tr><th>不満                </th><th>男性</th><th>女性</th><th>全回答</th></tr>
                    <tr><td>場所が遠い          </td><td>71人</td><td>31人</td><td> 104人</td></tr>
                    <tr><td>交通手段が少ない    </td><td>36人</td><td>17人</td><td>  55人</td></tr>
                    <tr><td>品揃えが悪い        </td><td>15人</td><td> 9人</td><td>  26人</td></tr>
                    <tr><td>価格が高い          </td><td>16人</td><td> 6人</td><td>  23人</td></tr>
                    <tr><td>荷物を運ぶことが大変</td><td>29人</td><td>16人</td><td>  46人</td></tr>
                </table>
                <table border="1">
                    <caption>買い物に関して不満に思うこと-地域別</caption>
                    <tr><th>不満                </th><th>九大学研都市</th><th>周船寺</th><th>富士見</th><th>伊都キャンパス周辺</th></tr>
                    <tr><td>場所が遠い          </td><td>        11人</td><td>   7人</td><td>  12人</td><td>              45人</td></tr>
                    <tr><td>交通手段が少ない    </td><td>         4人</td><td>   5人</td><td>   7人</td><td>              23人</td></tr>
                    <tr><td>品揃えが悪い        </td><td>         3人</td><td>   5人</td><td>   0人</td><td>               8人</td></tr>
                    <tr><td>価格が高い          </td><td>         6人</td><td>   1人</td><td>   0人</td><td>               9人</td></tr>
                    <tr><td>荷物を運ぶことが大変</td><td>         8人</td><td>   1人</td><td>   4人</td><td>              21人</td></tr>
                </table>
            </div>
            <div class="Q2_3">
                <figure>
                    <img src="survey/Q2_3.png" class="bar-chart" />
                    <figcaption>買い物に関して不便に思うこと</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q2_3_gender.png" class="bar-chart" />
                    <figcaption>買い物に関して不便に思うこと-男女別</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q2_3_place.png" class="bar-chart" />
                    <figcaption>買い物に関して不便に思うこと-地域別</figcaption>
                </figure>
            </div>
            <p>
                　「その他」の意見としては、
                「パソコンのパーツが買えない」という意見も見られました。<br>
                　「場所が遠い」が不便に感じることとしては一番多いことがわかります。
                地域別に見れば、
                「富士見」と「伊都キャンパス周辺」に住む人々の9割が「場所が遠い」に回答しています。
                また、
                「交通手段が少ない」ことが2番目に多い不満となり、
                交通手段が少なければ「荷物を運ぶことが大変」という不満につながるようで、
                これが3番目に多い結果となったと考えられます。<br>
                　この結果からも、
                <strong>スーパーマーケットの有無は、
                その居住地域の満足度を大きく左右する指標である</strong>と言えます。
            </p>

            <h2 id="Q3">設問3.交通手段について</h2>
            <h3>3-1.伊都キャンパス周辺にアクセスするときの交通手段</h3>
            <div class="Q3_1 clearfix">
                <table border="1">
                    <caption>伊都キャンパス周辺の交通手段</caption>
                    <tr><th>交通手段              </th><th>男性</th><th>女性</th><th>全回答</th></tr>
                    <tr><td>徒歩                  </td><td>30人</td><td>15人</td><td>  46人</td></tr>
                    <tr><td>自転車                </td><td>54人</td><td>23人</td><td>  79人</td></tr>
                    <tr><td>原動機付自転車        </td><td>21人</td><td> 1人</td><td>  24人</td></tr>
                    <tr><td>自動車                </td><td> 5人</td><td> 4人</td><td>   9人</td></tr>
                    <tr><td>昭和バス              </td><td>51人</td><td>31人</td><td>  84人</td></tr>
                    <tr><td>西鉄バス              </td><td> 5人</td><td> 4人</td><td>   9人</td></tr>
                    <tr><td>九大キャンパス間バス  </td><td> 2人</td><td> 5人</td><td>   8人</td></tr>
                    <tr><td>地下鉄空港線、JR筑肥線</td><td>12人</td><td>12人</td><td>  26人</td></tr>
                    <tr><td>地下鉄貝塚線          </td><td> 5人</td><td> 4人</td><td>  10人</td></tr>
                    <tr><td>その他                </td><td> 1人</td><td> 0人</td><td>   2人</td></tr>
                    <tr><td>回答しない            </td><td> 0人</td><td> 0人</td><td>   0人</td></tr>
                </table>
                <table border="1">
                    <caption>伊都キャンパス周辺の交通手段-地域別</caption>
                    <tr><th>交通手段              </th><th>九大学研都市</th><th>周船寺</th><th>富士見</th><th>伊都キャンパス周辺</th></tr>
                    <tr><td>徒歩                  </td><td>         8人</td><td>   3人</td><td>   1人</td><td>  23</td></tr>
                    <tr><td>自転車                </td><td>        11人</td><td>   9人</td><td>   8人</td><td>  35人</td></tr>
                    <tr><td>原動機付自転車        </td><td>        15人</td><td>   6人</td><td>   9人</td><td>  31人</td></tr>
                    <tr><td>自動車                </td><td>         1人</td><td>   1人</td><td>   1人</td><td>   0人</td></tr>
                    <tr><td>昭和バス              </td><td>        15人</td><td>   6人</td><td>   9人</td><td>  31人</td></tr>
                    <tr><td>西鉄バス              </td><td>         1人</td><td>   1人</td><td>   1人</td><td>   2人</td></tr>
                    <tr><td>九大キャンパス間バス  </td><td>         2人</td><td>   0人</td><td>   1人</td><td>   1人</td></tr>
                    <tr><td>地下鉄空港線、JR筑肥線</td><td>         3人</td><td>   0人</td><td>   1人</td><td>   6人</td></tr>
                    <tr><td>地下鉄貝塚線          </td><td>         1人</td><td>   0人</td><td>   1人</td><td>   4人</td></tr>
                    <tr><td>その他                </td><td>         0人</td><td>   0人</td><td>   0人</td><td>   1人</td></tr>
                    <tr><td>回答しない            </td><td>         0人</td><td>   0人</td><td>   0人</td><td>   0人</td></tr>
                </table>
            </div>
            <div class="Q3_1">
                <figure>
                    <img src="survey/Q3_1.png" class="bar-chart" />
                    <figcaption>伊都キャンパス周辺の交通手段</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q3_1_gender.png" class="bar-chart" />
                    <figcaption>伊都キャンパス周辺の交通手段-男女別</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q3_1_place.png" class="bar-chart" />
                    <figcaption>伊都キャンパス周辺の交通手段-地域別</figcaption>
                </figure>
            </div>
            <p>
                　伊都キャンパス周辺にアクセスする際に利用されている交通手段として多いのは、
                「自転車」と「昭和バス」でした。<br>
                　また、男女別に見ると、
                「原動機付自転車」を利用する割合は、
                女性よりも男性の方が圧倒的に多いことがわかります。
                これに対し、
                女性は「昭和バス」を利用している人が多いようです。<br>
                　地域別に見ると、
                「原動機付自転車」や「昭和バス」などのエンジン駆動の交通手段を最も多く利用している地域は、
                「九大学研都市」であることがわかります。また、「富士見」と「周船寺」では、
                徒歩で伊都キャンパスまでアクセスする人が少ないようです。
            </p>

            <h3>3-2.伊都キャンパス周辺にアクセスする頻度</h3>
            <div class="Q3_2 clearfix">
                <table border="1">
                    <caption>伊都キャンパス周辺にアクセスする頻度</caption>
                    <tr><th>頻度           </th><th>男性</th><th>女性</th><th>全回答</th></tr>
                    <tr><td>週1〜2回       </td><td> 9人</td><td> 5人</td><td>  14人</td></tr>
                    <tr><td>週3〜4回       </td><td>11人</td><td> 7人</td><td>  18人</td></tr>
                    <tr><td>種5〜7回       </td><td>64人</td><td>26人</td><td>  92人</td></tr>
                    <tr><td>ほとんどない   </td><td> 1人</td><td> 3人</td><td>   5人</td></tr>
                    <tr><td>回答しない     </td><td> 2人</td><td> 0人</td><td>   2人</td></tr>
                </table>
                <table border="1">
                    <caption>伊都キャンパス周辺にアクセスする頻度-地域別</caption>
                    <tr><th>頻度           </th><th>九大学研都市</th><th>周船寺</th><th>富士見</th><th>伊都キャンパス周辺</th></tr>
                    <tr><td>週1〜2回       </td><td>         0人</td><td>   3人</td><td>   1人</td><td>               6人</td></tr>
                    <tr><td>週3〜4回       </td><td>         2人</td><td>   1人</td><td>   2人</td><td>               8人</td></tr>
                    <tr><td>週5〜7回       </td><td>        15人</td><td>  10人</td><td>  10人</td><td>              31人</td></tr>
                    <tr><td>ほとんどない   </td><td>         1人</td><td>   0人</td><td>   0人</td><td>               0人</td></tr>
                    <tr><td>回答しない     </td><td>         0人</td><td>   0人</td><td>   0人</td><td>               2人</td></tr>
                </table>
            </div>
            <div class="Q3_2 clearfix">
                <figure class="half">
                    <img src="survey/Q3_2.png" class="pie-chart" />
                    <figcaption>伊都キャンパス周辺にアクセスする頻度</figcaption>
                </figure>
                <figure class="half">
                    <img src="survey/Q3_2_property.png" class="pie-chart" />
                    <figcaption>男女別・住んでいる地域別の伊都キャンパス周辺にアクセスする</figcaption>
                </figure>
            </div>
            <p>
                　伊都キャンパス周辺にアクセスする頻度は、
                性別や住んでいる地域によらず、
                <strong>約7割の人々が週5〜7回である</strong>ことがわかります。
            </p>

            <h3>3-3.伊都キャンパス周辺で生活のための買い物をする際の交通手段</h3>
            <div class="Q3_3 clearfix">
                <table border="1">
                    <caption>買い物の交通手段</caption>
                    <tr><th>交通手段              </th><th>男性</th><th>女性</th><th>全回答</th></tr>
                    <tr><td>徒歩                  </td><td>36人</td><td>19人</td><td>  55人</td></tr>
                    <tr><td>自転車                </td><td>52人</td><td>23人</td><td>  76人</td></tr>
                    <tr><td>原動機付自転車        </td><td>21人</td><td> 1人</td><td>  23人</td></tr>
                    <tr><td>自動車                </td><td> 8人</td><td> 6人</td><td>  14人</td></tr>
                    <tr><td>昭和バス              </td><td>32人</td><td>19人</td><td>  51人</td></tr>
                    <tr><td>西鉄バス              </td><td> 1人</td><td> 0人</td><td>   1人</td></tr>
                    <tr><td>九大キャンパス間バス  </td><td> 0人</td><td> 2人</td><td>   2人</td></tr>
                    <tr><td>地下鉄空港線、JR筑肥線</td><td> 2人</td><td> 5人</td><td>   7人</td></tr>
                    <tr><td>地下鉄貝塚線          </td><td> 0人</td><td> 1人</td><td>   1人</td></tr>
                    <tr><td>その他                </td><td> 2人</td><td> 1人</td><td>   4人</td></tr>
                    <tr><td>回答しない            </td><td> 0人</td><td> 0人</td><td>   0人</td></tr>
                </table>
                <table border="1">
                    <caption>買い物の交通手段-地域別</caption>
                    <tr><th>交通手段              </th><th>九大学研都市</th><th>周船寺</th><th>富士見</th><th>伊都キャンパス周辺</th></tr>
                    <tr><td>徒歩                  </td><td>        11人</td><td>   7人</td><td>   4人</td><td>  20人</td></tr>
                    <tr><td>自転車                </td><td>         9人</td><td>   7人</td><td>  10人</td><td>  35人</td></tr>
                    <tr><td>原動機付自転車        </td><td>         5人</td><td>   3人</td><td>   3人</td><td>   7人</td></tr>
                    <tr><td>自動車                </td><td>         1人</td><td>   2人</td><td>   2人</td><td>   1人</td></tr>
                    <tr><td>昭和バス              </td><td>         4人</td><td>   3人</td><td>   5人</td><td>  29人</td></tr>
                    <tr><td>西鉄バス              </td><td>         0人</td><td>   0人</td><td>   0人</td><td>   1人</td></tr>
                    <tr><td>九大キャンパス間バス  </td><td>         0人</td><td>   0人</td><td>   0人</td><td>   0人</td></tr>
                    <tr><td>地下鉄空港線、JR筑肥線</td><td>         0人</td><td>   0人</td><td>   0人</td><td>   2人</td></tr>
                    <tr><td>地下鉄貝塚線          </td><td>         0人</td><td>   0人</td><td>   0人</td><td>   1人</td></tr>
                    <tr><td>その他                </td><td>         0人</td><td>   0人</td><td>   0人</td><td>   1人</td></tr>
                    <tr><td>回答しない            </td><td>         0人</td><td>   0人</td><td>   0人</td><td>   0人</td></tr>
                </table>
            </div>
            <div class="Q3_3">
                <figure>
                    <img src="survey/Q3_3.png" class="bar-chart" />
                    <figcaption>買い物の交通手段</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q3_3_gender.png" class="bar-chart" />
                    <figcaption>買い物の交通手段-男女別</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q3_3_place.png" class="bar-chart" />
                    <figcaption>買い物の交通手段-地域別</figcaption>
                </figure>
            </div>
            <p>
                　買い物の際に利用される交通手段は、「自転車」が最も多く、
                伊都キャンパス周辺にアクセスする際の交通手段と比べて、
                「徒歩」が増加し、「昭和バス」が減少していることがわかります。<br>
                　地域別に見れば、
                <strong>「伊都キャンパス周辺」では買い物の際に、
                「昭和バス」を利用する割合が他の地域よりも2倍以上高い</strong>ことがわかります。
                <strong>「伊都キャンパス周辺」にはスーパーマーケットがないという事実が、
                この結果に結びついている</strong>と考えられます。
            </p>

            <h3>3-4.伊都キャンパス周辺の交通手段に関して不便に思うこと</h3>
            <div class="Q3_4 clearfix">
                <table border="1">
                    <caption>交通手段に関して不便に思うこと</caption>
                        <tr><th>不満                 </th><th> 男性  </th><th> 女性 </th><th> 全回答</th></tr>
                        <tr><td>移動時間が長い       </td><td> 46人  </td><td> 25 人  </td><td> 72人    </td></tr>
                        <tr><td>便数が少ない         </td><td> 48人  </td><td> 25 人  </td><td> 75人    </td></tr>
                        <tr><td>ピーク時が満員       </td><td> 44人  </td><td> 22 人  </td><td> 67人    </td></tr>
                        <tr><td>交通費が高い         </td><td> 50人  </td><td> 28 人  </td><td> 79人    </td></tr>
                </table>
                <table border="1">
                    <caption>交通手段に関して不便に思うこと-住んでいる地域別</caption>
                        <tr><th>不満                 </th><th> 九大学研都市 </th><th> 周船寺   </th><th> 富士見 </th><th> 伊都キャンパス周辺</th></tr>
                        <tr><td>移動時間が長い       </td><td> 10人           </td><td>  8人       </td><td>  6人     </td><td> 22人                </td></tr>
                        <tr><td>便数が少ない         </td><td>  7人           </td><td>  5人       </td><td> 10人     </td><td> 26人                </td></tr>
                        <tr><td>ピーク時が満員       </td><td> 10人           </td><td>  5人       </td><td>  8人     </td><td> 18人                </td></tr>
                        <tr><td>交通費が高い         </td><td> 14人           </td><td>  5人       </td><td>  8人     </td><td> 28人                </td></tr>
                </table>
            </div>
            <div class="Q3_4">
                <figure>
                    <img src="survey/Q3_4.png" class="bar-chart" />
                    <figcaption>交通手段に関して不便に思うこと</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q3_4_gender.png" class="bar-chart" />
                    <figcaption>交通手段に関して不便に思うこと-男女別</figcaption>
                </figure>
                <figure>
                    <img src="survey/Q3_4_place.png" class="bar-chart" />
                    <figcaption>交通手段に関して不便に思うこと-地域別</figcaption>
                </figure>
            </div>
            <p>
                　「その他」の不満としては、
                「終バスが早い」「坂がきつい」「雨風が強い」などがありました。<br>
            </p>

            <h2 id="Q4">設問4.もし、伊都キャンパス周辺にスーパーマーケットができるなら</h2>
            <h3>4-1.利用したいか</h3>
            <div class="clearfix Q4_1">
                <img src="survey/Q4_1.png" class="pie-chart" />
                <table border=1>
                <tr style="color : #fff;">
                    <th style="text-align: center; background-color:#3676e0;">利用したい</th>
                    <th style="text-align: center; background-color:#da163e;">利用したくない</th>
                </tr>
                <tr>
                    <td>132人</td>
                    <td>  2人</td>
                </tr>
                </table>
            </div>
            <p>
                　ほとんどの人が、
                利用したいと回答する結果となりました。
            </p>

            <h3>4-2.どこにあるとよいか</h3>
            <div class="Q4_2 clearfix">
                <table border="1">
                    <caption>どこにあるとよいか</caption>
                        <tr><th>場所                                     </th><th> 回答数</th></tr>
                        <tr><td>伊都キャンパス内                         </td><td> 50人  </td></tr>
                        <tr><td>伊都キャンパス正面入り口を出てすぐの場所 </td><td> 83人  </td></tr>
                        <tr><td>産学連携交流センター横                   </td><td> 86人  </td></tr>
                        <tr><td>その他                                   </td><td>  8人  </td></tr>
                </table>
            </div>
            <div class="Q4_2">
                <figure>
                    <img src="survey/Q4_2.png" class="bar-chart" />
                    <figcaption>どこにあるとよいか</figcaption>
                </figure>
            </div>
            <p>
                　「その他」の意見として、
                「ナフコ元岡店のとなり」や「徒歩圏内」という回答があり、
                <strong>元岡小学校より伊都キャンパス側に求められている</strong>ことがわかりました。
            </p>

            <h3>4-3.どのようなスーパーマーケットがあるとよいか</h3>
            <h4>4-3-1.何を買いたいか</h4>
            <div class="Q4_3_1 clearfix">
                <table border="1">
                    <caption>何を買いたいか-1</caption>
                    <tr><th>品物          </th><th>回答数</th></tr>
                    <tr><td>野菜や果物    </td><td> 110人</td></tr>
                    <tr><td>肉類          </td><td> 109人</td></tr>
                    <tr><td>魚介類        </td><td>  92人</td></tr>
                    <tr><td>米            </td><td>  69人</td></tr>
                    <tr><td>パン類        </td><td>  95人</td></tr>
                    <tr><td>乳製品        </td><td>  89人</td></tr>
                    <tr><td>卵            </td><td>  94人</td></tr>
                    <tr><td>お菓子類      </td><td>  84人</td></tr>
                </table>
                <table border="1">
                    <caption>何を買いたいか-2</caption>
                    <tr><th>品物          </th><th>回答数</th></tr>
                    <tr><td>惣菜品        </td><td>  84人</td></tr>
                    <tr><td>弁当          </td><td>  70人</td></tr>
                    <tr><td>冷凍食品      </td><td>  71人</td></tr>
                    <tr><td>飲み物        </td><td> 104人</td></tr>
                    <tr><td>お酒          </td><td>  70人</td></tr>
                    <tr><td>調味料        </td><td>  74人</td></tr>
                    <tr><td>薬            </td><td>  64人</td></tr>
                    <tr><td>衛生用品      </td><td>  72人</td></tr>
                </table>
                <table border="1">
                    <caption>何を買いたいか-3</caption>
                    <tr><th>品物          </th><th>回答数</th></tr>
                    <tr><td>洗剤          </td><td>  62人</td></tr>
                    <tr><td>台所用品      </td><td>  54人</td></tr>
                    <tr><td>トイレ用品    </td><td>  54人</td></tr>
                    <tr><td>おふろ用品    </td><td>  51人</td></tr>
                    <tr><td>回答しない    </td><td>   2人</td></tr>
                    <tr><td>その他        </td><td>   5人</td></tr>
                </table>
            </div>
            <div class="Q4_3_1">
                <figure>
                    <img src="survey/Q4_3_1.png" class="bar-chart" />
                    <figcaption>何を買いたいか</figcaption>
                </figure>
            </div>
            <p>
                　野菜や果物、
                肉類などの生鮮食品や、
                すぐに消費してしまう飲み物が、
                買いたいものとして多いという結果となりました。
                日用品よりも食材が求められているようです。
                <strong>生鮮食品のような賞味期限、消費期限の短い食品が、
                冷凍食品などの保存しやすい食品よりも求められている傾向があります。</strong>
            </p>

            <h4>どのようなサービス、施設があるとよいか</h4>
            <div class="Q4_3_2 clearfix">
                <table border="1">
                    <caption>どのようなサービス、施設があるとよいか-1</caption>
                        <tr><th>サービス、施設     </th><th>回答数</th></tr>
                        <tr><td>レストラン         </td><td>  49人</td></tr>
                        <tr><td>カフェ             </td><td>  40人</td></tr>
                        <tr><td>ファストフード店   </td><td>  49人</td></tr>
                        <tr><td>弁当屋             </td><td>  45人</td></tr>
                        <tr><td>スポーツ用品店     </td><td>  13人</td></tr>
                        <tr><td>ファッション専門店 </td><td>  14人</td></tr>
                </table>
                <table border="1">
                    <caption>どのようなサービス、施設があるとよいか-2</caption>
                        <tr><th>サービス、施設     </th><th>回答数</th></tr>
                        <tr><td>家電量販店         </td><td>  27人</td></tr>
                        <tr><td>雑貨店             </td><td>  49人</td></tr>
                        <tr><td>文房具店           </td><td>  55人</td></tr>
                        <tr><td>銀行               </td><td>  70人</td></tr>
                        <tr><td>回答しない         </td><td>   1人</td></tr>
                        <tr><td>その他             </td><td>   8人</td></tr>
                </table>
            </div>
            <div class="Q4_3_2">
                <figure>
                    <img src="survey/Q4_3_2.png" class="bar-chart" />
                    <figcaption>どのようなサービス、施設があるとよいか</figcaption>
                </figure>
            </div>
            <p>
                「その他」としては、
                「ゲームセンター」や「アミューズメト施設」といった、
                娯楽施設があると嬉しいという意見がありました。
            </p>

            <h4>4-3-3.その他の要望</h4>
            <div class="Q4_3_3 clearfix">
                <table border="1">
                    <caption>その他の要望</caption>
                        <tr><th>その他の要望                                   </th><th> 回答数    </th></tr>
                        <tr><td>なるべく安くしてほしい                         </td><td> 93人      </td></tr>
                        <tr><td>生協のサービスと連携してほしい                 </td><td> 54人      </td></tr>
                        <tr><td>複数の銀行のATMを設置してほしい                </td><td> 66人      </td></tr>
                        <tr><td>品揃えを豊富にしてほしい                       </td><td> 71人      </td></tr>
                        <tr><td>フリーWifiの入る自由なスペースがほしい         </td><td> 31人      </td></tr>
                        <tr><td>イベントが開けるような教室のような場所がほしい </td><td> 14人      </td></tr>
                        <tr><td>夜遅くまで営業してほしい                       </td><td> 81人      </td></tr>
                        <tr><td>24時間営業してほしい                           </td><td> 59人      </td></tr>
                        <tr><td>回答しない                                     </td><td>  0人      </td></tr>
                        <tr><td>その他                                         </td><td>  6人      </td></tr>
                </table>
            </div>
            <div class="Q4_3_3">
                <figure>
                    <img src="survey/Q4_3_3.png" class="bar-chart" />
                    <figcaption>その他の要望</figcaption>
                </figure>
            </div>
            <p>
                　「その他」の意見としては、
                「駐車スペースを確保してほしい」「朝食が食べたくなるような飲食店がほしい」「生協と関わってほしい」「生鮮食品を多く取り扱ってほしい」などがありました。
            </p>
            <a href="./introduction.php">⇦もどる</a>　<a href="./consider.php">すすむ⇨</a><br><br><a href="../">トップページへ</a>
        </article>
    </main>
    <footer>
        copyright (C) Yuto Eguma. All rights reserved.
    </footer>
</body>
</html>

