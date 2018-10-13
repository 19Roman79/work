<?php

    require_once 'header.php';
?>

<article>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Все, что вам нужно знать о биткойне.</h5>
                        <p>Биткойн - это цифровая валюта, которая используется во всем мире с момента ее создания в 2009 году.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Итак, вы хотите купить биткойны. </h5>
                        <p>Покупайте сегодня. Следите за курсом. Продавайте завтра.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Выводите деньги на свою карту. </h5>
                        <p>Продавайте биткойны и получайте доход на свою карту. </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <?php
$news = [
        0 => [
                'description' => "Программисты, работающие над блокчейном Эфириума, рассказали, что подготовка к запланированному на ноябрь масштабному
                            обновлению Constantinople идет строго по плану. В ходе очередной плановой онлайн-конференции было отмечено, что код
                            апгрейда уже интегрирован во всех крупных клиентах Эфириума, в том числе в приложениях, разрабатываемых Ethereum Foundation и Parity.",
                'url' => "https://bits.media/razrabotchiki-ethereum-gotovyatsya-k-noyabrskomu-apgreydu-constantinople/"
        ],
        1 => [
            'description' => "Специализирующаяся на акциях высокотехнологичных компаний американская биржа Nasdaq планирует заняться разработкой платформы
                                для security-токенов. Об этом сообщает The Block, ссылаясь на источник, знакомый с ситуацией. Предполагается, что весь процесс выпуска
                                security-токенов будет соответствовать требованиям американских регуляторов.",
            'url' => "https://bits.media/nasdaq-planiruet-zanyatsya-razrabotkoy-platformy-dlya-tokenov-aktsiy/"
        ],
        2 => [
            'description' => "Криптовалютная биржа Gemini братьев Уинклвосс в ближайшее время начнет поддерживать депозиты и торговлю Litecoin (LTC).
                                Монета составит компанию биткоину, эфиру и Zcash, уже доступным на площадке для трейдинга.",
            'url' => "https://bits.media/kriptovalyutnaya-birzha-gemini-zapuskaet-torgovye-pary-s-litecoin/"
        ]
];
            ?>

            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                        <?php
                        echo substr($news[0]['description'],0,500) ."...";
                        ?>
                            <a href=<?php
                            echo $news[0]['url'];
                            ?>>Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                echo substr($news[1]['description'],0,500) ."...";
                                ?>
                                <a href=<?php
                                echo $news[1]['url'];
                                ?>>Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                echo substr($news[2]['description'],0,500) ."...";
                                ?>
                                <a href=<?php
                                echo $news[2]['url'];
                                ?>>Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<?php

require_once 'footer.php';
?>