<html>
<head>
	<title>mail</title>
</head>
<body
<a>this is a test</a>
<?php


$text = "who are you ";

include_once("../class.phpmailer.php"); 
$mail = new PHPMailer(true); 
$mail->CharSet = "UTF-8";
$address ="2579806823@qq.com";//接收邮箱地址
$mail->IsSMTP(); // 使用SMTP方式发送
$mail->Host = "smtp.126.com"; // 您的邮箱域名
$mail->SMTPAuth = true; // 启用SMTP验证功能
$mail->Username = "Atlanti_c@126.com"; // 发送者邮箱用户名(请填写完整的email地址)
$mail->Password = "Z15091199172"; // 邮局密码
$mail->Port=25;
$mail->From = "Atlanti_c@126.com"; //邮件发送者email地址
$mail->FromName = "Bemo-XSS success!";
$mail->AddAddress("$address", "a");
$mail->IsHTML(true); //是否使用HTML格式

$mail->Subject = "Bemo-XSS success!"; //邮件标题
$mail->Body = $text; //邮件内容，上面设置HTML，则可以是HTML

if(!$mail->Send())
{
echo "邮件发送失败. <p>";
echo "错误原因: " . $mail->ErrorInfo;
exit;
}

?>
</body>
</html>