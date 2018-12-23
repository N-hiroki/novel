<?php
    $cImage = "";
    $bImage = "";
    $text1 = "";
    $text2 = "";
    $text3 = "";
    $text4 = "";
    $text5 = "";
    $_2text1 = $_2text2 = $_2text3 = $_2text4 = $_2text5 = "";
    $_3text1 = $_3text2 = $_3text3 = $_3text4 = $_3text5 = "";
    $_4text1 = $_4text2 = $_4text3 = $_4text4 = $_4text5 = "";
    $_5text1 = $_5text2 = $_5text3 = $_5text4 = $_5text5 = "";
    if(isset($_POST["charImage"])){
        $cImage = htmlspecialchars($_POST["charImage"]);
    }

    if(isset($_POST["backImage"])){
        $bImage = htmlspecialchars($_POST["backImage"]);
    }
    //1ページ目
    if(isset($_POST["text1"])){
        $text1 = htmlspecialchars($_POST["text1"]);
    }
    if(isset($_POST["text2"])){
        $text2 = htmlspecialchars($_POST["text2"]);
    }
    if(isset($_POST["text3"])){
        $text3 = htmlspecialchars($_POST["text3"]);
    }
    if(isset($_POST["text4"])){
        $text4 = htmlspecialchars($_POST["text4"]);
    }
    if(isset($_POST["text5"])){
        $text5 = htmlspecialchars($_POST["text5"]);
    }
    //2ページ目
    if(isset($_POST["2Text1"])){
        $_2text1 = htmlspecialchars($_POST["2Text1"]);
    }
    if(isset($_POST["Ttext2"])){
        $_2text2 = htmlspecialchars($_POST["2Text2"]);
    }
    if(isset($_POST["2Text3"])){
        $_2text3 = htmlspecialchars($_POST["2Text3"]);
    }
    if(isset($_POST["2Text4"])){
        $_2text4 = htmlspecialchars($_POST["2Text4"]);
    }
    if(isset($_POST["2Text5"])){
        $_2text5 = htmlspecialchars($_POST["2Text5"]);
    }
    //3ページ目
    if(isset($_POST["3Text1"])){
        $_3text1 = htmlspecialchars($_POST["3Text1"]);
    }
    if(isset($_POST["3Text2"])){
        $_3text2 = htmlspecialchars($_POST["3Text2"]);
    }
    if(isset($_POST["3Text3"])){
        $_3text3 = htmlspecialchars($_POST["3Text3"]);
    }
    if(isset($_POST["3Text4"])){
        $_3text4 = htmlspecialchars($_POST["3Text4"]);
    }
    if(isset($_POST["3Text5"])){
        $_3text5 = htmlspecialchars($_POST["3Text5"]);
    }
    //4ページ目
    if(isset($_POST["4Text1"])){
        $_4text1 = htmlspecialchars($_POST["4Text1"]);
    }
    if(isset($_POST["4Text2"])){
        $_4text2 = htmlspecialchars($_POST["4Text2"]);
    }
    if(isset($_POST["4Text3"])){
        $_4text3 = htmlspecialchars($_POST["4Text3"]);
    }
    if(isset($_POST["4Text4"])){
        $_4text4 = htmlspecialchars($_POST["4Text4"]);
    }
    if(isset($_POST["4Text5"])){
        $_4text5 = htmlspecialchars($_POST["4Text5"]);
    }
    //5ページ目
    if(isset($_POST["5Text1"])){
        $_5text1 = htmlspecialchars($_POST["5Text1"]);
    }
    if(isset($_POST["5Text2"])){
        $_5text2 = htmlspecialchars($_POST["5Text2"]);
    }
    if(isset($_POST["5Text3"])){
        $_5text3 = htmlspecialchars($_POST["5Text3"]);
    }
    if(isset($_POST["5Text4"])){
        $_5text4 = htmlspecialchars($_POST["5Text4"]);
    }
    if(isset($_POST["5Text5"])){
        $_5text5 = htmlspecialchars($_POST["5Text5"]);
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Ciml.01</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/novel.css">
</head>
<style>
    body{
        background-image: url(<?=$bImage?>);
    }    
</style>
<body>
    <img src="<?=$cImage?>" id="character" alt="">
    <div id="commentSpace">
        <p id="comment1"></p>
        <p id="comment2"></p>
        <p id="comment3"></p>
        <p id="comment4"></p>
        <p id="comment5"></p>
    </div>

    <input type="hidden" value="<?=$text1?>" id="inComment1">
    <input type="hidden" value="<?=$text2?>" id="inComment2">
    <input type="hidden" value="<?=$text3?>" id="inComment3">
    <input type="hidden" value="<?=$text4?>" id="inComment4">
    <input type="hidden" value="<?=$text5?>" id="inComment5">
    
    <input type="hidden" value="<?=$_2text1?>" id="inComment2_1">
    <input type="hidden" value="<?=$_2text2?>" id="inComment2_2">
    <input type="hidden" value="<?=$_2text3?>" id="inComment2_3">
    <input type="hidden" value="<?=$_2text4?>" id="inComment2_4">
    <input type="hidden" value="<?=$_2text5?>" id="inComment2_5">
    
    <input type="hidden" value="<?=$_3text1?>" id="inComment3_1">
    <input type="hidden" value="<?=$_3text2?>" id="inComment3_2">
    <input type="hidden" value="<?=$_3text3?>" id="inComment3_3">
    <input type="hidden" value="<?=$_3text4?>" id="inComment3_4">
    <input type="hidden" value="<?=$_3text5?>" id="inComment3_5">
    
    <input type="hidden" value="<?=$_4text1?>" id="inComment4_1">
    <input type="hidden" value="<?=$_4text2?>" id="inComment4_2">
    <input type="hidden" value="<?=$_4text3?>" id="inComment4_3">
    <input type="hidden" value="<?=$_4text4?>" id="inComment4_4">
    <input type="hidden" value="<?=$_4text5?>" id="inComment4_5">
    
    <input type="hidden" value="<?=$_5text1?>" id="inComment5_1">
    <input type="hidden" value="<?=$_5text2?>" id="inComment5_2">
    <input type="hidden" value="<?=$_5text3?>" id="inComment5_3">
    <input type="hidden" value="<?=$_5text4?>" id="inComment5_4">
    <input type="hidden" value="<?=$_5text5?>" id="inComment5_5">
    <script src="js/main.js"></script>
</body>
</html>