<?php

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $text = trim($_POST['text']);

    // 1.自分のメール
    // 2.件名
    // 3.メッセージ内容

    $myMail = "hcouragene@icloud.com";
    $header = "from customor's mail: ".$email;
    $message = "contents of text:\n\n".$text;

    // この順番は決まっている
    mail($myMail,$subject,$message,$header);
    header("Location:index.php?succecefulToSend");
}else{
    echo "送信に成功しました。";
}



?>


<form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="your mail">
            <input type="text" name="subject" placeholder="件名">
            <textarea name="text" placeholder="内容を入力してください"></textarea>
            <button type="submit" name="submit">send</button>
        </form>
