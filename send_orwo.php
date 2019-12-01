<? 
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
setlocale(LC_ALL,"ru_RU.utf8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])){ $name=$_POST['name']; }
    if (isset($_POST['tell'])){ $telefon=$_POST['tell']; }
    if (isset($_POST['form-title'])){ $formtitle=$_POST['form-title']; }

  if( $name != "" && $telefon != ""){
     
    $to = "lead@edmschool.ru";
    $sendfrom   = "wordpress@edmschool.ru"; 
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    //$headers .= "Bcc: order@orwo.ru\r\n";
    $subject = "заявка на курс";
    $message = "<p>Телефон с формы &quot;$formtitle&quot;:<br>";
    $message .= "Имя: $name <br>Телефон: $telefon <br><br></p>" ;
    $message .= "<span>--<br>Это сообщение отправлено с сайта EDM SCHOOL<br></span>" ;
    $send = mail ($to, $subject, $message, $headers); 
    
  }
    if ($send == 'true'){
    //echo '<div class="success-block">Спасибо! Ваша заявка принята.<br/>Наш менеджер свяжется с Вами в ближайшее время</div>';
    } else {
    //echo '<div class="fail-block">Ошибка. Сообщение не отправлено!</div>';
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}

?>