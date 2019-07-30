	 <!-- START FOOTER -->
	 <footer class="footer">
	     <div class="container">
	         <div class="row justify-content-between">
			 <div class="col-12 col-md-4 footer__form-callback flex-column ">
	                 <div class="footer__form-callback__title ">Остались вопросы?</div>

	                 <form method="POST" action="wp-admin/admin-ajax.php" id="questionsForm">
	                     <div>
	                         Ваше имя:<span>*</span><br>
	                         <input class="form-control" type="text" placeholder="ФИО" name="userName" id="userName">
	                     </div>
	                     <div>
	                         Мобильный телефон:<span>*</span><br>
	                         <input class="form-control" type="text" placeholder="Телефон" name="phone_quest"
	                             id="phone_quest">
	                     </div>
	                     <div>
	                         Коментарий:<br>
	                         <textarea class="form-control" name="comment" id="comment" cols="30"
	                             rows="5"></textarea>
	                     </div>
	                     <div>
	                         <input class="btn btn-outline-danger" onclick="good_data_2();yaCounter50460370.reachGoal('ostalis_voprosy');" type="submit" name="submit"
	                             id="btn_send" value="Отправить">
	                     </div>
	                 </form>
	             </div>
	             <div class="col-5 align-self-center footer__text d-md-block d-none">
	                 Мы найдем для вас лучшие варианты поддержки. Свяжитесь с экспертом по телефону, по электронной почте
	                 или
	                 другим способом.
	             </div>
	         </div>
	     </div>
	 </footer>

	 <div class="footer-maps">
	     <div class="container">
	         <div class="row pt-3 pb-3">
	             <div class=" order-md-0 order-sm-1 order-1 footer-maps__info col-12 col-md-3 ">
	                 <div class="footer-maps__info__copyright">
	                     © 2019 Все права защищены.
	                 </div>
	                 <div>
	                     <a href="<?php echo get_template_directory_uri()."/info/политика_конфиденциальности.doc"?>" target="_blank">Политика
	                         конфиденциальности</a>
	                 </div>
	                 <div class="footer-maps__info__promotion mt-3">
	                     <a href="https://promoexpert.pro/">
	                         Продвижение сайта <img width="30%"
	                             title="Продвижение сайтов в Екатеринбурге" alt="ПромоЭксперт" src="https://promoexpert.pro/img/logo.png"></a>
	                 </div>
	             </div>

	             <div
	                 class="order-md-1 order-0 footer-maps__map-site d-flex justify-content-between  col-12 col-md-5 mr-5">
	                 <ul>
	                     <li>
	                         <a href="/diagnostika/">Диагностика</a>
	                     </li>
	                     <li>
	                         <a href="/remont/">Ремонт</a>
	                     </li>
	                     <li>
	                         <a href="/dostavka/">Доставка</a>
	                     </li>
	                 </ul>
	                 <ul>
	                     <li>
	                         <a href="/price/">Цены</a>
	                     </li>
	                     <li>
	                         <a href="/Contacts/">Контакты</a>
	                     </li>
	                 </ul>
	             </div>

	             <div class="order-2 footer-maps__contacts justify-content-end col-12 col-md">
	                 <div class="footer-maps__contacts__phone row">
	                     <div class="footer-maps__contacts__phone__img mr-1"></div> <a
	                         href="tel:+7(343) 304-64-50">(343)304-64-50</a>
	                 </div>
	                 <div class="footer-maps__contacts__mail mt-2 row">
	                     <div class="footer-maps__contacts__mail__img mr-1 "></div> <a
	                         href="mailto:ekb@shtorm-its.ru">ekb@shtorm-its.ru</a>
	                 </div>
	             </div>
	         </div>
	     </div>
	 </div>


	 <!-- END FOOTER -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script> -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	 <script>
function delete_class(block) {
    block.classList.remove("shake");
    block.classList.remove("animated");
    block.classList.remove("error");
}

function good_data() {
    var user_name = $('#name').val();
    var user_phone = $('#phone_callback').val();
    var user_email = $('#email').val();
    var processing = $('#processing').prop('checked');

    if (user_name == "") {
        var a = document.querySelector("#name");
        a.classList.add("shake");
        a.classList.add("animated");
        a.classList.add("error");
        setTimeout(delete_class, 1000, a);
    }

    if (user_phone == "") {
        var a = document.querySelector("#phone_callback");
        a.classList.add("shake");
        a.classList.add("animated");
        a.classList.add("error");
        setTimeout(delete_class, 1000, a);
    }

    if (processing == false) {
        var a = document.querySelector("#checkbox_group");
        a.classList.add("shake");
        a.classList.add("animated");
        a.classList.add("error");
        setTimeout(delete_class, 1000, a);
    }
}

function good_data_2() {
    var user_name = $('#userName').val();
    var user_phone = $('#phone_quest').val();
    var user_comment = $('#comment').val();

    if (user_name == "") {
        var a = document.querySelector("#userName");
        a.classList.add("shake");
        a.classList.add("animated");
        a.classList.add("error");
        setTimeout(delete_class, 1000, a);
    }

    if (user_phone == "") {
        var a = document.querySelector("#phone_quest");
        a.classList.add("shake");
        a.classList.add("animated");
        a.classList.add("error");
        setTimeout(delete_class, 1000, a);
    }

    if (user_comment == false) {
        var a = document.querySelector("#comment");
        a.classList.add("shake");
        a.classList.add("animated");
        a.classList.add("error");
        setTimeout(delete_class, 1000, a);
    }
}
	 </script>

	 <script>
$(document).ready(function() {

    jQuery(function($) {
        $("#phone_callback").mask("+7(099) 99-99-999");
        $("#phone_remont").mask("+7(099) 99-99-999");
        $("#phone_quest").mask("+7(099) 99-99-999");
    });

    $('#btn_send').click(function(e) {
        e.preventDefault();
        // собираем данные с формы
        var user_name = $('#userName').val();
        var user_phone = $('#phone_quest').val();
        var user_comment = $('#comment').val();
        var action = "callback_question";
        // отправляем данные
        if (user_name != "" && user_phone != "") {
            $.ajax({
                url: "/wp-admin/admin-ajax.php", // куда отправляем
                type: "POST", // метод передачи
                dataType: "json", // тип передачи данных
                data: { // что отправляем
                    "user_name": user_name,
                    "user_phone": user_phone,
                    "user_comment": user_comment,
                    "action": action
                },
                // после получения ответа сервера
                success: function(data) {
                    alert("Спасибо!"); // выводим ответ сервера
                }
            });
            alert("Ваша заявка успешно отправлена!");
        }
    });

    $('#callback_btn_send').click(function(e) {
        e.preventDefault();
        // собираем данные с формы
        var user_name = $('#name').val();
        var user_phone = $('#phone_callback').val();
        var user_email = $('#email').val();
        var processing = $('#processing').prop('checked');
        var action = "callback";
        if (user_name != "" && user_phone != "" && processing != false) {
            // отправляем данные
            $.ajax({
                url: "/wp-admin/admin-ajax.php", // куда отправляем
                type: "POST", // метод передачи
                dataType: "json", // тип передачи данных
                data: { // что отправляем
                    "user_name": user_name,
                    "user_phone": user_phone,
                    "user_email": user_email,
                    "processing": processing,
                    "action": action
                },
                // после получения ответа сервера
                success: function(data) {
                    alert("Скоро мы с вами свяжимся!"); // выводим ответ сервера
                }
            });
            alert("Ваша заявка успешно отправлена!");
        }
    });
});
	 </script>

	 <!-- <!— Yandex.Metrika counter —> -->
	     <script>
	     (function(d, w, c) {
	         (w[c] = w[c] || []).push(function() {
	             try {
	                 w.yaCounter50460370 = new Ya.Metrika2({
	                     id: 50460370,
	                     clickmap: true,
	                     trackLinks: true,
	                     accurateTrackBounce: true,
	                     webvisor: true
	                 });
	             } catch (e) {}
	         });

	         var n = d.getElementsByTagName("script")[0],
	             s = d.createElement("script"),
	             f = function() {
	                 n.parentNode.insertBefore(s, n);
	             };
	         s.type = "text/javascript";
	         s.async = true;
	         s.src = "https://mc.yandex.ru/metrika/tag.js";

	         if (w.opera == "[object Opera]") {
	             d.addEventListener("DOMContentLoaded", f, false);
	         } else {
	             f();
	         }
	     })(document, window, "yandex_metrika_callbacks2");
	     </script>

	     <noscript>
	         <div><img src="https://mc.yandex.ru/watch/50460370" style="position:absolute; left:-9999px;" alt="yandex" /></div>
	     </noscript>
	     <!-- <!— /Yandex.Metrika counter —> -->

	         <?php 
    wp_footer();
    ?>
	         </body>

	         </html>