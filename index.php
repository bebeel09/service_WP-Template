<?php get_header(); 
?>

	 <!-- START CONTENT -->
	 <section class="page-layout  flex-wrap">
            <h1 class="page-layout__title">Ремонт сварочного оборудования</h1>
            <div class="row justify-content-around p-3">
                <div
                    class="justify-content-center page-layout__repair-block p-4 col-10 col-sm-10 col-md-5 col-lg-5 col-xl-3 d-flex flex-column ">
                    <p>Узнать статус ремонта</p>
                    <form class="page-layout__repair-block__form  d-flex flex-column  " action="/status/" method="POST">
                        <input class="page-layout__repair-block__form__input form-control " name="orderNumber" placeholder="Номер ремонта" id="input1"
                            type="text">
                        <input class="page-layout__repair-block__form__submit btn " type="submit" value="Подтвердить">
                    </form>
                </div>
                <!-- <div
                    class="justify-content-center border-color page-layout__repair-block p-4 col-10 col-sm-10 col-md-5 col-lg-5 col-xl-3  d-flex flex-column ">
                    <p>Заказать ремонт</p>
                    <form class="page-layout__repair-block__form  d-flex flex-column  " action="">
                        <div class="form-group">
                            <input class="page-layout__repair-block__form__input form-control " placeholder="ФИО"
                                type="text">
                        </div>
                        <input class="page-layout__repair-block__form__input form-control " placeholder="Телефон"
                            type="text" id="phone_remont">
                        <input class="page-layout__repair-block__form__submit btn " type="submit" value="Подтвердить">
                    </form>
                </div> -->
            </div>
    </div>
    </section>

    <section class="content">
        <div class="content__description container">
            <div class="content__description__title">
                <h1>Ремонт сварочного оборудования</h1>
            </div>

            <div class="content__description__text">
                Ремонт сварочного оборудования производит сервисный центр компании «ШТОРМ» в течение всего гарантийного
                срока, который указан в паспорте (применимо к оборудованию приобретенному в ООО «ШТОРМ») и после
                окончания
                гарантии. Работы выполняют профессионалы с большим практическим опытом обслуживания промышленных
                аппаратов
                для сварки и резки металла.
            </div>

            <div class="content__description__text">
                Наши сотрудники регулярно проходят повышение квалификации на заводах-изготовителях. Пуско-наладочные
                работы
                при монтаже новых агрегатов, восстановление и обслуживание бывших в эксплуатации устройств выполняются
                на
                договорных условиях. Гарантийный ремонт сварочных агрегатов производится в соответствии с правилами,
                указанными в паспорте.
            </div>
        </div>
    </section>

    <section class="dignites">
        <div class="d-flex col-12 justify-content-center dignites__video ">
            <iframe width="800" height="450" src="https://www.youtube.com/embed/T1zgVuFq6OU" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class=" dignites__main flex-column d-flex align-items-center">
            <div class="icon dignites__main__img ml-3">
            </div>

            <div class="col-12 col-sm-12  justify-content-center dignites__main__title align-items-center">
                <div>Ремонт и сервисное обслуживание</div>
            </div>

            <div class="col-12 col-sm-12  justify-content-center dignites__main__desc">
                сварочное оборудование от любого производителя
            </div>
        </div>

        <div class="dignites__item d-flex justify-content-center">
            <div
                class="col-12 col-sm-12 col-md-8 flex-column d-flex flex-sm-column flex-md-row align-items-center  dignites__item__1">
                <div class="icon dignites__item__1__img">
                </div>

                <div class="col dignites__item__1__description align-items-center">
                    <p>Диагностика в течение 24 часов</p>
                    Производим диагностику в течение 24 часов и сообщаем ее результаты любым удобным для вас способом.
                    Стоимость диагностики оборудования - от 500 руб.
                    В случае дальнейшего ремонта в нашем сервисном центре диагностика бесплатная.
                </div>
            </div>
        </div>

        <div class="dignites__item d-flex justify-content-center">
            <div
                class="col-12 col-sm-12 col-md-8 flex-column d-flex flex-sm-column flex-md-row align-items-center  dignites__item__2">
                <div class="icon dignites__item__2__img">
                </div>

                <div class="col dignites__item__2__description align-items-center">
                    <p>Ремонт и гарантия</p>
                    Ремонтируем технику, тестируем, предоставляем гарантию на ремонт до 6 месяцев.
                </div>
            </div>
        </div>

        <div class="dignites__item d-flex justify-content-center">
            <div
                class="col-12 col-sm-12 col-md-8 flex-column d-flex flex-sm-column flex-md-row align-items-center  dignites__item__3">
                <div class="icon dignites__item__3__img">
                </div>

                <div class="col dignites__item__3__description align-items-center">
                    <p>Оплата</p>
                    Выставляем счет на оплату по безналичному расчету или наличными. Предоставляем все отчетные
                    документы.
                </div>
            </div>
        </div>

        <div class="dignites__item d-flex justify-content-center">
            <div
                class="col-12 col-sm-12 col-md-8 flex-column d-flex flex-sm-column flex-md-row align-items-center  dignites__item__4">
                <div class="icon dignites__item__4__img">
                </div>

                <div class="col dignites__item__4__description align-items-center">
                    <p>Доставка после ремонта</p>
                    После ремонта вы можете забрать оборудование самостоятельно из нашего сервисного центра или оформить
                    доставку ТК.
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT -->
<?php get_footer(); ?>
