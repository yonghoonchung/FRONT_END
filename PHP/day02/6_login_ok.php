<?php
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <?php //php 태그 안에 적는방법
        // if($userid == "admin" && $userpw == "1234"){
        //     echo "<h2>로그인</h2>";
        //     echo "<p>{$userid}님 환영합니다</p>";
        // }else{
        //     echo "<script>\nalert('로그인 실패! 아이디 또는 비밀번호를 확인하세요!');\n";
        //     echo "history.back();\n</script>";
        // }
    ?>


    <?php //php 태그 밖에 적는방법
        if($userid == "admin" && $userpw == "1234"){
    ?> 
    <!-- php if문 안에 있는 것으로 처리 -->
    <h2>로그인</h2>
    <p><?=$userid?>님 환영합니다</p>
    <?php
        }
        else{
    ?>
        <script>
            alert("로그인 실패! 아이디 또는 비밀번호를 확인하세요!")
            history.back();
        </script>
    <?php
        }
    ?>

    
</body>
</html>