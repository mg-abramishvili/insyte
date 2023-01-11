@extends('layouts.front')
@section('content')
    <div id="main-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="0"  class="active" aria-current="true"  aria-label="Slide 1"></button>
            <!-- <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="1"  aria-label="Slide 2"></button> -->
            <!-- <button type="button" data-bs-target="#main-carousel" data-bs-slide-to="2"  aria-label="Slide 3"></button> -->
        </div>

        <div class="carousel-inner">
            <div data-bs-interval="5000" class="carousel-item active">
                <!-- <div class="carousel-item-image" style="background-image: url(http://xn--80abehgs9c4c.xn--p1ai/img/slide-1.jpg);"></div> -->
                <div class="carousel-item-video">
                    <video autoplay nocontrols muted loop>
                        <source src="/img/video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="carousel-caption">
                    <h5>Добро пожаловать <br>в Умный Дом!</h5>
                    <!-- <p>Текст первого слайда</p> -->
                    <!-- <a href="#popup:marquiz_63bd11233f77c2004f77358d" class="btn btn-standard">Рассчитать стоимость</a> -->
                    <quiz />
                </div>
            </div>
            <!-- <div data-bs-interval="5000" class="carousel-item">
                <div class="carousel-item-image" style="background-image: url(/img/slide02.jpg);"></div>
                <div class="carousel-caption">
                    <h5>Впервые в Уфе!</h5>
                    <p>Профессиональная проводная система домашней автоматизации!</p>
                </div>
            </div>
            <div data-bs-interval="5000" class="carousel-item">
                <div class="carousel-item-image" style="background-image: url(/img/slide03.jpg);"></div>
                <div class="carousel-caption">
                    <h5>Шоурум в Уфе!</h5>
                    <p>Приходите к нам в гости, окунитесь в атмосферу Умного Дома!</p>
                </div>
            </div> -->
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#main-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Назад</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#main-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Вперед</span>
        </button>
    </div>

    <div class="main-preim p1">
        <div class="container">
            <h5 class="title-head">Наши преимущества</h5>

            <div class="main-preim-list">
                <div class="main-preim-list-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                        <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>

                    <p>10 лет гарантии</p>
                </div>
                <div class="main-preim-list-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg>

                    <p>Собственное производство в РФ</p>
                </div>
                <div class="main-preim-list-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                        <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                    </svg>

                    <p>Конкурентная цена</p>
                </div>
                <div class="main-preim-list-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                    </svg>

                    <p>20 лет на рынке</p>
                </div>
                <div class="main-preim-list-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                    </svg>

                    <p>Федеральная компания</p>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="main-features p1 bg-l">
        <div class="container">
            <h5 class="title-head">Возможности</h5>
            <div class="main-features-slider" data-flickity='{ "pageDots": false }'>
                @foreach($features as $feature)
                    <div class="main-features-item">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="{{ $feature->image }}" alt="Управление освещением">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="main-features-item-desc">
                                    <h4>{{ $feature->name }}</h4>
                
                                    {!! $feature->description !!}
                                    
                                    <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn btn-standard me-2">Узнать стоимость</a>
                                    <!-- <a href="#" class="btn btn-outline-standard">Подробнее</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="packages" class="main-packages p1">
        <div class="container">
            <h5 class="title-head">Системы автоматизации</h5>
            <div class="row">
                @foreach($packages as $package)
                    <div class="col-12 col-lg-3">
                        <div class="main-packages-item">
                            <p>{{ $package->name }}</p>
                            <div class="main-packages-item-image" style="background-image: url({{ $package->image }});"></div>
                            
                            <!-- <span>от {{ $package->price }} руб</span> -->

                            <a data-bs-toggle="collapse" href="#package{{ $package->id }}" role="button" class="btn btn-outline-standard w-100 mb-2">Что входит</a>
                            
                            <div class="collapse" id="package{{ $package->id }}">
                                {!! $package->description !!}
                            </div>

                            <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn btn-standard">Заказать</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="portfolio" class="main-portfolio p1 bg-l">
        <div class="container">
            <h5 class="title-head">Выполненные объекты</h5>
            
            @foreach($portfolios as $portfolio)
                <div class="main-portfolio-item">
                    <div class="row">
                        <div class="col-12 col-lg-5 m-order-2">
                            <p class="main-portfolio-item-title">
                                {{ $portfolio->name }}
                            </p>
                            
                            {!! $portfolio->description !!}
                            
                            <a data-bs-toggle="modal" data-bs-target="#leadModal" class="btn btn-standard">Хочу так же!</a>
                        </div>
                        <div class="col-12 col-lg-7 m-order-1">
                            <div class="carousel carousel-main{{ $portfolio->id }}" data-flickity='{ "pageDots": false }'>
                                @foreach($portfolio->gallery as $g)
                                    <div class="carousel-cell" style="background-image: url({{ $g }});"></div>
                                @endforeach
                            </div>
                            
                            <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main{{ $portfolio->id }}", "contain": true, "prevNextButtons": false, "pageDots": false }'>
                                @foreach($portfolio->gallery as $g)    
                                    <div class="carousel-cell" style="background-image: url({{ $g }});"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="map" class="main-map p1">
        <div class="container">
            <h5 class="title-head">Посетите наш шоурум</h5>
            <div class="main-map-yandex">
                <div class="main-map-desc">
                    <p>
                        <strong>Адрес:</strong>
                        г. Уфа, ул. Комсомольская, 94/1 офис 308
                    </p>
                    <p>
                        <strong>Режим работы:</strong>
                        ПН-ПТ 9:00-18:00
                    </p>
                    <p>
                        <strong>Телефон:</strong>
                        +7 937 862 53 53
                    </p>
                    <p class="socials">
                        <a href="https://wa.me/79378625353">
                            <img src="/img/whatsapp.svg" alt="">
                        </a>
                        <a href="https://t.me/+79378625353">
                            <img src="/img/telegram.svg" alt="">
                        </a>
                        <a href="https://vk.com/insyteufa">
                            <img src="/img/vk.svg" alt="">
                        </a>
                    </p>
                </div>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac258459994acdb7085df506c5af775c9caabf4804417adcb5f4d21c1f57dd3f7&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac258459994acdb7085df506c5af775c9caabf4804417adcb5f4d21c1f57dd3f7&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script> -->
            </div>
        </div>
    </div>

    <div id="faq" class="main-faq p1">
        <div class="container">
            <h5 class="title-head">Ответы на вопросы</h5>

            <div class="accordion" id="accordionFAQ">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Зачем мне умный дом? Что я получу при установке систем?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <p>Во-первых, безопасность. Система распознает проникновение в дом и незамедлительно сообщит вам об этом, заметит утечку воды или газа и сразу предотвратит аварийную ситуацию, сообщит об отключении электроэнергии. Умный дом работает как персональный охранник вашего дома.</p>
                            <p>Во-вторых, комфорт. Возможность выключать освещение не вставая с кровати перед сном, управлять отоплением прямо с телефона, открывать ворота не бегая ко входу, выключать все электроприборы при уходе из дома. И это не весь перечень, а только его часть. При этом не важно, дома вы, на работе или в отпуске, многие функции работают автоматически.</p>
                            <p>В-третьих, экономия энергии. По нашим расчетам, она составляет 25-30% за счет оптимального управления системами отопления, кондиционирования, освещения. И стоимость установки систем умного дома окупает себя уже через 2-3 года.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Сколько стоит умный дом INSYTE?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <p>Стоимость установки умного дома INSYTE начинается от 50 тысяч рублей. Итоговая сумма зависит от нескольких факторов.</p>
                            <p>Во-первых, от насыщенности системы. Например, вы хотите установить только оборудование по управлению искусственным освещением в доме или полноценную многофункциональную систему, которая позволит управлять и климатом в доме, и системами солнцезащиты, и аудио- и видеотехникой. Во-вторых, от конструктивных особенностей помещения или здания, в том числе и наличия уже готового ремонта. Эти факторы влияют на сложность монтажа системы.</p>
                            <p>Все эти детали обсуждаются с каждым заказчиком на первоначальном этапе, и на основе их разрабатывается индивидуальный проект и производится расчёт.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Как установить недорогой умный дом?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <p>Легко! Достаточно обратиться в INSYTE Electronics. Мы осуществляем проектирование и установку систем умный дом, цена которых значительно ниже импортных аналогов. К примеру, затраты на оборудование коттеджа или 3-комнатной квартиры составят примерно от 90 до 150 тысяч рублей. Монтаж и пусконаладочные работы обойдутся в 50-100% стоимости оборудования. Цифры примерные, зависят от нескольких факторов и обсуждаются индивидуально с каждым заказчиком.</p>
                            <p>Если же хочется сэкономить на системе INSYTE и снизить стоимость, то выберите только одну или несколько самых важных и нужных для вашего дома подсистем. Например, «управление климатом» или «управление аудио- и видеотехникой» (смотрите все доступные подсистемы выше).</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Насколько сложно управлять умным домом?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <p>Управлять умным домом несложно — работа всех систем проходит в автоматизированном режиме, а регулировка возможна с помощью смартфона, планшета и обычных выключателей. Изучение компьютерных программ для управления умным домом не требуется.</p>
                            <p>Умный дом состоит из нескольких устройств установленных по дому, каждое из которых имеет собственный интеллект. Нажатием всего одной кнопки можно установить в помещении желаемую температуру, открыть ворота или выключить освещение в неиспользуемых помещениях.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Чем INSYTE лучше конкурентов?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <p>Во-первых, наши цены на проектирование и установку систем умного дома значительно ниже, чем у других поставщиков профессионального оборудования. INSYTE Electronics самостоятельно занимается полным циклом работ: разработкой, производством, продажей и поддержкой систем умный дом. Заработная плата российских инженеров значительно ниже иностранных. Стоимость производства и сборки в России обходится дешевле, чем в Китае. Плюс у иностранных брендов в стоимость включены пошлины, акцизы, доставка, наценка нескольких посредников.</p>
                            <p>Во-вторых, при заказе систем умного дома у INSYTE Electronics вы получаете шеф-контроль всего проекта от начала и до сдачи. Мы имеем самую широкую дилерскую сеть из 534 представительств в каждом городе России и СНГ. Поэтому Вы получите полную гарантийную и быструю техническую поддержку на протяжении всего срока эксплуатации умного дома.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection