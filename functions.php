<?php
function Service_style(){

    // Регистрирую стили
    wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.7', 'screen');

    // Подключаю стили
    wp_enqueue_style( 'main');
}

// Создаем экшн в котором подключаем скрипты подключенные внутри функции twentytwelve_scripts_styles
add_action( 'wp_enqueue_scripts', 'Service_style', 1 );


add_action('wp_ajax_callback_question','callback_question');
add_action('wp_ajax_callback','callback');

add_action( 'wp_ajax_nopriv_callback_question','callback_question');
add_action('wp_ajax_nopriv_callback','callback');

function callback_question(){
    echo $_POST['user_name']."<br>";
    echo $_POST['user_phone']."<br>";
    echo $_POST['user_comment']."<br>";

        $roistatData = array(
            'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
            'key'     => 'MTQ3MDE6MjM2MzY6NDY1MzA0ZWI2NjQ1MGRlY2YyZWYzY2M0MDZkM2U0OGI=',
            'title'   => "Есть вопрос! сайт service.shtorm-its.ru",
        );
        
        // Обрытный звонок
            $roistatData['name'] = $_POST["user_name"];
            $roistatData['phone'] = $_POST["user_phone"];
            $roistatData['comment'] = $_POST["user_comment"];
        
            // $roistatData['comment'] = $roistatData['comment']."\r\n
            // 							Имя: {$roistatData['name']}\r\n
            // 							Телефон: {$roistatData['phone']}\r\n
            // 							E-mail: {$roistatData['email']}";
        
            file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

    wp_die();
}

function callback(){
    var_dump( $_POST['processing']);
if ($_POST['processing']=="true"){
    $roistatData = array(
        'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
        'key'     => 'MTQ3MDE6MjM2MzY6NDY1MzA0ZWI2NjQ1MGRlY2YyZWYzY2M0MDZkM2U0OGI=',
        'title'   => "Заказ обратного звонка. Сайт service.shtorm-its.ru",
    );
    
    // Обрытный звонок
        $roistatData['name'] = $_POST["user_name"];
        $roistatData['phone'] = $_POST["user_phone"];
        $roistatData['email'] = $res->properties["email"];
        $roistatData['processing'] = $_POST["processing"];
    
        //$roistatData['comment'] = $roistatData['comment']."\r\n
        //							Имя: {$roistatData['name']}\r\n
        //							Телефон: {$roistatData['phone']}\r\n
        //							E-mail: {$roistatData['email']}";
    
        file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
}

    wp_die();
}

function getStatus($number){
	// var_dump($number);
	$url = "http://buffer.shtorm-its.ru/ut_work/hs/obmentest/getstatus/".$number;
	$cURL = curl_init();

	curl_setopt($cURL, CURLOPT_URL, $url);
	curl_setopt($cURL, CURLOPT_USERPWD, "ШикаловН".":"."zFCdyfex546");
	curl_setopt($cURL, CURLOPT_HTTPGET, true);
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

	$result = curl_exec($cURL);
	curl_close($cURL);
	
	return $result;
}

function assets($file) {
    return get_template_directory_uri().$file;
}

?>