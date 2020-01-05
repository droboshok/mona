<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="1;URL=index.html">
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
                 $error    = ''; // сообщение об ошибке
                 $email    = ''; // email отправителя
                 $message  = ''; // сообщение


            if(isset($_POST['subscribe']))
            {
                 $email    = $_POST['address'];

                 if(trim($email) == '')
                {
                    $error = '<div class="errormsg">Пожалуйста, введите Ваш email!</div>';
                }
                    else if(!isEmail($email))
                {
                    $error = '<div class="errormsg">Вы ввели неправильный e-mail. Пожалуйста, исправьте его!</div>';
                }
                if($error == '')
                {
                    // if(get_magic_quotes_gpc())
                    // {
                    //     $message = stripslashes($message);
                    // }

                 
                    // Обязательно укажите здесь Email на который должны приходить письма
                    $to      = "amelin737@gmail.com";
                    $subject = "Подписка на сайт ".$_SERVER['HTTP_REFERER'];
                    $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
                    $message = "Подписка на сайт  \nEmail: ".$_POST['address'];
                    $headers = 'Content-type: text/plain; charset="utf-8"';
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
                    
                    $token = "454332582:AAF-X1mblMJHHR9QvfVicH4UIU-7RqKFSOM";
                    $chat_id = "240502005";
                    $telega_mes = "Подписка на сайт %0AEmail: " .$_POST['address'];
                    
                    mail($to, $subject, $message, $headers);
                    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$telega_mes}","r");
                }
            }

                        function isEmail($email)
            {
                return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
                        ,$email));
            }





            ?>
            
                              <!-- Сообщение отправлено! (можете поменять текст)-->

                  <div style="text-align:center;">
                       <p>Ваша подписка успешно оформлена!</p>
                  </div>
                  <!--End Message Sent-->
           










<!-- E-mail verification. Do not edit -->
 


</body>
</html> 