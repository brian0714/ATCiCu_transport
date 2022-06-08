<?php
    $link = mysqli_connect("localhost", "root", "");
    if($link){
        //echo "成功連線";
    }else{
        echo "連線失敗";
        exit(); //end program
    }

    $flag = mysqli_select_db($link,"atcicu_contact");
    if ($flag){
        //echo "成功連線";
    }else{
        print "資料庫不可用";
        exit();
    }

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['content'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $content = $_POST['content'];
        //$_SESSION['acname'] = $_POST['name'];
        //echo $_SESSION['acname'];
    }else{
        header('Location: index.php?msg=請確認每欄皆有填入!');
    }
    $query = "INSERT INTO `contact`(`name`, `email`, `phone`, `content`) VALUES ('{$name}','{$email}','{$phone}','{$content}')";
    
    if(mysqli_query($link, $query)){
        header("Location: index.php?msg=成功送出");
    }








?>