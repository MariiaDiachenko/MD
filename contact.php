<?php
$messages = new Messages();

$formOk = true;
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');

if (!$name || !isValidString($name)) {
  $messages->addAlert('This is not a valid name');
  $formOk = false;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $messages->addAlert('You need to provide valid email');
  $formOk = false;
}

if (!$subject || !isValidString($subject)) {
  $messages->addAlert('This is not a valid subject');
  $formOk = false;
}

if (!$message || !isValidString($message)) {
  $messages->addAlert('This is not a valid message');
  $formOk = false;
}


if ($name && $email && $message && $formOk) {
  try {

    $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance('Test Subject')
      ->setFrom(array('M_sha@ukr.net' => 'Portfiolio'))
      ->setTo(array('M_sha@ukr.net'))
      ->setBody('This is a test mail.');

    $result = $mailer->send($message);
    if ($result) {
      $messages->addSuccess('Message was succesfully send');
    }

  } catch (Exception $e) {
    $messages->addAlert('We were unable to send mail');
  }
}
