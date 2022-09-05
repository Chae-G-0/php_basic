<? include 'head.sub.php'; ?>

<main>
            <section class="MainVisual">
                <div class="mainSlide">
                    <figure class="item01"></figure>
                    <figure class="item02"></figure>
                    <figure class="item01"></figure>
                    <figure class="item02"></figure>
                </div>
                <div class="slogan">
                    <h2><?=$c_slogan?></h2>
                    <p><?=$e_slogan?></p>
                </div>
            </section>
            <section class="customer">
                <ul class="container">
                    <li>
                        <div class="list">
                            <h3>news &amp; notice <small><a href=""><i class="xi-arrow-right"></i></a></small></h3>
                            <ul>
                                <li>
                                    <a href="">아기 상어 뚜루루뚜루<span>2022.12.25</span></a>
                                </li>
                                <li>
                                    <a href="">아기 상어 뚜루루뚜루<span>2022.12.25</span></a>
                                </li>
                                <li>
                                    <a href="">아기 상어 뚜루루뚜루<span>2022.12.25</span></a>
                                </li>
                                <li>
                                    <a href="">아기 상어 뚜루루뚜루<span>2022.12.25</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="slider">
                        <div class="productSlider">
                            <figure>
                                <img src="./img/product01.jpg" alt="">
                            </figure>
                            <figure>
                                <img src="./img/product02.jpg" alt="">
                            </figure>
                            <figure>
                                <img src="./img/product03.jpg" alt="">
                            </figure>
                        </div>
                        <div class="productArrows">
                            <i class="xi-arrow-left"></i>
                            <i class="xi-arrow-right"></i>
                        </div>
                        </div>
                        
                    </li>
                    <li>
                        <? include 'customer.php' ?>
                    </li>
                </ul>
            </section>
        </main>

        <? include 'tail.sub.php'; ?>