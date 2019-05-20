$transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('kuba.kulaga.sv@gmail.com' => 'ABC'))
  ->setTo(array('kuba.kulaga.sv7@gmail.com'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);

