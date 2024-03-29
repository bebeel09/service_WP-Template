<?php
$path = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content='Ремонт сварочного оборудования. Сервичный центр компании "ШТОРМ".'>
    <title>Ремонт сварочного оборудования | Екатеринбург, Верхняя Пышма, Москва, Новосибирск, Пермь, Нижний Новгород -
        ШТОРМ</title>
    <?php
    wp_head();
    ?>
    <link rel="shortcut icon" href="<?php echo $path."/favicon.ico"?>" type="image/x-icon">
    <link rel="icon" href="<?php echo $path."/favicon.ico"?>" type="image/x-icon">
</head>

<body>
    <!-- start header -->
    <div class="container-fluid p-0">
        <div class="shadow-sm">
            <div class="container">
                <header class="row align-items-center header">
                    <div
                        class=" order-md-0 order-3 col-md header__logo justify-content-md-start justify-content-center d-flex">


                        <?php
                if (is_front_page()){?>
                        <img src="<?php echo $path."/img/logo.png"?>" alt="ШТОРМ">
                        <?php }else{ ?>
                        <a href="<?php echo Get_home_url(); ?>"><img src="<?php echo $path."/img/logo.png"?>"
                                alt="ШТОРМ"></a>
                        <?php
                }
                ?>
                    </div>

                    <div class=" col header__title d-none d-md-block">
                        <div>ремонт сварочного оборудования</div>
                    </div>

                    <div
                        class=" order-md-3 order-0 col-12 col-md-6  d-flex header__contact-information align-items-center flex-md-row">
                        <div class="col header__contact-information__block mr-md-0 mr-2">
                            <div class="row header__contact-information__level-1 flex-nowrap">

                                <div
                                    class="col-1 header__contact-information__level-1__img d-none d-md-block">
                                    <img src="<?php echo $path."/img/tel-rouge.png";
                            ?>" alt="телефонная трубка">
                                </div>

                                <div class="col header__contact-information__level-1__phone-num p-0 pl-md-3">
                                    <a href="tel:+7(343) 304-64-50"><b>(343)304-64-50</b></a>
                                </div>

                            </div>

                            <div class="col header__contact-information__level-2 d-none d-md-flex">
                                <p>прием звонков: пн-пт с 9:00 до 18:00</p>
                            </div>
                        </div>

                        <div
                            class="header__contact-information__call-button d-flex d-md-block">
                            <a href="#popup1" class="btn btn-outline-danger" onclick="yaCounter50460370.reachGoal('zakazat_zvonok');" id="see-popup">Заказать звонок</a>
                        </div>

                    </div>
                    </header>
            </div>
        </div>
        

        <nav class="container menu d-none d-md-flex">
            <ul class="menu_item">
                <li class="menu__item__items ">
                    <a class="btn btn-light" href="/diagnostika/">Диагностика</a>
                </li>
                <li class="menu__item__items">
                    <a class="btn btn-light" href="/remont/">Ремонт</a>
                </li>
                <li class="menu__item__items">
                    <a class="btn btn-light" href="/dostavka/">Доставка</a>
                </li>
                <li class="menu__item__items">
                    <a class="btn btn-light" href="/price/">цены</a>
                </li>
                <li class="menu__item__items">
                    <a class="btn btn-light" href="/Contacts/">Контакты</a>
                </li>
            </ul>
        </nav>
        <nav class="menu-gamburger d-flex flex-column d-md-none">
            <input type="checkbox" id="menu">
            <label class="menu-gamburger__label d-flex" for="menu">
                <a class="menu-gamburger__label__adidas"></a></label>
            <ul class="menu-gamburger__item">
                <li class="col menu-gamburger__item__items btn btn-light">
                    <a class="col" href="/diagnostika/">Диагностика</a>
                </li>
                <li class="col menu-gamburger__item__items btn btn-light">
                    <a class="col " href="/remont/">Ремонт</a>
                </li>
                <li class="col menu-gamburger__item__items btn btn-light">
                    <a class="col" href="/dostavka/">Доставка</a>
                </li>
                <li class="col menu-gamburger__item__items btn btn-light">
                    <a class="col" href="/price/">цены</a>
                </li>
                <li class="col menu-gamburger__item__items btn btn-light">
                    <a class="col" href="/contacts/">Контакты</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- start callback-PopUp -->
    <div>
        <a href="#x" class="overlay" id="popup1"></a>
        <div class="callback-popup  flex-column col-9 col-sm-7 col-md-5 col-lg-3">
            <div class="callback-popup__header d-flex">
                <div class="callback-popup__header__img mr-2">
                </div>
                <div class="callback-popup__header__title d-flex flex-column justify-content-center">
                    <div class="">Обратный звонок</div>
                </div>
                <a href="#close"
                    class="callback-popup__header__exit pt-3 btn-danger close ml-auto p-2"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="callback-popup__form d-flex">
                <form class="d-flex flex-column  col" action="wp-admin/admin-ajax.php" method="POST">
                    <p>Ваше имя:<span>*</span></p>
                    <input class="form-control" name="name" id="name" placeholder="ФИО" type="text">
                    <p>Телефон:<span>*</span></p>
                    <input class="form-control" name="phone" type="text" placeholder="Телефон" id="phone_callback">
                    <p>E-mail:</p>
                    <input class="form-control" name="email" id="email" placeholder="Почта" type="text">
                    <div class="callback-popup__form__conset d-flex align-items-center" id="checkbox_group">
                        <input type="checkbox" name="processing" value="" id="processing">
                        <label class="mb-0" for="processing">Я согласен на <a href="https://shtorm-its.ru/info/processing/"
                                target="_blank" rel="nofollow">обработку персональных данных</a></label>
                    </div>
                    <input class="btn btn-danger" onclick="good_data();" type="submit" id="callback_btn_send"
                        value="Отправить">
                </form>
            </div>
        </div>
    </div>
    <!-- end callback-PopUp -->
    <!-- start PopUp_messengers -->
    <div>
        <div class="popup">
            <input type="checkbox" id="popup-checkbox" onclick="yaCounter50460370.reachGoal('btn_send');">
            <label class="popup__label shake animated delay-3s" for="popup-checkbox"> </label>
            <span class="popup__tooltip">Получите консультации по ремонту</span>

            <div class=" consult-block d-flex flex-column ">
                <div class="consult-block__buttons flex-column d-flex">
                    <a  href="tg://resolve?domain=shtormits_service" class="consult-block__buttons__telegram btn btn-sm mt-2 mb-2"><img
                            src="<?php echo $path."/img/Telegram_logo.svg"?>" alt=""></a>
                    <a href="whatsapp://send?phone=79220350667" class="consult-block__buttons__whatsapp btn btn-sm mb-2"><img
                            src="<?php echo $path."/img/whatsapp_logo.svg"?>" alt=""></a>
                    <a href="viber://add?number=%2B79220350667" class="consult-block__buttons__viber btn btn-sm mb-2">
                        <img src="<?php echo $path."/img/viber_logo.svg"?>" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end PopUp_messengers -->
    <!-- end hedaer -->