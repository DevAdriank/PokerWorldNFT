<?php

var_dump("11111111");
die();
include("mailer/src/PHPMailer.php")

    $mail = new PHPMailer\PHPMailer\PHPMailer();

try{

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $this->_host;
    $mail->Port = $this->_port;
    $mail->SMTPAuth = $this->_SMTPAuth;
    $mail->SMTPSecure = $this->_SMTPSecure;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer'=> false,
            'verifi_peer_name' => false,
            'allo_self_signed' => true
        )
        );
    $mail->Username = $this->_Username;
    $mail->Password = $this->_Password;
    $mail->SetFrom($this->_Username, $this->_nameEmail);

        if (is_array($emailto)) {
            foreach ($emailTo as $key => $value){
                $mail->addAddress($value);
            }
        }else {
            $mail->addAddress($emailTo);
        }
        $mail->isHTML(true);
        $mail->Subject = $subject;
    
} catch (Exception $e){

}

?>