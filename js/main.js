(function(){
    'use strict';
    var com1, com2, com3, com4, com5;
    var inCom1, inCom2, inCom3, inCom4, inCom5;
    var inCom2_1,inCom2_2, inCom2_3, inCom2_4, inCom2_5;
    var inCom3_1,inCom3_2, inCom3_3, inCom3_4, inCom3_5;
    var inCom4_1,inCom4_2, inCom4_3, inCom4_4, inCom4_5;
    var inCom5_1,inCom5_2, inCom5_3, inCom5_4, inCom5_5;
    
    var text1 = "ここに文が表示されます";
    var text2 = "ここに会話が表示されます";
    var text3 = "ここにストーリーが表示されます！";
    var text4 = "入力欄から入力して";
    var text5 = "生成ボタンをクリックしてください";
    var temp;
    var speed = 200;
    var stage, Stage;
    var timer;
    var changeCount = 5;
    var talkNumber = 0;
            
    
    //1ページ目
    inCom1 = document.getElementById("inComment1");
    inCom2 = document.getElementById("inComment2");
    inCom3 = document.getElementById("inComment3");
    inCom4 = document.getElementById("inComment4");
    inCom5 = document.getElementById("inComment5");
    
    //2ページ目
    inCom2_1 = document.getElementById("inComment2_1");
    inCom2_2 = document.getElementById("inComment2_2");
    inCom2_3 = document.getElementById("inComment2_3");
    inCom2_4 = document.getElementById("inComment2_4");
    inCom2_5 = document.getElementById("inComment2_5");
    //3ページ目
    inCom3_1 = document.getElementById("inComment3_1");
    inCom3_2 = document.getElementById("inComment3_2");
    inCom3_3 = document.getElementById("inComment3_3");
    inCom3_4 = document.getElementById("inComment3_4");
    inCom3_5 = document.getElementById("inComment3_5");
    //4ページ目
    inCom4_1 = document.getElementById("inComment4_1");
    inCom4_2 = document.getElementById("inComment4_2");
    inCom4_3 = document.getElementById("inComment4_3");
    inCom4_4 = document.getElementById("inComment4_4");
    inCom4_5 = document.getElementById("inComment4_5");
    //5ページ目
    inCom5_1 = document.getElementById("inComment5_1");
    inCom5_2 = document.getElementById("inComment5_2");
    inCom5_3 = document.getElementById("inComment5_3");
    inCom5_4 = document.getElementById("inComment5_4");
    inCom5_5 = document.getElementById("inComment5_5");
    
    
    
    com1 = document.getElementById("comment1");
    com2 = document.getElementById("comment2");
    com3 = document.getElementById("comment3");
    com4 = document.getElementById("comment4");
    com5 = document.getElementById("comment5");
    
    stage = function(){
        this.update = function(){
            if(text1 != ""){
                temp = text1.slice(0, 1);
                text1 = text1.slice(1);
                com1.innerHTML += temp;
            }else if(text2 != ""){
                temp = text2.slice(0, 1);
                text2 = text2.slice(1);
                com2.innerHTML += temp;
            }else if(text3 != ""){
                temp = text3.slice(0, 1);
                text3 = text3.slice(1);
                com3.innerHTML += temp;
            }else if(text4 != ""){
                temp = text4.slice(0, 1);
                text4 = text4.slice(1);
                com4.innerHTML += temp;
            }else if(text5 != ""){
                temp = text5.slice(0, 1);
                text5 = text5.slice(1);
                com5.innerHTML += temp;
            }else{
                changeCount--;
                if(changeCount == 0){
                    this.clear();
                    this.newTalk();
                    changeCount = 3;
                }
            }
            
            timer = setTimeout(function(){
                this.update();
            }.bind(this), speed);
        };
        //ストーリーはここ
        this.newTalk = function(){
            switch(talkNumber){
                case 0:
                    text1 = inCom1.value;
                    text2 = inCom2.value;
                    text3 = inCom3.value;
                    text4 = inCom4.value;
                    text5 = inCom5.value;
                    break;
                case 1:
                    text1 = inCom2_1.value;
                    text2 = inCom2_2.value;
                    text3 = inCom2_3.value;
                    text4 = inCom2_4.value;
                    text5 = inCom2_5.value;
                    break;
                case 2:
                    text1 = inCom3_1.value;
                    text2 = inCom3_2.value;
                    text3 = inCom3_3.value;
                    text4 = inCom3_4.value;
                    text5 = inCom3_5.value; 
                    break;
                case 3:
                    text1 = inCom4_1.value;
                    text2 = inCom4_2.value;
                    text3 = inCom4_3.value;
                    text4 = inCom4_4.value;
                    text5 = inCom4_5.value; 
                    break;
                case 4:
                    text1 = inCom5_1.value;
                    text2 = inCom5_2.value;
                    text3 = inCom5_3.value;
                    text4 = inCom5_4.value;
                    text5 = inCom5_5.value; 
                    break;
                            
                default:
                    clearTimeout(timer);         
            }
            talkNumber++;
                    
        };
        this.clear = function(){
            com1.innerHTML = "";
            com2.innerHTML = "";
            com3.innerHTML = "";
            com4.innerHTML = "";
            com5.innerHTML = "";
        };
    };
    Stage = new stage();
    Stage.newTalk();
    Stage.update();
})();