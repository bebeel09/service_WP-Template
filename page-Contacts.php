<?php
get_header();



$place = array(
	'yandex_lat' => 56.337097959314,
	'yandex_lon' => 43.866852915344,
	'yandex_scale' => 13,
	'PLACEMARKS' => array(
			array
				(
					'LON' => 60.639668419643,
					'LAT' => 56.829588173462,
					'TEXT' => "Екатеринбург<br>ул. Народной воли, 115<br>(343) 304-64-50<br>ekb@shtorm-its.ru<br>Пн. - Пт.: с 9:00 до 18:00"
				),

			array
				(
					'LON' => 60.557879148479,
					'LAT' => 56.971094679397,
					'TEXT' => "Верхняя Пышма<br>ул. Бажова, 28<br>(343) 379-29-75<br>ekb@shtorm-its.ru<br>Пн. – Пт.: с 9:00 до 18:00<br>"
				),

			array
				(
					'LON' => 82.8604273,
					'LAT' => 54.998374,
					'TEXT' => "Новосибирск<br>ул. Станционная 26к3<br>(383) 230-00-55<br>nsk@shtorm-its.ru<br>Пн. – Пт.: с 9:00 до 18:00<br>"
				),

			array
				(
					'LON' => 56.206198457672,
					'LAT' => 58.011434751797,
					'TEXT' => "Пермь <br>ул. Решетникова, д. 4, оф. 103<br>(342) 237-24-69<br>(342) 237-19-59<br>prm@shtorm-its.ru<br>Пн. - Пт.: с 9:00 до 18:00<br>"
				),

			array
				(
					'LON' => 43.866852915344,
					'LAT' => 56.337097959363,
					'TEXT' => "Нижний Новгород <br>ул. Карпинского, д.29, офис 14<br>(831) 217 50 17<br>(999) 072 73 74<br>kosov@shtorm-its.ru<br>Пн. - Пт.: с 9:00 до 18:00<br>"
				),
			array
				(
					'LAT' => 55.653091,
					'LON' => 37.553936,
					'TEXT' => "Москва <br>ул. Научный проезд.19<br>(495) 109 00 73<br>msk@shtorm-its.ru<br>Пн. - Пт.: с 9:00 до 18:00<br>"
				),

		)
);

?>

<section class="content">
    <div class="content__description container">
        <div class="content__description__title">
            <h1>Контакты</h1>
        </div>

        <div class="content__description__text">
            ООО «Шторм»<br>
            <b>Адрес:</b> <br>
            Свердловская область, г. Верхняя Пышма ул. Бажова, 28<br>
            <b>E-mail:</b><br>
            service@shtorm-its.ru<br>
            <b>Телефон:</b><br>
            +7 (343) 304-64-50<br>
            <b>Режим работы:</b><br>
            Пн. – Пт.: с 9:00 до 18:00<br> </div>
    </div>
    <div class="mapTab-wrapper d-flex flex-column flex-md-row container mx-auto">
        <div class=" mapTab-list col-12 col-md-3">
            <?foreach($place['PLACEMARKS'] as $placemark){
					// dd($placemark);
				?>
            <div id="tabLat<?=$placemark["LAT"]?>Lon<?=$placemark["LON"]?>" data-lat="<?=$placemark["LAT"]?>"
                data-lon="<?=$placemark["LON"]?>" class="mapTab-list__item">
                <?if(strpos($placemark["TEXT"], 'катеринбург') <= 0):?>

                <?endif;?>
                <?=strtr($placemark["TEXT"], array('('=>'+7 ('));?>
                <?if((strpos($placemark["TEXT"], 'катеринбург') <= 0 && strpos($placemark["TEXT"], '123') <= 0)):?>
                <?endif;?>
                <?if(strpos($placemark["TEXT"], 'катеринбург') <= 0):?>
                <?endif;?>
            </div>
            <?
				}
				?>
        </div>
        <div class=" bx-yandex-view-map col-12 col-md-9 ">

            <div id="YMAP_MAP_mF8Ev4" class="bx-yandex-map justify-content-center" style="height: 500px;">Wait...</div>

        </div>
    </div>
    </div>
    </div>
</section>

<script src="https://api-maps.yandex.ru/2.0/?load=package.full&mode=release&lang=ru-RU&wizard=bitrix"
    type="text/javascript"></script>

<script type="text/javascript">
if (!window.GLOBAL_arMapObjects)
    window.GLOBAL_arMapObjects = {};

