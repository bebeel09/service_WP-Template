<?php

$var = get_query_var( 'number' );
$_POST['orderNumber'] = $_POST['orderNumber'] ? $_POST['orderNumber'] : $var;
if( $_POST['orderNumber'] ){
    $result = getStatus($_POST['orderNumber']);
    $status = [
        "status" => explode("<hr>",$result)[1],
        "number" => explode("<hr>",$result)[2],
    ];
}else{
    $status = false;
}
get_header();
?>




<? if(($_POST['orderNumber'])==""){ ?>
<section class="page-layout  flex-wrap">
    <h1 class="page-layout__title">Введите номер заказа</h1>
    <div class="row justify-content-around p-3">
        <div
            class="justify-content-center page-layout__repair-block p-4 col-10 col-sm-10 col-md-5 col-lg-5 col-xl-3 d-flex flex-column ">
            <p>Узнать статус ремонта</p>
            <form class="page-layout__repair-block__form  d-flex flex-column  " action="" method="POST">
                <input class="page-layout__repair-block__form__input form-control " name="orderNumber"
                    placeholder="Номер ремонта" type="text">
                <input class="page-layout__repair-block__form__submit btn " type="submit" value="Подтвердить">
            </form>
        </div>
    </div>
</section>

<? }elseif($result!=NULL){ 
		switch ($status['status']) {
			case 'Принят в работу': ?>
<section>
    <div class="status mt-2 mb-2">
        <div class="container pb-2">
            <div class="content__description__title">
                <h1>Ремонт №<?=$status['number'];?></h1>
            </div>
            <div class="status__now mb-3">
                Текущий статус: <?=$status['status'];?>
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в работу
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Диагностика завершена
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Принят в ремонт
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Готов к выдаче
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Выдан заказчику
            </div>
        </div>
    </div>
</section>


<?
						break;
						case 'Диагностика': ?>
<section>
    <div class="status mt-2 mb-2">
        <div class="container pb-2">
            <div class="content__description__title">
                <h1>Ремонт №<?=$status['number'];?></h1>
            </div>
            <div class="status__now mb-3">
                Текущий статус: <?=$status['status'];?>
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в работу
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Диагностика завершена
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Принят в ремонт
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Готов к выдаче
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Выдан заказчику
            </div>
        </div>
    </div>
</section>

<?
						break;
						case 'Диагностика завершена': ?>
<section>
    <div class="status mt-2 mb-2">
        <div class="container pb-2">
            <div class="content__description__title">
                <h1>Ремонт №<?=$status['number'];?></h1>
            </div>
            <div class="status__now mb-3">
                Текущий статус: <?=$status['status'];?>
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в работу
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Диагностика завершена
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в ремонт
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Готов к выдаче
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Выдан заказчику
            </div>
        </div>
    </div>
</section>


<?
						break;
						case 'Принят в ремонт': ?>
<section>
    <div class="status mt-2 mb-2">
        <div class="container pb-2">
            <div class="content__description__title">
                <h1>Ремонт №<?=$status['number'];?></h1>
            </div>
            <div class="status__now mb-3">
                Текущий статус: <?=$status['status'];?>
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в работу
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Диагностика завершена
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в ремонт
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Готов к выдаче
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Выдан заказчику
            </div>
        </div>
    </div>
</section>


<?
						break;
						case 'Готов к выдаче': ?>
<section>
    <div class="status mt-2 mb-2">
        <div class="container pb-2">
            <div class="content__description__title">
                <h1>Ремонт №<?=$status['number'];?></h1>
            </div>
            <div class="status__now mb-3">
                Текущий статус: <?=$status['status'];?>
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в работу
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Диагностика завершена
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в ремонт
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Готов к выдаче
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-no">
                </div>
                Выдан заказчику
            </div>
        </div>
    </div>
</section>

<?
						break;
						case 'Отгружен': ?>
<section>
    <div class="status mt-2 mb-2">
        <div class="container pb-2">
            <div class="content__description__title">
                <h1>Ремонт №<?=$status['number'];?></h1>
            </div>
            <div class="status__now mb-3">
                Текущий статус: <?=$status['status'];?>
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в работу
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Диагностика завершена
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Принят в ремонт
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Готов к выдаче
            </div>
            <div class="status__flags d-flex mb-2 align-items-center">
                <div class="status__flags__img flag-ok">
                </div>
                Выдан заказчику
            </div>
        </div>
    </div>
</section>

<?
						break;
						default: ?>
<section class="page-layout  flex-wrap">
    <h1 class="page-layout__title">К сожалению, ваш заказ по ремонту не найден</h1>
    <div class="row justify-content-around p-3">
        <div
            class="justify-content-center page-layout__repair-block p-4 col-10 col-sm-10 col-md-5 col-lg-5 col-xl-3 d-flex flex-column ">
            <p>Узнать статус ремонта</p>
            <form class="page-layout__repair-block__form  d-flex flex-column  " action="" method="POST">
                <input class="page-layout__repair-block__form__input form-control " name="orderNumber"
                    placeholder="Номер ремонта" type="text">
                <input class="page-layout__repair-block__form__submit btn " type="submit" value="Подтвердить">
            </form>
        </div>
    </div>
</section>
<?
                        break;
        }
?>



<? }else{ ?>
    <section class="page-layout  flex-wrap">
    <h1 class="page-layout__title">К сожалению, ваш заказ по ремонту не найден</h1>
    <div class="row justify-content-around p-3">
        <div
            class="justify-content-center page-layout__repair-block p-4 col-10 col-sm-10 col-md-5 col-lg-5 col-xl-3 d-flex flex-column ">
            <p>Узнать статус ремонта</p>
            <form class="page-layout__repair-block__form  d-flex flex-column  " action="" method="POST">
                <input class="page-layout__repair-block__form__input form-control " name="orderNumber"
                    placeholder="Номер ремонта" type="text">
                <input class="page-layout__repair-block__form__submit btn " type="submit" value="Подтвердить">
            </form>
        </div>
    </div>
</section>
<? } ?>


<?php 
get_footer();

?>