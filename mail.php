<?

	$to = 'max_on.89@mail.ru';
	$subject = '��������� ���������� ����� � '.$_SERVER['HTTP_REFERER'];
	$subject = "=?utf-8?b?". base64_encode($subject) ."?=";

	$message = "���: ".$_POST['name']."

                \n�������: ".$_POST['tel']."
                \nIP: ".$_SERVER['REMOTE_ADDR']."
                \n���������: ".$_POST['messageFF'];

	$headers = 'Content-type: text/plain; charset="utf-8"';
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
	mail($to, $subject, $message, $headers);
	echo $_POST['name'];

?>