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

<style>
.status_etap {
    font-size: 16px
}

.status_etap+.status_etap {
    margin-top: 10px
}

.icon {
    background: url(<?php assets('/img/ok.png')?>) no-repeat;
}

.icon_ok {
    background-position: -30px 0px;
    width: 30px;
    height: 30px;
    margin-right: 10px
}

.icon_notok {
    background-position: 0px 0px;
    width: 30px;
    height: 30px;
    margin-right: 10px
}
</style>

<div class="page-layout_content content" style="background: #f5f5f5;padding-bottom: 30px;margin-bottom: 25px;">
    <div class="container">
        <?php

if(($_POST['orderNumber'])==""){?>

        <p class="lg-text" style="text-align: center; margin-top: 40px">Введите номер заказа</p>

        <form action="" class="form" method="POST" style="text-align: center; margin: 40px auto;">
            <div class="form-row">
                <div class="form-input-wrapper">
                    <input class="form-input" type="text" name="orderNumber" placeholder="Номер ремонта">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="submit-button-blue">Подтвердить</button>
            </div>
        </form>

        <?php } elseif($result!=NULL){ ?>
        <div class="p_h3">Ремонт №<?=$status['number'];?></div>
        <p class="lg-text">Текущий статус: <?=$status['status'];?></p>

        <?php

switch ($status['status']) {
    case 'Принят в работу': ?>

        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в работу
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Диагностика завершена
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Принят в ремонт
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Готов к выдаче
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Выдан заказчику
        </div>

        <?php break;
case 'Диагностика': ?>

        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в работу
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Диагностика завершена
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Принят в ремонт
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Готов к выдаче
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Выдан заказчику
        </div>

        <?php break;
case 'Диагностика завершена': ?>

        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в работу
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Диагностика завершена
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Принят в ремонт
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Готов к выдаче
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Выдан заказчику
        </div>

        <?php break;
case 'Принят в ремонт': ?>

        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в работу
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Диагностика завершена
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в ремонт
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Готов к выдаче
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Выдан заказчику
        </div>

        <?php break;
case 'Готов к выдаче': ?>

        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в работу
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Диагностика завершена
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в ремонт
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Готов к выдаче
        </div>
        <div class="status_etap">
            <i class="icon icon_notok"></i> Выдан заказчику
        </div>

        <?php break;
	case 'Отгружен': ?>

        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в работу
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Диагностика завершена
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Принят в ремонт
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Готов к выдаче
        </div>
        <div class="status_etap">
            <i class="icon icon_ok"></i> Выдан заказчику
        </div>

        <?php break;
    case 'Отказ от ремонта': ?>

        <p class="lg-text" style="text-align: center;">К сожалению, ваш заказ по ремонту не найден</p>

        <form action="" class="form" method="POST" style="text-align: center; margin: 40px auto 80px">
            <div class="form-row">
                <div class="form-input-wrapper">
                    <input class="form-input" type="text" name="orderNumber" placeholder="Номер ремонта">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="submit-button-blue">Подтвердить</button>
            </div>
        </form>

        <?php break;
    default: ?>

        <p class="lg-text" style="text-align: center;">К сожалению, ваш заказ по ремонту не найден</p>

        <form action="" class="form" method="POST" style="text-align: center; margin: 40px auto 80px">
            <div class="form-row">
                <div class="form-input-wrapper">
                    <input class="form-input" type="text" name="orderNumber" placeholder="Номер ремонта">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="submit-button-blue">Подтвердить</button>
            </div>
        </form>

        <?php break;
}

}else{ ?>

        <p class="lg-text" style="text-align: center; margin-top: 40px">К сожалению, ваш заказ по ремонту не найден
        </p>
        <form action="" class="form" method="POST" style="text-align: center; margin: 40px auto 40px">
            <div class="form-row">
                <div class="form-input-wrapper">
                    <input class="form-input" type="text" name="orderNumber" placeholder="Номер ремонта">
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="submit-button-blue">Подтвердить</button>
            </div>
        </form>

        <?php }
?>
    </div>
</div>

<?php 
get_footer();
?>