

                            <p>
                                <a target="_blank"
                                    href="./links/slilin.php<?php echo "?" . $query2; ?>"
                                    target="_blank">
                                    <span class="f-13">スリリンW</span>
                                </a>
                            </p>　
                        </th>
                    </tr>

                    <tr>
                        <td class="r-img">

                            <a target="_blank"
                                href="./links/slilin.php<?php echo "?" . $query2; ?>"
                                target="_blank">
                                <img src="./img/slilin.jpg" alt="" />
                            </a>

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <ul class="r-list">

                                <li><span class="red">今回限り初回特別価格500円（税込）・送料無料</span>で食べたことをなかったコトに！</li>
                                <li>ターミナリアベリリカ由来没食子酸が<span class="bold">糖や脂肪の吸収を抑える</span></li>
                                <li><span class="bold">乳酸菌や活性炭</span>も同時に摂ることが出来る</li>
                                <li><span class="bold">機能性表示食品</span></li>

                            </ul>

                        </td>

                    </tr>

                </tbody>
            </table>



            <div class="r-txtbox">

            <p>
                「スリリンダブル」には、<span class="red">臨床試験で脂肪と吸収と糖の吸収を抑える</span>ことが確認されている、
                <span class="bold">ターミナリアベリリカ由来没食子酸</span>が配合。 
                また、１日当たり<span class="bold">１億個の乳酸菌</span>と、<span class="bold">活性炭</span>も含まれており、
                体の内側からスッキリを体の内側からスッキリを目指します。 
                <span class="red">初回価格が500円</span>で、しかも<span class="bold">定期購入回数に縛りもなく、
                120日間の全額返金保証</span>もついており、とても気軽に試しやすいのがとっても魅力的なところ。  
            </p>

                <a target="_blank"
                    href="./links/slilin.php<?php echo "?" . $query2; ?>"
                    target="_blank">
                    <p class="link_txt">
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    </p>                
                </a>

            </div>

            <table class="r-r-table" cellspacing="1">
                <tbody>
                    <tr>
                        <th>価格</th>
                        <th>容量</th>
                        <th>ユーザー評価</th>
                    </tr>
                    <tr>
                        <td>定期初回500円 (税込) 定期 7,980円(税込)</td>
                        <td>28粒（1袋）</td>
                        <td>
                        <?php if($_GET['pat'] == "c" || $_GET['pat'] == "d") : ?>
                            <img alt="" src="./img/review_45.gif" />
                        <?php elseif ($_SERVER['REQUEST_URI']=="/index_a-test.php") : ?>
                            <img alt="" src="./img/review_3.gif" />
                        <?php else : ?>
                            <img alt="" src="./img/review_35.gif" />
                        <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>サプリの種類</th>
                        <th>
                            配合成分
                        </th>
                        <th>
                        <?php if ($_GET['pat'] == "l") : ?>
                        <?php else : ?>
                            1日あたりの価格
                        <?php endif; ?>
                        </th>
                    </tr>
                    <tr>
                        <td>機能性表示食品</td>
                        <td>ターミナリアベリリカ由来没食子酸</td>
                        <td>
                        <?php if ($_GET['pat'] == "l") : ?>
                        <?php else : ?>
                            89円
                        <?php endif; ?>
                        </td>
                    </tr>

                </tbody>
            </table>



            <div class="img-btn">
                <a target="_blank"
                    href="./links/slilin.php<?php echo "?" . $query2; ?>"
                    target="_blank">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
            </div>