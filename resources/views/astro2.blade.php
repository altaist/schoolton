<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Генератор натальных карт">
    <meta name="author" content="ThemesLay">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dist/images/favicon.png">

    <!-- main CSS -->
    <link href="dist/css/main.css" rel="stylesheet">
    <title>Создать натальную карту</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
</head>

<body>
    <!-- light dark theme switch -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>
    <!-- preloader section -->
    <div class="page-loader">
        <div class="spinner"></div>
    </div>
    <!-- page wrapper section -->
    <div id="wrapper"></div>
    <!-- preloader section -->

    <!-- Body Part - hero section -->
    <section class="hero">
        <div class="container position-relative z-2 my-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <!--p class="mb-3 theme-text-accent-two">Центр астрологических исследований АстроПульс</p-->
                    <h1 class="display-2 fw-bold mt-3 mb-3 theme-text-white animate-charcter">Удобный и быстрый сервис заказа натальных карт
                    </h1>
                    <p class="mb-5 theme-text-accent-two text-h4"> Нам доверяют. Более 1000 выполненных исследований!</p>
                    <div class="group">
                        <button class="rounded-pill btn btn-lg custom-btn-primary  primary-btn-effect" onClick="window.location='/astro-order'">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="hero-wrap">
                        <div class="hero-inner">
                            <img src="dist/images/hero/sign-picture.png" class="img-fluid box-icon-float" alt="hero main image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- about company section -->
    <section class="about-company" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="py-2 px-5 mt-5 mt-lg-0">
                        <h4 class="h1 fw-bold mb-4 theme-text-dark max">Познай себя</h4>
                        <p class="mb-5 mt-3 theme-text-accent-three lh-lg">Результат исследования содержит индивидуальные инсайты и множество направлений - от личной жизни до профессионального
                            роста.
                        </p>
                        <div class="row">
                            <div class="col-12 col-lg-2">
                                <span class="px-3 py-3 rounded-circle theme-box-shadow h4 fw-bold d-inline-flex">
                                    <i class="bi bi-check2-circle display-6 lh-1"></i>
                                </span>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="ps-4">
                                    <p class="fw-bold">Почему клиенты доверяют нам</p>
                                    <p class="theme-text-accent-three mt-4 mb-0 pe-5">Мы создаем математически обоснованные прогнозы, основываясь на лучших практиках и экспертном опыте</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 col-lg-2">
                                <span class="px-3 py-3 rounded-circle theme-box-shadow h4 fw-bold d-inline-flex">
                                    <i class="bi bi-check2-circle display-6 lh-1"></i>
                                </span>
                            </div>
                            <div class="col-12 col-lg-10">
                                <div class="ps-4">
                                    <p class="fw-bold">Почему мы занимаемся этим?</p>
                                    <p class="theme-text-accent-three mt-4 mb-0 pe-5">Наша миссия - помогать людям открывать свой потенциал и находить новые точки роста</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="about-pic">
                        <figure class="mb-0">
                            <img src="dist/images/section/about-pic.png" class="img-fluid" alt="about company">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- key features section -->
    <section class="features" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <h2 class="h1 fw-bold mb-4 theme-text-accent-one">Факты и цифры</h2>
                    <p class="mb-0 theme-text-accent-two max-2">Присоединяйтесь к нашему активному сообществу!</p>
                </div>
            </div>
            <div class="row mt-8" id="counter">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0 text-center">
                    <div class="key-bg">
                        <div class="mb-4 icon-key">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                                <g id="key-astrologers" transform="translate(-5 -5)">
                                    <path id="Path_842" data-name="Path 842"
                                        d="M35,5A30,30,0,1,0,65,35,29.96,29.96,0,0,0,35,5ZM20.4,22.4l.733-1.867.733,1.867,2,.133L22.333,23.8l.467,1.933-1.667-1.067-1.667,1.067.467-1.933L18.4,22.533Zm2.133,27.067L20.867,48.4,19.2,49.467l.467-1.933-1.467-1.2,1.933-.133.733-1.8.733,1.8,1.933.133L22,47.6ZM36,49.4a13.467,13.467,0,1,1,6.533-25.267,12.941,12.941,0,0,0,1,23A13.215,13.215,0,0,1,36,49.4Zm13.667-12-3.333-2.133-3.4,2.133,1-3.867L40.867,31l4-.267L46.333,27,47.8,30.733l4,.267-3.067,2.533Z"
                                        transform="translate(0 0)" fill="#000000" />
                                </g>
                            </svg>
                        </div>
                        <span class="d-inline-block display-4 fw-bold theme-text-white counter-value" data-count="7">0</span>
                        <span class="d-inline-block display-4 fw-bold theme-text-white ">+</span>
                    </div>
                    <span class="d-block fw-bold theme-text-accent-one fs-4">Направлений исследований</span>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0 text-center">
                    <div class="key-bg">
                        <div class="mb-4 icon-key">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60.003" height="60.003" viewBox="0 0 60.003 60.003">
                                <g id="key-customers" transform="translate(-1.994 -2)">
                                    <path id="Path_844" data-name="Path 844"
                                        d="M51.16,22.61,49,18l-2.16,4.61L42,23.35l3.5,3.58L44.67,32,49,29.61,53.33,32l-.83-5.07L56,23.35Z"
                                        fill="#f61212" />
                                    <path id="Path_845" data-name="Path 845"
                                        d="M15,18l-2.16,4.61L8,23.35l3.5,3.58L10.67,32,15,29.61,19.33,32l-.83-5.07L22,23.35l-4.84-.74Z"
                                        fill="#f61212" />
                                    <path id="Path_846" data-name="Path 846"
                                        d="M32,6l-3.71,7.9L20,15.17l6,6.15L24.58,30,32,25.9,39.42,30,38,21.32l6-6.15L35.71,13.9Z"
                                        fill="#f61212" />
                                    <path id="Path_847" data-name="Path 847"
                                        d="M32,2A30,30,0,0,0,12.85,8.9l1.28,1.54A28,28,0,0,1,53.41,50a8,8,0,0,0-5.19-4.68,4,4,0,1,0-4.45,0,8,8,0,0,0-4.83,3.91,12,12,0,0,1,4.94,8.12q-.95.43-1.92.81a10,10,0,0,0-7.48-8.84,5,5,0,1,0-5,0A10,10,0,0,0,22,58.16c-.65-.24-1.29-.52-1.91-.81a12,12,0,0,1,4.19-7.56,8,8,0,0,0-5.09-4.47,4,4,0,1,0-4.46,0A8,8,0,0,0,10,49.22a28,28,0,0,1,1.39-36.13L9.86,11.75A30,30,0,1,0,32,2Z"
                                        fill="#f61212" />
                                </g>
                            </svg>
                        </div>
                        <span class="d-inline-block display-4 fw-bold theme-text-white counter-value" data-count="8000">7900</span>
                        <span class="d-inline-block display-4 fw-bold theme-text-white ">+</span>
                    </div>
                    <span class="d-block fw-bold theme-text-accent-one fs-4">Пользователей сервисов</span>
                </div>
                <!-- repetable -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0 text-center">
                    <div class="key-bg">
                        <div class="mb-4 icon-key">
                            <svg id="key-horoscope" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                                <path id="Path_848" data-name="Path 848"
                                    d="M28.862,10.47V0a30.384,30.384,0,0,0-8.506,1.51l.027.082h3.243A1.046,1.046,0,0,1,24.3,3.438L21.6,5.723l1.031,3.338A1.047,1.047,0,0,1,20.992,10.2l-2.6-1.985-2.6,1.985a1.047,1.047,0,0,1-1.636-1.141l1.031-3.338L13.825,4.573A30.617,30.617,0,0,0,9.194,8.115l7.43,7.43A19.788,19.788,0,0,1,28.862,10.47Z"
                                    transform="translate(0.272)" fill="#f61212" />
                                <path id="Path_849" data-name="Path 849"
                                    d="M3.085,19.579l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H5.32a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H1.712l1.048.886A1.05,1.05,0,0,1,3.085,19.579Z"
                                    transform="translate(0.081 0.569)" fill="#f61212" />
                                <path id="Path_850" data-name="Path 850"
                                    d="M15.576,16.6,8.148,9.167a30.147,30.147,0,0,0-2.961,3.714l.971,2.938H9.4a1.046,1.046,0,0,1,.675,1.846L7.37,19.951,8.4,23.289a1.047,1.047,0,0,1-1.636,1.141l-2.6-1.985-2.6,1.985a1.039,1.039,0,0,1-1.113.085A30.412,30.412,0,0,0,0,28.834H10.5A19.788,19.788,0,0,1,15.576,16.6Z"
                                    transform="translate(0 0.282)" fill="#f61212" />
                                <path id="Path_851" data-name="Path 851"
                                    d="M5.352,42.449l-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H5.32a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H1.712l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0Z"
                                    transform="translate(0.081 1.344)" fill="#f61212" />
                                <path id="Path_852" data-name="Path 852"
                                    d="M18.326,52.867l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H15.713l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H19.322A1.05,1.05,0,0,1,18.326,52.867Z"
                                    transform="translate(0.539 1.818)" fill="#f61212" />
                                <path id="Path_853" data-name="Path 853"
                                    d="M51.712,17.585l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H55.321a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719Z"
                                    transform="translate(1.751 0.569)" fill="#f61212" />
                                <path id="Path_854" data-name="Path 854"
                                    d="M48.155,28.834h10.5a30.4,30.4,0,0,0-.451-4.317,1,1,0,0,1-1.113-.086l-2.6-1.985-2.6,1.985a1.047,1.047,0,0,1-1.636-1.141l1.031-3.338-2.706-2.286a1.046,1.046,0,0,1,.675-1.846H52.5l.971-2.938a30.246,30.246,0,0,0-2.961-3.714L43.081,16.6A19.792,19.792,0,0,1,48.155,28.834Z"
                                    transform="translate(1.344 0.282)" fill="#f61212" />
                                <path id="Path_855" data-name="Path 855"
                                    d="M9.19,50.484a30.073,30.073,0,0,0,2.928,2.4,1.021,1.021,0,0,1,1.038-.962H16.4l1-3.021a1.047,1.047,0,0,1,1.99,0l1,3.021h3.243a1.046,1.046,0,0,1,.675,1.846L21.6,56.051l.484,1.565a30.408,30.408,0,0,0,6.782.994V48.126A19.783,19.783,0,0,1,16.623,43.05Z"
                                    transform="translate(0.272 1.39)" fill="#f61212" />
                                <path id="Path_856" data-name="Path 856"
                                    d="M17.085,5.579l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H19.32a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H15.713l1.048.886A1.051,1.051,0,0,1,17.085,5.579Z"
                                    transform="translate(0.539 0.101)" fill="#f61212" />
                                <path id="Path_857" data-name="Path 857"
                                    d="M38.76,4.471a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H41.321a1.048,1.048,0,0,1-.995-.719l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H37.714Z"
                                    transform="translate(1.293 0.101)" fill="#f61212" />
                                <path id="Path_858" data-name="Path 858"
                                    d="M49.646,8.116a30.549,30.549,0,0,0-4.631-3.542L43.652,5.725l1.031,3.338A1.047,1.047,0,0,1,43.048,10.2l-2.6-1.985-2.6,1.985a1.047,1.047,0,0,1-1.636-1.141l1.031-3.338L34.538,3.439a1.046,1.046,0,0,1,.675-1.846h3.243l.026-.083A30.377,30.377,0,0,0,29.977,0V10.47a19.783,19.783,0,0,1,12.239,5.076Z"
                                    transform="translate(0.888)" fill="#f61212" />
                                <path id="Path_859" data-name="Path 859"
                                    d="M10.5,29.949H.018a30.3,30.3,0,0,0,1.328,7.928h.826l1-3.021a1.047,1.047,0,0,1,1.99,0l1,3.021H9.4a1.046,1.046,0,0,1,.675,1.846L7.369,42.009,8.4,45.347a1.047,1.047,0,0,1-1.636,1.141l-2.332-1.78a30.479,30.479,0,0,0,3.712,4.91l7.429-7.429A19.8,19.8,0,0,1,10.5,29.949Z"
                                    transform="translate(0.001 0.922)" fill="#f61212" />
                                <path id="Path_860" data-name="Path 860"
                                    d="M36.354,29.264a7.342,7.342,0,0,0-5.131-6.992,5.464,5.464,0,0,1-.666,6.939L28.972,30.8a3.369,3.369,0,0,0-.995,2.4,3.41,3.41,0,0,0,2.466,3.254A7.34,7.34,0,0,0,36.354,29.264ZM30.071,32.4a1.047,1.047,0,1,1,1.047,1.047A1.047,1.047,0,0,1,30.071,32.4Z"
                                    transform="translate(0.934 0.729)" fill="#f61212" />
                                <path id="Path_861" data-name="Path 861"
                                    d="M40.326,52.867l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H37.713l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H41.322A1.05,1.05,0,0,1,40.326,52.867Z"
                                    transform="translate(1.293 1.818)" fill="#f61212" />
                                <path id="Path_862" data-name="Path 862"
                                    d="M42.109,29.473l-2.82-2.82.937-3.748-3.782-.946L35.5,18.179l-3.622.9-1.9-1.266v2.294a9.42,9.42,0,0,1,0,18.724v2.294l1.9-1.266,3.622.9.946-3.781,3.782-.946L39.289,32.3Z"
                                    transform="translate(0.969 0.52)" fill="#f61212" />
                                <path id="Path_863" data-name="Path 863"
                                    d="M29.977,48.126V58.61a30.4,30.4,0,0,0,6.782-.994l.484-1.565-2.706-2.286a1.046,1.046,0,0,1,.675-1.846h3.243l1-3.021a1.047,1.047,0,0,1,1.99,0l1,3.021h3.243a1.048,1.048,0,0,1,.983.687,1.012,1.012,0,0,1,.054.275,30.226,30.226,0,0,0,2.928-2.4L42.215,43.05A19.777,19.777,0,0,1,29.977,48.126Z"
                                    transform="translate(0.888 1.39)" fill="#f61212" />
                                <path id="Path_864" data-name="Path 864"
                                    d="M54.326,38.867l-.241-.731-.241.731a1.049,1.049,0,0,1-.995.719H51.713l1.048.886a1.047,1.047,0,0,1,.326,1.109l-.269.87.632-.484a1.048,1.048,0,0,1,1.271,0l.632.484-.269-.87a1.047,1.047,0,0,1,.326-1.109l1.048-.886H55.322A1.05,1.05,0,0,1,54.326,38.867Z"
                                    transform="translate(1.751 1.344)" fill="#f61212" />
                                <path id="Path_865" data-name="Path 865"
                                    d="M43.08,42.188l7.429,7.429a30.372,30.372,0,0,0,3.712-4.91l-2.332,1.78a1.047,1.047,0,0,1-1.636-1.141l1.031-3.338-2.706-2.286a1.046,1.046,0,0,1,.675-1.846H52.5l1-3.021a1.047,1.047,0,0,1,1.99,0l1,3.021h.826a30.215,30.215,0,0,0,1.328-7.928H48.155A19.79,19.79,0,0,1,43.08,42.188Z"
                                    transform="translate(1.344 0.922)" fill="#f61212" />
                                <path id="Path_866" data-name="Path 866"
                                    d="M46.894,29.431A17.458,17.458,0,1,0,29.435,46.913,17.49,17.49,0,0,0,46.894,29.431ZM25.31,16.716a1.028,1.028,0,1,1-.659,1.3A1.038,1.038,0,0,1,25.31,16.716Zm-6.675,4.857a1.028,1.028,0,1,1,.227,1.437A1.027,1.027,0,0,1,18.635,21.573Zm-1.523,8.886a1.028,1.028,0,1,1,1.027-1.028A1.028,1.028,0,0,1,17.112,30.459Zm2.9587.056a1.028,1.028,0,1,1,.227-1.437A1.02,1.02,0,0,1,20.069,37.516ZM26.6,41.484a1.027,1.027,0,1,1-.977-1.346,1.028,1.028,0,0,1,.977,1.346Zm10.768,1.534L32.708,41.85l-4.3,2.87V38.625a9.253,9.253,0,0,1,0-18.389V14.141l4.3,2.87,4.663-1.168L38.5,20.357,43,21.485,41.87,26.031l3.4,3.4-3.4,3.4L43,37.379,38.5,38.507Z"
                                    transform="translate(0.564 0.563)" fill="#f61212" />
                                <path id="Path_867" data-name="Path 867"
                                    d="M30.354,25.337a3.41,3.41,0,0,0-2.466-3.254,7.328,7.328,0,0,0-.78,14.181,5.464,5.464,0,0,1,.666-6.939l1.585-1.586A3.365,3.365,0,0,0,30.354,25.337Zm-3.141,1.841a1.047,1.047,0,1,1,1.047-1.047A1.047,1.047,0,0,1,27.213,27.178Z"
                                    transform="translate(0.734 0.723)" fill="#f61212" />
                            </svg>

                        </div>
                        <span class="d-inline-block display-4 fw-bold theme-text-white counter-value" data-count="1000">900</span>
                        <span class="d-inline-block display-4 fw-bold theme-text-white ">+</span>
                    </div>
                    <span class="d-block fw-bold theme-text-accent-one fs-4">Выполненных исследований</span>
                </div>
                <!-- repetable -->
            </div>
        </div>
    </section>

    <!-- how it work section -->
    <section class="how-it-work" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <p class="mb-4 theme-text-primary">4 простых шага</p>
                    <h2 class="h1 fw-bold mb-4 theme-text-dark">Как создать карту</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="box">
                        <span class="px-2 py-2 rounded-circle theme-bg-secondary h4 fw-bold d-inline-flex point">01</span>
                        <span class="ms-2 fw-bold theme-text-dark">Информация</span>
                        <p class="theme-text-accent-three mt-4 mb-0 pe-5">Введите свои контакты, имя, дату, время и город рождения человека, для которого создается карта</p>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="box">
                        <span class="px-2 py-2 rounded-circle theme-bg-secondary h4 fw-bold d-inline-flex point">02</span>
                        <span class="ms-2 fw-bold theme-text-dark">Оплата</span>
                        <p class="theme-text-accent-three mt-4 mb-0 pe-5">Оплатите любым удобным для вас способом</p>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="box">
                        <span class="px-2 py-2 rounded-circle theme-bg-secondary h4 fw-bold d-inline-flex point">03</span>
                        <span class="ms-2 fw-bold theme-text-dark">Ожидание</span>
                        <p class="theme-text-accent-three mt-4 mb-0 pe-5">Подготовка карты занимает в среднем 3-4 часа, гарантировано пришлем результат в течение суток</p>
                    </div>
                </div>
                <!-- repetable -->
                <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="box">
                        <span class="px-2 py-2 rounded-circle theme-bg-secondary h4 fw-bold d-inline-flex point">04</span>
                        <span class="ms-2 fw-bold theme-text-dark">Результаты</span>
                        <p class="theme-text-accent-three mt-4 mb-0 pe-5">Мы вышлем карту в формате PDF на почту, указанную при регистрации</p>
                    </div>
                </div>
                <!-- repetable -->
            </div>
        </div>
    </section>
    <!-- testimonials section -->
    <section class="review" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <p class="mb-4 theme-text-primary">Отзывы</p>
                    <h4 class="h1 fw-bold mb-4">Отзывы наших клиентов</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5">
                    <!-- testimonials Slider-->
                    <div class="owl-carousel owl-theme" id="carouselTestimonials">

                        <div class="item">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="review-pic">
                                        <div class="qotes-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="34" viewBox="0 0 70 54">
                                                <path class="qotes-icon"
                                                    d="M40.939,66.709q-4.723-4.983-4.721-13.79,0-19.175,25.429-35.219l1.734,2.734Q45.462,32.371,45.465,44.305c0,.1.015.174.015.266A14.6,14.6,0,0,1,59.271,41.4,14.881,14.881,0,0,1,69.364,51.461,15.177,15.177,0,0,1,66.5,65.526c-.176.234-.407.448-.6.673-.093.1-.177.2-.272.295a14.087,14.087,0,0,1-1.1,1.193Q60.106,71.7,52.88,71.7a15.716,15.716,0,0,1-11.94-4.991Zm-36.215,0Q0,61.723.005,52.915q0-19.169,25.427-35.215l1.736,2.736C15.47,28.232,9.541,36.023,9.3,43.812A14.566,14.566,0,0,1,29.96,46.762a15.122,15.122,0,0,1,2.785,11.121c0,.046.007.077.007.119a12.6,12.6,0,0,1-4.431,9.682Q23.891,71.7,16.667,71.7A15.736,15.736,0,0,1,4.724,66.707Z"
                                                    transform="translate(-0.005 -17.7)" fill="rgba(135,138,155,0.3)" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="review-con">
                                        <span class="d-flex justify-content-center text-warning mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                        </span>
                                        <div class="mt-3"><span class="h5 fw-bold">Светлана</span>

                                        </div>
                                        <p class="font-small mb-0 mt-4 theme-text-accent-three lh-lg">Нормальный сервис. Генерация натальной карты заняла всего пару часов, и информация оказалась вполне точной. Рекомендую всем, кто интересуется астрологией.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- repetable -->
                        <div class="item">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="review-pic">
                                        <div class="qotes-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="34" viewBox="0 0 70 54">
                                                <path class="qotes-icon"
                                                    d="M40.939,66.709q-4.723-4.983-4.721-13.79,0-19.175,25.429-35.219l1.734,2.734Q45.462,32.371,45.465,44.305c0,.1.015.174.015.266A14.6,14.6,0,0,1,59.271,41.4,14.881,14.881,0,0,1,69.364,51.461,15.177,15.177,0,0,1,66.5,65.526c-.176.234-.407.448-.6.673-.093.1-.177.2-.272.295a14.087,14.087,0,0,1-1.1,1.193Q60.106,71.7,52.88,71.7a15.716,15.716,0,0,1-11.94-4.991Zm-36.215,0Q0,61.723.005,52.915q0-19.169,25.427-35.215l1.736,2.736C15.47,28.232,9.541,36.023,9.3,43.812A14.566,14.566,0,0,1,29.96,46.762a15.122,15.122,0,0,1,2.785,11.121c0,.046.007.077.007.119a12.6,12.6,0,0,1-4.431,9.682Q23.891,71.7,16.667,71.7A15.736,15.736,0,0,1,4.724,66.707Z"
                                                    transform="translate(-0.005 -17.7)" fill="rgba(135,138,155,0.3)" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="review-con">
                                        <span class="d-flex justify-content-center text-warning mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                        <div class="mt-3"><span class="h5 fw-bold">Юлия</span>
                                        </div>
                                        <p class="font-small mb-0 mt-4 theme-text-accent-three lh-lg">Очень удобный интерфейс и понятные объяснения. Получила много интересных инсайтов о своей личности. Буду пользоваться еще!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="review-pic">
                                        <div class="qotes-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="34" viewBox="0 0 70 54">
                                                <path class="qotes-icon"
                                                    d="M40.939,66.709q-4.723-4.983-4.721-13.79,0-19.175,25.429-35.219l1.734,2.734Q45.462,32.371,45.465,44.305c0,.1.015.174.015.266A14.6,14.6,0,0,1,59.271,41.4,14.881,14.881,0,0,1,69.364,51.461,15.177,15.177,0,0,1,66.5,65.526c-.176.234-.407.448-.6.673-.093.1-.177.2-.272.295a14.087,14.087,0,0,1-1.1,1.193Q60.106,71.7,52.88,71.7a15.716,15.716,0,0,1-11.94-4.991Zm-36.215,0Q0,61.723.005,52.915q0-19.169,25.427-35.215l1.736,2.736C15.47,28.232,9.541,36.023,9.3,43.812A14.566,14.566,0,0,1,29.96,46.762a15.122,15.122,0,0,1,2.785,11.121c0,.046.007.077.007.119a12.6,12.6,0,0,1-4.431,9.682Q23.891,71.7,16.667,71.7A15.736,15.736,0,0,1,4.724,66.707Z"
                                                    transform="translate(-0.005 -17.7)" fill="rgba(135,138,155,0.3)" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="review-con">
                                        <span class="d-flex justify-content-center text-warning mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                        <div class="mt-3"><span class="h5 fw-bold">Игорь</span>
                                        </div>
                                        <p class="font-small mb-0 mt-4 theme-text-accent-three lh-lg">Приятно удивлен точностью и глубиной анализа. Сервис прост в использовании и дает много полезной информации. Рекомендую всем!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="review-pic">
                                        <div class="qotes-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="34" viewBox="0 0 70 54">
                                                <path class="qotes-icon"
                                                    d="M40.939,66.709q-4.723-4.983-4.721-13.79,0-19.175,25.429-35.219l1.734,2.734Q45.462,32.371,45.465,44.305c0,.1.015.174.015.266A14.6,14.6,0,0,1,59.271,41.4,14.881,14.881,0,0,1,69.364,51.461,15.177,15.177,0,0,1,66.5,65.526c-.176.234-.407.448-.6.673-.093.1-.177.2-.272.295a14.087,14.087,0,0,1-1.1,1.193Q60.106,71.7,52.88,71.7a15.716,15.716,0,0,1-11.94-4.991Zm-36.215,0Q0,61.723.005,52.915q0-19.169,25.427-35.215l1.736,2.736C15.47,28.232,9.541,36.023,9.3,43.812A14.566,14.566,0,0,1,29.96,46.762a15.122,15.122,0,0,1,2.785,11.121c0,.046.007.077.007.119a12.6,12.6,0,0,1-4.431,9.682Q23.891,71.7,16.667,71.7A15.736,15.736,0,0,1,4.724,66.707Z"
                                                    transform="translate(-0.005 -17.7)" fill="rgba(135,138,155,0.3)" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="review-con">
                                        <span class="d-flex justify-content-center text-warning mb-2">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                        <div class="mt-3"><span class="h5 fw-bold">Ирина</span>
                                        </div>
                                        <p class="font-small mb-0 mt-4 theme-text-accent-three lh-lg">Натальная карта оказалась очень подробной и точной. Спасибо за качественную работу!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- call to action -->
    <section class="call-to-action py-5 py-lg-0" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 offset-lg-1 d-flex justify-content-center">
                    <img src="dist/images/section/call-to-action.png" class="img-fluid" alt="call to action">
                </div>
                <div class="col-12 col-lg-7">
                    <div class="action-bg text-center text-lg-start">
                        <h4 class="h1 fw-bold mb-4 theme-text-accent-one">Попробуйте прямо сейчас!</h4>
                        <p class="h5 fw-bold theme-text-accent-two mb-0"></p>
                        <div class="group mt-5">
                            <button class="rounded-pill btn custom-btn-primary btn-lg primary-btn-effect pa-3" onClick="window.location='/astro-order'">Заказать натальную карту</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- download our aap section -->
    <section class="download-aap py-5" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <p class="mb-3 theme-text-white">Астропрогнозы прямо в телеграмм</p>
                    <h4 class="h1 fw-bold mb-5 mb-lg-0 theme-text-accent-one">Подключи ежедневные прогнозы</h4>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0)"
                            class="d-inline-flex align-items-center theme-bg-white px-4 py-2 theme-border-radius">
                            <div class="flex-grow-1 ms-2 font-extra-small">
                                <span class="mb-0 theme-text-accent-three">Телеграмм Бот</span>
                                <span class="mb-0 theme-text-dark fw-bold d-block">Astro Pulse</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Part -->
    <footer class="footer py-5" >
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <h3 class="h5 fw-bold mb-4 mt-5 mt-lg-5">О нас</h3>
                    <p class="mb-0 font-small pe-lg-5">NatalnayaCarta.store - сервис заказа натальных карт. Заказать натальную карту и получить в течение нескольких часов проще всего с NatalnayaCarta.store </p>
                                    </div>

                <div class="col-12 col-md-12 col-lg-4">
                <h3 class="h5 fw-bold mb-4 mt-5 mt-lg-5">Документы</h3>
                    <div class="q-pa-md">
                        <div class="docs q-my-sm"><a href="/docs/persondata.pdf">1. Политика персональных данных</a></div>
                        <div class="docs q-my-sm"><a href="/docs/return.pdf">2. Порядок возврата денежных средств</a></div>
                        <div class="docs q-my-sm"><a href="/docs/order.pdf">3. Правила оформления заказа</a></div>
                        <div class="docs q-my-sm"><a href="/docs/oferta.pdf">4. Публичная оферта</a></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5 border-top">
                <div class="col-12 col-md-12 text-center">
                    <p class="pt-2 mb-0 font-extra-small">&copy; Copyright 2024 Сервис заказа атальных карт.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- back to top -->
    <a href="#wrapper" data-type="section-switch" class="scrollup"><i class="bi bi-caret-up"></i></a>


    <!-- Bootstrap Bundle with Popper -->
    <script src="dist/js/jquery.min.js"></script>

    <script src="dist/js/color-modes.js"></script>
    <script src="dist/js/owl.carousel.min.js"></script>

    <script src="dist/js/light-gallery.js"></script>
    <script src="dist/js/counter.js"></script>
    <script src="dist/js/aos.js"></script>
    <script src="dist/js/main.js"></script>
</body>

</html>
