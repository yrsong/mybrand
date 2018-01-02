<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
    var FONTSAMLL = '12px';
    var FONTMIDDLE = '18PX';
    var FONTLARGE = '24px';

    var BACKCOLORBLACKIMG = "http://eunrocket.synology.me:6111/img/bag_black.png";
    var BACKCOLORWHITEIMG = "http://eunrocket.synology.me:6111/img/bag_white.png";

    var POSTIONTOP = "100";
    var POSITIONMIDDLE = "150";
    var POSITIONBOTTOM = "220";

    $(function() {
        //텍스트 입력시 하단 에코백 영역에 바로 텍스트 삽입
        $(".brand-text").focusout(function(){
            if (!$(this).val()) {
                return;
            }
            $(".bag-text").html($(this).val().replace(/\n/g, "<br>"));
        });

        //폰트 사이즈 반영
        $('input[type=radio][name=size]').change(function() {
            var size;
            if ($(this).val() === 'small') {
                size = FONTSAMLL;
            } else if ($(this).val() === 'middle') {
                size = FONTMIDDLE;
            } else if ($(this).val() === 'large') {
                size = FONTLARGE;
            }
            $(".bag-text").css("font-size", size);
        });

        //폰트 스타일 반영
        $('select[name="font"]').change(function() {
            $(".bag-text").css("font-family", $(this).val());
        });

        //텍스트 굵게 할지 반영
        $('input[type=radio][name=bold]').change(function() {
            $(".bag-text").css("font-weight", $(this).val());
        });

        //에코백 색상 반영
        $('input[type=radio][name=bag-color]').change(function() {
            var url;
            if ($(this).val() ===  "black") {
                url = BACKCOLORBLACKIMG;
            } else if ($(this).val() ===  "white") {
                url = BACKCOLORWHITEIMG;
            }
            $(".result div img").attr("src", url);
        });

        //텍스트 컬러 반영
        $('input[type=radio][name=color-text]').change(function() {
                $(".bag-text").css("color", $(this).val());
        });

        //텍스트 위치 반영
        $('input[type=radio][name=position]').change(function() {
                var top;
                if ($(this).val() === 'top') {
                    top = POSTIONTOP;
                } else if ($(this).val() === 'middle') {
                    top = POSITIONMIDDLE;
                } else if ($(this).val() === 'bottom') {
                    top = POSITIONBOTTOM;
                }
                $(".bag-text").css("top", top);
        });
    });
    </script>
    <body>
            <header>
            </header>
            <div id="content">
                <div id="main">
                    <div class= "brand-type">
                        <p>브랜드로 제작할 이미지 또는 텍스트를 입력해주세요</p>
                        <div class="radio-band-type">
                            <input type="radio" id="typeChoice1"
                             name="type" value="image">
                            <label for="typeChoice1">이미지</label>

                            <input type="radio" id="typeChoice2"
                             name="type" value="text"  checked="checked">
                            <label for="typeChoice2">텍스트</label>
                        </div>
                        <textarea class="brand-text">
                        </textarea>
                        <div class="brand-text-size">
                            <span>글씨 크기</span>
                            <input type="radio" id="sizeChoice1"
                             name="size" value="small">
                            <label for="sizeChoice1">작게</label>

                            <input type="radio" id="sizeChoice2"
                             name="size" value="middle"  checked="checked">
                            <label for="sizeChoice2">중간</label>

                            <input type="radio" id="sizeChoice3"
                             name="size" value="large"  checked="checked">
                            <label for="sizeChoice3">크게</label>
                        </div>
                        <div class="brand-text-font">
                            <span>글씨체</span>
                            <select name="font">
                                <option value="돋움">돋움</option>
                                <option value="굴림">굴림</option>
                                <option value="궁서">궁서</option>
                            </select>
                        </div>
                        <div class="brand-text-bold">
                            <span>글씨 두께</span>
                            <input type="radio" id="boldChoice1"
                             name="bold" value="normal"  checked="checked">
                            <label for="boldChoice1">중간</label>

                            <input type="radio" id="boldChoice2"
                             name="bold" value="bold"  checked="checked">
                            <label for="boldChoice2">두껍게</label>
                        </div>
                        <div class="brand-bag-color">
                            <span>에코백 색상</span>
                            <input type="radio" id="bagChoice1"
                             name="bag-color" value="black"  checked="checked">
                            <label for="bagChoice1">블랙</label>

                            <input type="radio" id="bagChoice2"
                             name="bag-color" value="white" >
                            <label for="bagChoice2">화이트</label>
                        </div>
                        <div class="brand-text-color">
                            <span>브랜드 색상</span>
                            <input type="radio" id="colorChoice1"
                             name="color-text" value="pink"  checked="checked" >
                            <label for="bagChoice1" style="color:pink; font-weight: bold;">핑크</label>

                            <input type="radio" id="bagChoice2"
                             name="color-text" value="blue" >
                            <label for="bagChoice2" style="color:blue; font-weight: bold;">블루</label>

                            <input type="radio" id="bagChoice2"
                             name="color-text" value="green" >
                            <label for="bagChoice2" style="color:green; font-weight: bold;">그린</label>

                    </div>
                    <div class="result" style="height:300px">
                        <div style="width:180px; margin: 0 auto; position: relative;">
                        <img src="http://eunrocket.synology.me:6111/img/bag_black.png" style="height: 100%;">

                        <p class="bag-text"  style="position:absolute;  text-align: center;color:red; top: 220px;  bottom: 0;   word-wrap: break-word; width:100%;  ">텍스트</p>
                    </div>
                    </div>
                    <div class="brand-text-position">
                        <span>자수 위치</span>
                        <input type="radio" id="positioniChoice1"
                         name="position" value="top">
                        <label for="positionChoice1">상단</label>

                        <input type="radio" id="positioniChoice2"
                         name="position" value="middle"  checked="checked">
                        <label for="positioniChoice2">중간</label>

                        <input type="radio" id="positioniChoice3"
                         name="position" value="bottom"  checked="checked">
                        <label for="positioniChoice3">하단</label>
                    </div>
                    <div class="btn_area">
                        <button><a href="./complete.php">완료하기</a></button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html>
