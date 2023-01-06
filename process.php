<?php

class SendData
{


    const API_URL = 'http://127.0.0.1:8001/controllers/registration.php';


    public function getData()
    {

        $form_data = [
            'nickname' => $_POST['nickname'],
            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'card_number' => $_POST['card_number'],
            'card_date' => $_POST['card_date'],
            'card_code' => $_POST['card_code'],
            'payment' => $_POST['payment']
        ];


        return $form_data;

    }

    public function send()
    {

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, self::API_URL);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->getData());
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 300);

        if (($result = curl_exec($curl)) === FALSE) {
            echo 'cURL error: ' . curl_error($curl);
        }
        curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        return $result;
    }
}

$send = new SendData();
$send->send();
header('Location: http://127.0.0.1:8001/web/index.php');


