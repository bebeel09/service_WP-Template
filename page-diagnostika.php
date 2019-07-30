<?php 
get_header(); 

?>

<section class="content">
    <div class="content__description container">
        <div class="content__description__title">
            <h1>Диагностика</h1>
        </div>

        <div class="content__description__text">
            Производим диагностику в течение 24 часов и сообщаем ее результаты любым удобным для вас способом.
            Диагностика необходима для того, чтобы определить точную причину неисправности. Только после проведения
            диагностики будет известен срок и стоимость ремонта. Программная и аппаратная диагностика техники
            выполняется БЕСПЛАТНО в случае дальнейшего ремонта в нашем сервисном центре.
        </div>
        <div class="d-flex content__description__img">
            <img src="<?php echo get_template_directory_uri()."/img/newS.jpg"?>" alt="диагностика">
        </div>
    </div>
</section>
<?php get_footer(); ?>