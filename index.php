<?php get_header(); ?>
<main>
    <section id="top">
        <div class="inner">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/takahiro-yagi-0.png'); ?>"
                class="mainimg" />
        </div>
        <!-- <article>
            <h3 class="problems">こんな方は<span>メンズ脱毛アンドット</span>にお任せください！</h3>
            <ul class="fade-list">
                <li>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/check.png'); ?>"
                        class="post-thumb" />1回目から効果を実感したい!
                </li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/check.png'); ?>"
                        class="post-thumb" />都度払いで負担を少なくしたい!</li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/check.png'); ?>"
                        class="post-thumb" />正しい知識と技術力のあるスタッフが良い!</li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/check.png'); ?>"
                        class="post-thumb" />自分の悩みを気楽に相談したい!</li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/check.png'); ?>"
                        class="post-thumb" />清潔感UP+今より更にモテたい!</li>
            </ul>
        </article> -->
    </section>
    <section id="reviews">
        <h3 class="section-title">お客様からのサロンレビュー</h3>
        <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
    </section>

    <section id="strengths">
        <h3 class="section-title">脱毛のコラム</h3>
        <div class="strengths-list">

            <div class="strengths-item">
                <div class="item-header btn" data-target="protein">
                    <div class="text-area">
                        <h4>脱毛では「タンパク質の熱変性」が重要</h4>
                    </div>
                </div>
                <div class="detail">
                    <div class="modal-content protein">
                        <button class="modal-close">✕ 閉じる</button>
                        <p>タンパク質は一定の温度以上になると本来持つ機能を失います。</p>
                        <p>これを<span>熱変性（タンパク質の熱変性）</span>と呼びます。</p>
                        <p><span>毛乳頭</span>は毛細血管からの栄養を毛母細胞に届ける部分で【タンパク質】でできています。</p>
                        <p>毛乳頭の温度を70℃以上に熱すると、毛乳頭は熱変性を起こし本来の「毛母細胞(毛髪を作る細胞)に栄養を届ける」「毛根を定着させる」という機能を失います。</p>
                        <p>熱変性が一度起こると、温度を下げても本来の機能は復元しないことが大きな特徴です。</p>
                        <p>例を上げると、（生卵）を高温にまで温めると（ゆで卵）になりますが、一度ゆで卵になると冷やしても生卵には戻りません。これも「熱変性」です。</p>
                    </div>
                </div>
            </div>

            <div class="strengths-item">
                <div class="item-header btn" data-target="basic-principle">
                    <div class="text-area">
                        <h4>光脱毛の基礎原理（仕組み）</h4>
                    </div>
                    <div class="img-area">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/column_1.png'); ?>" class="post-thumb" />
                    </div>
                </div>
                <div class="detail" style="display: none;">
                    <div class="modal-content basic-principle">
                        <button class="modal-close">✕ 閉じる</button>
                        <p>STEP❶ “毛”「毛幹内にあるメラニン色素（黒色）」が光を吸収して熱くなる。</p>
                        <p><span>⬇︎</span></p>
                        <p>STEP❷ 毛幹（毛）が導火線となり毛乳頭に熱が伝わりある温度以上で毛乳頭が「熱変性」を起こす。</p>
                        <p><span>⬇︎</span></p>
                        <p>STEP❸ 毛乳頭が毛を作る機能と毛幹を固定する機能を失い、毛が抜ける。</p>
                    </div>
                </div>
            </div>

            <div class="strengths-item">
                <div class="item-header btn" data-target="heat">
                    <div class="text-area">
                        <h4>熱の届け方を考える</h4>
                    </div>
                    <div class="img-area">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/column_2.png'); ?>" class="post-thumb" />
                    </div>
                </div>
                <div class="detail" style="display: none;">
                    <div class="modal-content heat">
                        <button class="modal-close">✕ 閉じる</button>
                        <p>毛乳頭は70℃にまで加熱したいのですが、バーナーで炙ったり、真っ赤になるまで熱した鉄の棒を肌に押し付けるわけにはいきませんね</p>
                        <p>毛乳頭と肌表面の間には、健常な肌細胞（ケラチノサイトと呼びます）があります。毛乳頭を70℃にするには、毛乳頭の上に乗っかる健常な肌細胞に70℃以上に熱しないといけません。</p>
                        <p>さて、人がやけどする温度は45℃以上です。45℃の低音なら1時間、70℃以上なら1秒で皮膚組織の破壊が始ま
                            るといわれています。熱をそのまま毛乳頭に届けようとすると、さすがに火傷は避けられないですね</p>
                    </div>
                </div>
            </div>

            <div class="strengths-item">
                <div class="item-header btn" data-target="fuse">
                    <div class="text-area">
                        <h4>「毛」は導火線</h4>
                    </div>
                    <div class="img-area">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/column_3.png'); ?>" class="post-thumb" />
                    </div>
                </div>
                <div class="detail" style="display: none;">
                    <div class="modal-content fuse">
                        <button class="modal-close">✕ 閉じる</button>
                        <p>理科の授業で白い紙を黒く塗って虫眼鏡と太陽の光を使って火を起こす。こんな実験をしたのを覚えてますか？</p>
                        <p>脱毛はこの原理を使い、光を熱エネルギーに変換し、その熱エネルギーでタンパク質の性質を変化させること
                            で新しい毛を生えにくくしています。</p>
                    </div>
                </div>
            </div>

            <div class="strengths-item">
                <div class="item-header btn" data-target="light-energy">
                    <div class="text-area">
                        <h4>高い過ぎる光エネルギーは必要？</h4>
                    </div>
                </div>
                <div class="detail" style="display: none;">
                    <div class="modal-content light-energy">
                        <button class="modal-close">✕ 閉じる</button>
                        <p>脱毛施術において「高すぎるエネルギーは必要はない」です。お薬の処方と同じく、大量に服用すれば早く治る訳ではないのと同じ。</p>
                    </div>
                </div>
            </div>

            <div class="strengths-item">
                <div class="item-header btn" data-target="color">
                    <div class="text-area">
                        <h4>光に色がある？</h4>
                    </div>
                    <div class="img-area">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/column_4.png'); ?>" class="post-thumb" />
                    </div>
                </div>
                <div class="detail" style="display: none;">
                    <div class="modal-content color">
                        <button class="modal-close">✕ 閉じる</button>
                        <p>光は電磁波の一種です。波です。 光子（フォトン）という素粒子が波のように振動して、目に見える現象です。 この光子の振動の速さを波長といいます。
                            波長によっては、「光」として目に見えたり、見えなかったりします。 また、色がついて見えたりします。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-overlay"></div>
    </section>

    <section id="movie">

    </section>

    <section id="case-study">
        <!-- 髭脱毛 -->
        <div class="price">
            <h3 class="section-title">ヒゲ脱毛</h3>
            <div class="usually">
                <h4 class="value">通常価格（1回）</h4>
                <h5>1部位あたり2,500円 全8部位の場合20,000円</h5>
            </div>
            <div class="firsttime">
                <a href="https://repitte.jp/reserve/store?token=fa6dfce5cf7b9c72829b99689defec42" class="value-fs">
                    <h4 class="value">初回お試し価格</h4>
                    <h5>1部位あたり<span>1,000円</span>　全8部位の場合<span>3,000円</span></h5>
                    <p class="ft-p">今なら2回目以降全8部位 17,500円でご案内!</p>
                    <p class="ft-a">ご予約はこちらをタップ</p>
                </a>
            </div>
        </div>
        <ul class="slick-area">
            <li>
                <?php
                // GutenKit の Image Comparison（髭脱毛スライダーA：ID=44）を挿入
                echo do_blocks('<!-- wp:block {"ref":44} /-->');
                ?>
            </li>
            <li>
                <?php
                // GutenKit の Image Comparison（髭脱毛スライダーC：ID=50）を挿入
                echo do_blocks('<!-- wp:block {"ref":50} /-->');
                ?>
            </li>
            <li>
                <?php
                // GutenKit の Image Comparison（髭脱毛スライダーB：ID=47）を挿入
                echo do_blocks('<!-- wp:block {"ref":47} /-->');
                ?>
            </li>
        </ul>

        <!-- 胸脱毛 -->
        <div class="price">
            <h3 class="section-title">胸・腹全体脱毛</h3>
            <div class="usually">
                <h4 class="value">通常価格（1回）</h4>
                <h5 class="price-row">
                    <div class="price-item">
                        <span class="note">大部位</span>
                        (胸全体・腹全体) 各:8,000円
                    </div>
                    <div class="price-item">
                        <span class="note">小部位</span>
                        (乳輪周り・へそ周り) 各:2,500円
                    </div>
                </h5>
            </div>
            <div class="firsttime">
                <a href="https://repitte.jp/reserve/store?token=fa6dfce5cf7b9c72829b99689defec42" class="value-fs">
                    <h4 class="value">初回お試し価格</h4>
                    <h5 class="price-row">
                        <div class="price-item">
                            <span class="note">大部位</span>
                            (胸全体・腹全体) <br class="sp-onry">各:4,000円
                        </div>
                        <div class="price-item">
                            <span class="note">小部位</span>
                            (乳輪周り・へそ周り) <br class="sp-onry">各:1,000円
                        </div>
                    </h5>
                    <p class="ft-p">今なら2回目以降<br class="sp-onry"><span>(胸全体・腹全体のセット)</span>16,000円を⇨14,000円でご案内!</p>
                    <p class="ft-a">ご予約はこちらをタップ</p>
                </a>
            </div>
        </div>
        <?php
        // GutenKit の Image Comparison（胸脱毛：ID=15）を挿入
        echo do_blocks('<!-- wp:block {"ref":15} /-->');
        ?>

        <!-- 腕脱毛 -->
        <div class="price">
            <h3 class="section-title">腕(うで)脱毛</h3>
            <div class="usually">
                <h4 class="value">通常価格（1回）</h4>
                <h5 class="price-row">
                    <div class="price-item">
                        <span class="note">大部位</span>
                        (ひじ上・ひじ下) 各:5,500円
                    </div>
                    <div class="price-item">
                        <span class="note">小部位</span>
                        (手の甲・指) 各:500円
                    </div>
                </h5>
            </div>
            <div class="firsttime">
                <a href="https://repitte.jp/reserve/store?token=fa6dfce5cf7b9c72829b99689defec42" class="value-fs">
                    <h4 class="value">初回お試し価格</h4>
                    <h5 class="price-row">
                        <div class="price-item">
                            <span class="note">大部位</span>
                            (ひじ上・ひじ下) 各:2,500円
                        </div>
                        <div class="price-item">
                            <span class="note">小部位</span>
                            (手の甲・指) 各:500円
                        </div>
                    </h5>
                    <p class="ft-p">今なら2回目以降<br class="turn">腕フルセット<span>(ひじ上・ひじ下・肩周り・手の甲/指)</span><br class="sp-onry">14,000円を⇨12,000円でご案内!</p>
                    <p class="ft-a">ご予約はこちらをタップ</p>
                </a>
            </div>
        </div>
        <?php
        // GutenKit の Image Comparison（腕脱毛：ID=23）を挿入
        echo do_blocks('<!-- wp:block {"ref":23} /-->');
        ?>

        <!-- Vライン脱毛 -->
        <div class="price">
            <h3 class="section-title">VIO脱毛</h3>
            <div class="usually">
                <h4 class="value">通常価格（1回）</h4>
                <h5>1部位あたり3,000円 全6部位の場合18,000円</h5>
            </div>
            <div class="firsttime">
                <a href="https://repitte.jp/reserve/store?token=fa6dfce5cf7b9c72829b99689defec42" class="value-fs">
                    <h4 class="value">初回お試し価格</h4>
                    <h5>1部位あたり<span>1,500円</span>　全6部位の場合<span>8,000円</span></h5>
                    <p class="ft-a">ご予約はこちらをタップ</p>
                </a>
            </div>
        </div>
        <ul class="slick-area">
            <li>
                <?php
                // GutenKit の Image Comparison（Vライン脱毛スライダーA：ID=84）を挿入
                echo do_blocks('<!-- wp:block {"ref":84} /-->');
                ?>
            </li>
            <li>
                <?php
                // GutenKit の Image Comparison（Vライン脱毛スライダーB：ID=85）を挿入
                echo do_blocks('<!-- wp:block {"ref":85} /-->');
                ?>
            </li>
            <li>
                <?php
                // GutenKit の Image Comparison（Vライン脱毛スライダーC：ID=86）を挿入
                echo do_blocks('<!-- wp:block {"ref":86} /-->');
                ?>
            </li>
            <li>
                <?php
                // GutenKit の Image Comparison（Vライン脱毛スライダーD：ID=88）を挿入
                echo do_blocks('<!-- wp:block {"ref":88} /-->');
                ?>
            </li>
        </ul>

        <!-- 脚脱毛 -->
        <div class="price">
            <h3 class="section-title">脚(あし)脱毛</h3>
            <div class="usually">
                <h4 class="value">通常価格（1回）</h4>
                <h5 class="price-row">
                    <div class="price-item">
                        <span class="note">大部位</span>
                        (ひざ上・ひざ下) 各:8,000円
                    </div>
                    <div class="price-item">
                        <span class="note">小部位</span>
                        (足の甲・指) 各:2,500円
                    </div>
                </h5>
            </div>
            <div class="firsttime">
                <a href="https://repitte.jp/reserve/store?token=fa6dfce5cf7b9c72829b99689defec42" class="value-fs">
                    <h4 class="value">初回お試し価格</h4>
                    <h5 class="price-row">
                        <div class="price-item">
                            <span class="note">大部位</span>
                            (ひざ上・ひざ下) 各:4,000円
                        </div>
                        <div class="price-item">
                            <span class="note">小部位</span>
                            (足の甲・指) 各:1,000円
                        </div>
                    </h5>
                    <p class="ft-p">今なら2回目以降<br class="sp-onry">腕フルセット<span>(ひざ上・ひざ下・足の甲/指)</span><br class="sp-onry">18,500円を⇨14,000円でご案内!</p>
                    <p class="ft-a">ご予約はこちらをタップ</p>
                </a>
            </div>
        </div>
        <?php
        // GutenKit の Image Comparison（脚脱毛：ID=39）を挿入
        echo do_blocks('<!-- wp:block {"ref":39} /-->');
        ?>
    </section>

    <section id="content">
        <div class="qa">
            <!-- ボタン -->
            <h3 class="section-title">Q&A</h3>
            <div class="qa-btns">
                <section class="qa-btn">
                    <a href="#" class="btn" data-target="reservation">
                        <h3 class="article-title"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />ご予約について</h3>
                    </a>
                </section>

                <section class="qa-btn">
                    <a href="#" class="btn" data-target="counseling">
                        <h3 class="article-title"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />カウンセリングについて</h3>
                    </a>
                </section>

                <section class="qa-btn">
                    <a href="#" class="btn" data-target="mens-hair-removal">
                        <h3 class="article-title"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />メンズ脱毛について</h3>
                    </a>
                </section>
            </div>
            <!-- ご予約について -->
            <div class="modal-overlay"></div>
            <div class="modal-content reservation">
                <span class="modal-close">✕ 閉じる</span>
                <ul>
                    <li>
                        <h4>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />予約しなくてもカウンセリングは受けれますか？
                        </h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />当サロンは完全予約制となっております。当日予約も承っておりますので、お電話またはLINE簡単予約からご予約の上ご来店をお願いいたします。</p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />カウンセリングと脱毛を一緒にできますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />可能です!カウンセリング終了後、脱毛パッチテストをさせて頂きお肌に問題がなければ脱毛を受けて頂けます。</p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />希望通りに予約できますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />店舗の予約状況やコース内容により、ご希望通りのご予約を承れない場合もございます。効果的な脱毛を行うため、お客様の毛周期サイクルでのご予約をご案内しております。(ヒゲ：2～8週間・ボディ/VIO：4～8週間)
                        </p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />予約のキャンセル・変更はできますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />可能です!キャンセルや予約の変更をされる場合には、お早めにご連絡ください。</p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />次回の予約はどうすれば良いですか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />2回目以降の脱毛予約は、ご来店当日に次回のご予約をお聞きしております。予定がわからない場合はご帰宅後でも大丈夫です。
                        </p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />未成年ですが通えますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />可能です!親権者様に同意書をご記入いただいております。LINEを追加していただいた後、未成年の旨をお伝えください。同意書のPDFをお送りします。
                        </p>
                    </li>
                </ul>
            </div>

            <!-- カウンセリングについて -->
            <div class="modal-content counseling">
                <span class="modal-close">✕ 閉じる</span>
                <ul>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />カウンセリングだけでも受けられますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />可能です!カウンセリングのみのご来店も大歓迎です。お気軽にお問い合わせください。初めてで不安という方も、カウンセリング終了後に脱毛パッチテストを受けていただけます。脱毛がどのようなものなのかを実感していただけます。
                        </p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />カウンセリングはどのくらい時間がかかりますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />初回の方であれば、30分〜60分程度を予定しております。尚、当日に脱毛施術を受けられる場合はプラス30分〜最大120分程度お時間をいただいております。
                        </p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />カウンセリングで何をするのですか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />カウンセリングでは、お客様のご要望（脱毛したい部位・期間・予算）をお聞きしながら、脱毛の仕組みや脱毛トリートメントの流れ・料金等をご説明させていただきます。
                        </p>
                    </li>
                </ul>
            </div>
            <!-- メンズ脱毛について -->
            <div class="modal-content mens-hair-removal">
                <span class="modal-close">✕ 閉じる</span>
                <ul>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />どのくらいの回数を通えば良いですか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />お客様の目的や毛質・毛量により通っていただく回数は大きく異なります。脱毛部位によりますが、毛をある程度減らしたい方は約5〜6回以上・ツルツルにしたい方は、約10回以上を目安におすすめしております。
                        </p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />脱毛する部位によってかかる回数回数は違いますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />はい、その通りです。同じ方でも部位によって毛質・毛量が違うように部位が違えば、減り具合も違います。</p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />どれくらいのペースで通えば良いですか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />毛には毛周期があるため約2～8週間に1度のペースで脱毛トリートメントを行なっていきます。このペースが長すぎても短すぎても脱毛効果が弱くなってしまいます。スタッフがお客様に合ったペースをご案内させていただきます。
                        </p>
                    </li>

                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />その場で効果がわかりますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />その場での効果は実感いただけません。脱毛施術を受けられてから、お顔（ヒゲ）で約1週間〜10日、ボディは約2週間ほどで効果を見ていただけます。
                        </p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />一回で効果を実感できますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />はい、できます。ヒゲであれば翌日から毛の生えるスピードが少し遅くなったりします。</p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />ツルツルは恥ずかしいので減毛はできますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />可能です!カウンセリング時にスタッフにご相談ください。</p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />毛がかなり濃いのですがしっかり効果は出ますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />もちろんです!ただし、毛量の少ない方と比べると結果が出るまで回数と期間が必要になりますので、一度、お気軽にご相談ください。
                        </p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />痛みがあると聞いたのですが、実際はどうですか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />多少ございます。全く何も感じないというわけではありませんが、細かなレベル調整と施術部位を冷却しながらトリートメントを行うことで、ほとんど痛みを感じずに受けていただけます。
                        </p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />脱毛が完了したらずっと毛が生えてきませんか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />ほとんど生えてきませんが、脱毛を完了しても毛そのものがホルモンのバランスにより左右されるものですので、全く生えてこないというわけではありません。(※医療
                            レーザー脱毛でも同じことが言えます。)</p>
                    </li>
                    <li>
                        <h4><img src="<?php echo esc_url(get_template_directory_uri() . '/img/Q.png'); ?>"
                                class="post-thumb" />青ヒゲですが、解消できますか？</h4>
                        <p><img src="<?php echo esc_url(get_template_directory_uri() . '/img/A.png'); ?>"
                                class="post-thumb" />はい、お任せください。脱毛することで見た目の印象がかなり変わります！</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="contents">
            <div class="tell">
                <a href="<?php echo esc_url('https://page.line.me/727wwdmc?_gl=1*1snq6aa*_gcl_au*MTc0NTQ2OTMwOS4xNzUyMDY0NzQz*_ga*MTY1Nzk2Mzk2Ni4xNzUyMDY0NzQ0*_ga_0PV16Y9CZG*czE3NTI0NzMzNjQkbzgkZzAkdDE3NTI0NzMzNjQkajYwJGwwJGgw'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/line-header.png'); ?>"
                        class="post-thumb" />新しくLINE始めました!</a>
                <a href="tel:+81-90-2597-9189" class="num"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/tel.png'); ?>"
                        class="post-thumb" />お電話はこちらから!</a>
                <a href="<?php echo esc_url('https://www.instagram.com/yagi_takahiro_/'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/instagram.png'); ?>"
                        class="post-thumb" />Instagramはこちらから!</a>
                <a href="<?php echo esc_url('https://www.youtube.com/@datsumou_no_hito'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/youtube.png'); ?>"
                        class="post-thumb" />YouTubeはこちらから!
                </a>
            </div>
    </section>
    <section id="access">
        <h3 class="section-title">Access</h3>
        <div class="map">
            <iframe
                src="https://www.google.co.jp/maps/d/embed?mid=1h6CkNLk66VQ_w_zAIc4u7FphyABSXNs&ehbc=2E312F&noprof=1"></iframe>
        </div>
        <address>
            <p>〒601-8002 京都府京都市南区東九条上殿田町1-3 エンブレム京紋501号</p>
        </address>
        <div class="parking">
            <h3 class="section-title">サロンアクセス</h3>
            <div class="salon">
                <a href="<?php echo esc_url('https://www.google.com/maps/dir/?api=1&destination=京都府京都市南区東九条上殿田町1%20ＥＭＢＬＥＭＫＹＯＭＯＮ%20501%20メンズ脱毛%20salon%20and.%20(アンドット)&travelmode=working'); ?>"
                    target="_blank">
                    <button>店舗へのナビ</button>
                </a>
            </div>
            <h3 class="section-title">近隣駐車場</h3>
            <a href="<?php echo esc_url('https://www.google.com/maps/dir/?api=1&destination=〒601-8003%20京都府京都市南区東九条西山王町5%20デュアルコート八条口&travelmode=driving'); ?>"
                target="_blank">
                <button>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/map-a.png'); ?>"
                        class="post-thumb" />BooBooPark八条口南<br>第2コインパーキングへナビ</button>
            </a>
            <a href="<?php echo esc_url('https://www.google.com/maps/dir/?api=1&destination=〒601-8017%20京都府京都市南区東九条北烏丸町8-25&travelmode=driving'); ?>"
                target="_blank">
                <button> <img src="<?php echo esc_url(get_template_directory_uri() . '/img/map-b.png'); ?>"
                        class="post-thumb" />コンセプト烏丸東寺道パーキングへナビ</button>
            </a>
            <a href="<?php echo esc_url('https://www.google.com/maps/dir/?api=1&destination=烏丸東寺道西パーキング&travelmode=driving'); ?>"
                target="_blank">
                <button> <img src="<?php echo esc_url(get_template_directory_uri() . '/img/map-c.png'); ?>"
                        class="post-thumb" />烏丸東寺道西パーキングへナビ</button>
            </a>
            <a href="<?php echo esc_url('https://www.google.com/maps/dir/?api=1&destination=京都府京都市南区東九条中殿田町Pork24中殿田町&travelmode=driving'); ?>"
                target="_blank">
                <button> <img src="<?php echo esc_url(get_template_directory_uri() . '/img/map-d.png'); ?>"
                        class="post-thumb" />Pork24中殿田町パーキングへナビ</button>
            </a>
        </div>
        <h3 class="section-title">徒歩アクセス</h3>
        <div class="place">
            <!-- 徒歩ルートの動画差し込み予定 -->
        </div>
        <div class="foot">
            <div class="time">
                <h3 class="section-title">営業時間・ご予約</h3>
                <a href="tel:+81-90-2597-9189">
                    <p>TEL:090-2597-9189</p>
                </a>
                <p>営業時間:9:00〜21:00（年中無休）</p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>