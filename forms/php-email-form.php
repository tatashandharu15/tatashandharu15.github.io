<?php

// class PHP_Email_Form {
//     public $to;
//     public $from_name;
//     public $from_email;
//     public $subject;
//     public $smtp = array();
//     public $messages = array();
//     public $ajax = false;

//     public function add_message($content, $label, $priority = 10) {
//         $this->messages[] = array(
//             'content' => $content,
//             'label' => $label,
//             'priority' => $priority
//         );
//     }

//     public function send() {
//         $message_body = "";

//         // Build the message body from the messages array
//         foreach($this->messages as $message) {
//             $message_body .= $message['label'].": ".$message['content']."\n";
//         }

//         // Set headers
//         $headers  = "MIME-Version: 1.0" . "\r\n";
//         $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
//         $headers .= "From: " . $this->from_name . " <" . $this->from_email . ">" . "\r\n";

//         // Send the email
//         if(mail($this->to, $this->subject, $message_body, $headers)) {
//             return "Email berhasil dikirim!";
//         } else {
//             return "Email gagal dikirim.";
//         }
//     }
// }
?>
