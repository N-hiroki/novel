<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Ciml.01</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <div id="header">
        <div class="inner">
            <h1>Ciml.01</h1>
        </div>
    </div>
    <div id="form">
        <form method="post" enctype="multipart/form-data" action="novel.php">
            <ul>
                <li><label for="cImage">キャラクター画像: </label><input type="file" name="cImage" id="cImage" accept="image/*">
                </li>
                <li><label for="bImage">背景画像:</label><input type="file" name="bImage" id="bImage" accept="image/*"></li>
                <li><label for="text1">１行目:</label><input type="text" name="text1" id="text1"></li>
                <li><label for="text2">２行目:</label><input type="text" name="text2" id="text2"></li>
                <li><label for="text3">３行目:</label><input type="text" name="text3" id="text3"></li>
                <li><label for="text4">４行目:</label><input type="text" name="text4" id="text4"></li>
                <li><label for="text5">５行目:</label><input type="text" name="text5" id="text5"></li>
                
                
                
                <li><input type="hidden" name="charImage" id="charImage" value=""></li>
                <li><input type="hidden" name="backImage" id="backImage" value=""></li>
            </ul>
            <input type="submit" value="生成">
        </form>
        <div id="addPage">ページ追加</div>
    </div>
    <script>
        (function(){
            'use strict';
            var target, addButton;
            $('#cImage').change(function(){
                if(this.files.length > 0){
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);

                    reader.onload = function(){
                        $('#charImage').attr('value', reader.result);
                    }
                }
            });
            $('#bImage').change(function(){
                if(this.files.length > 0){
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);

                    reader.onload = function(){
                        $('#backImage').attr('value', reader.result);
                    }
                }
            });
            
            //親要素
            var target = document.getElementsByTagName("ul")[0];
            //ボタン
            var addButton = document.getElementById("addPage");
            //ページカウント
            var pageCount = 2;
            
            addButton.addEventListener("click", function(){
                if(pageCount <= 5){
                    for(var i = 0; i <= 5; i++){
                        //タグを追加する要素
                        var liTag = document.createElement("li");

                        //labelTag
                        var labelTag = document.createElement("label");
                        if(i == 0){
                            labelTag.innerHTML = pageCount + "ページ目";
                            labelTag.setAttribute("style", "font-size:20px; margin-left:30%; font-weight: bold;");
                        }else{
                            labelTag.setAttribute("for", "text" + i);
                            labelTag.innerHTML = i + "行目:";
                        }
                        liTag.appendChild(labelTag);


                        //input
                        if(i > 0){
                            var inputTag = document.createElement("input");
                            inputTag.setAttribute("type", "text");
                            inputTag.setAttribute("name", pageCount + "Text" + i);
                            inputTag.setAttribute("id", pageCount + "Text" + i);
                            liTag.appendChild(inputTag);
                        }


                        target.appendChild(liTag);
                    }
                    pageCount++;
                }else{
                    var liTag = document.createElement("li");
                    var pTag = document.createElement("p");
                    pTag.innerHTML = "５ページまでです。";
                            pTag.setAttribute("style", "font-size:20px; margin-left:30%; font-weight: bold; color: red;");
                    liTag.appendChild(pTag);
                    target.appendChild(liTag);
                }
                
            }, false);
        })();
        
    </script>
</body>
</html>