function init_MAP_mF8Ev4() {
    if (!window.ymaps)
        return;

    if (typeof window.GLOBAL_arMapObjects['MAP_mF8Ev4'] !== "undefined")
        return;

    var node = document.getElementById("YMAP_MAP_mF8Ev4");
    node.innerHTML = '';

    window.tabedmap = window.GLOBAL_arMapObjects['MAP_mF8Ev4'] = new ymaps.Map(node, {
        center: [56.971094679397,60.557879148479 ],
        zoom: 13,
        type: 'yandex#map'
    });

    window.tabedmap.behaviors.enable("scrollZoom");
    window.tabedmap.behaviors.enable("dblClickZoom");
    window.tabedmap.behaviors.enable("drag");
    if (window.tabedmap.behaviors.isEnabled("rightMouseButtonMagnifier"))
        window.tabedmap.behaviors.disable("rightMouseButtonMagnifier");
    window.tabedmap.controls.add('zoomControl');
    window.tabedmap.controls.add('miniMap');
    window.tabedmap.controls.add('typeSelector');
    window.tabedmap.controls.add('scaleLine');
    if (window.SetPlacemarks_1) {
        window.SetPlacemarks_1(window.tabedmap);
    }
}

(function ymaps_waiter() {
    if (typeof ymaps !== 'undefined')
        ymaps.ready(init_MAP_mF8Ev4);
    else
        setTimeout(ymaps_waiter, 100);
})();


/* if map inits in hidden block (display:none)
 *  after the block showed
 *  for properly showing map this function must be called
 */
function MapYandexAfterShow(mapId) {
    if (window.GLOBAL_arMapObjects[mapId] !== undefined)
        window.GLOBAL_arMapObjects[mapId].container.fitToViewport();
}




if (!window.YMapAddPlacemark) {
    window.YMapAddPlacemark = function(map, arPlacemark) {
        // if (null == map)
        // 	return false;

        if (!arPlacemark.LAT || !arPlacemark.LON)
            return false;
        // console.log(arPlacemark);
        var props = {};
        if (null != arPlacemark.TEXT && arPlacemark.TEXT.length > 0) {
            var value_view = '';

            if (arPlacemark.TEXT.length > 0) {
                var rnpos = arPlacemark.TEXT.indexOf("\n");
                value_view = rnpos <= 0 ? arPlacemark.TEXT : arPlacemark.TEXT.substring(0, rnpos);
            }

            props.balloonContent = arPlacemark.TEXT.replace(/\n/g, '<br />');
            props.hintContent = value_view;
        }

        var obPlacemark = new ymaps.Placemark(
            [arPlacemark.LAT, arPlacemark.LON],
            props, {
                balloonCloseButton: true
            }
        );
        obPlacemark.events.add("balloonopen", function(event) {
            // 		console.log(arPlacemark);
            activateBalloon([arPlacemark.LAT, arPlacemark.LON], {
                content: arPlacemark.TEXT
            });
        });

        map.geoObjects.add(obPlacemark);

        return obPlacemark;
    }
}

function SetPlacemarks_1(tabedmap) {
    if (typeof window["YMapAddPlacemark"] != 'function') {
        /* If component's result was cached as html,
         * script.js will not been loaded next time.
         * let's do it manualy.
         */

        (function(d, s, id) {
            var js, bx_ym = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "<?=get_template_directory().'/js/map.script.js'?>";
            bx_ym.parentNode.insertBefore(js, bx_ym);
        }(document, 'script', 'ya-map-js'));

        var ymWaitIntervalId = setInterval(function() {
            if (typeof window["YMapAddPlacemark"] == 'function') {
                SetPlacemarks_1(tabedmap);
                clearInterval(ymWaitIntervalId);
            }
        }, 300);

        return;
    }

    var arObjects = {
        PLACEMARKS: [],
        POLYLINES: []
    };
    <?php
    if (is_array($place['PLACEMARKS']) && ($cnt = count($place['PLACEMARKS']))):
        for ($i = 0; $i < $cnt; $i++):
    ?>
    arObjects.PLACEMARKS[arObjects.PLACEMARKS.length] = YMapAddPlacemark(tabedmap,
        <?=json_encode($place['PLACEMARKS'][$i])?>);
    <?php
    endfor;
	endif; 
	?>
    console.log(arObjects);

    $('.mapTab-list__item').click(function() {
        var text = $(this).html();
        console.log(text);
        var lat = $(this).data('lat');
        var lon = $(this).data('lon');
        activateBalloon([lat, lon], {
            content: text
        }, {
            closeButton: true
        });
    });
    window.activateBalloon = function(coords, props, options) {

        $('.mapTab-list__item').removeClass('active');
        if (!options) {
            options = {
                closeButton: true
            };
        }
        window.activeBalloon = tabedmap.balloon.open(coords, props, options);
        window.activeBalloon.events.add('close', function() {

            $('.mapTab-list__item').removeClass('active');
        });
        tabedmap.setCenter(coords);
        document.getElementById('tabLat' + coords[0] + 'Lon' + coords[1]).classList.add('active');
    }
}
</script>


<?php
get_footer();
?>