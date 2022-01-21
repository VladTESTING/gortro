<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
<body>
<?
     
    //Если поступили данные..
    if( isset($_POST['name'],$_POST['phone'])){
         
        $name = trim( htmlspecialchars( substr($_POST['name'], 20) ) );
        $phone = trim( htmlspecialchars( substr($_POST['phone'], 20) ) );
 
        if( $name != '' AND $phone != '' ){
             
            $email = "gor.tro@tut.by";
            $domen = "file:///D:/сайт/html/index.html";
 
            $message = 'Имя: '.$name.'<br>Телефон: '.$phone;
            $headers  = "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: ".$domen." <robot@".$domen.">\r\n";
            $subject = "Обратный звонок";
            mail($email, $subject, $message, $headers);
            echo 1;
 
        }else echo 0;
    }
 
?>
</body>
</html>