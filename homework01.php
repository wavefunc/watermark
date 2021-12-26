<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="p-3 bg-primary text-white text-center">
        <h2>浮水印效果</h2>
    </div>
    <div class="d-flex flex-wrap p-2 justify-content-around">
        <div class="p-2">
            <form action="homework02.php" method="post" enctype="multipart/form-data" target="imgFrame">
                <div class="p-2 input-group">
                    <label for="wmText" class="input-group-text">輸入文字</label>
                    <input type="text" class="form-control" name="wmText" /><br />
                </div>

                <div class="p-2 input-group">
                    <label for="wmColor" class="input-group-text">選擇文字顏色</label>
                    <input type="color" class="form-control form-control-color" name="wmColor" value="#ff0000" /><br />
                </div>

                <div class="p-2 input-group">
                    <label for="wmSize" class="input-group-text">調整文字大小</label>
                    <span class="input-group-text bg-white">
                        <input type="range" name="wmSize" class="form-range" value="24" min="12" max="60" step="2"
                            oninput="this.nextElementSibling.innerText = '&nbsp;' + this.value">
                        <b>&nbsp;24</b>
                    </span>
                </div>

                <div class="p-2 input-group">
                    <label for="wmAngle" class="input-group-text">調整文字角度</label>
                    <span class="input-group-text bg-white">
                        <input type="range" name="wmAngle" class="form-range" value="0" min="-180" max="180"
                            oninput="this.nextElementSibling.innerText = '&nbsp;' + this.value">
                        <b>&nbsp;0</b>
                    </span>
                </div>

                <div class="p-2 input-group">
                    <label for="wmPosX" class="input-group-text">調整文字位置X</label>
                    <span class="input-group-text bg-white">
                        <input type="range" name="wmPosX" class="form-range" value="0" min="0" max="250"
                            oninput="this.nextElementSibling.innerText = '&nbsp;' + this.value">
                        <b>&nbsp;0</b>
                    </span>
                </div>

                <div class="p-2 input-group">
                    <label for="wmPosY" class="input-group-text">調整文字位置Y</label>
                    <span class="input-group-text bg-white">
                        <input type="range" name="wmPosY" class="form-range" value="30" min="30" max="300"
                            oninput="this.nextElementSibling.innerText = '&nbsp;' + this.value">
                        <b>&nbsp;30</b>
                   </span>
                </div>
                <div class="p-2 input-group">
                    <input type="file" name="upload" class="form-control" />
                    <input type="submit" class="btn btn-primary" name="upload" />
                </div>

            </form>
        </div>

        <div class="p-4">
            <iframe name="imgFrame" frameborder="0" scrolling="no" height="300" width="400"></iframe>
        </div>
    </div>


    <!-- https://stackoverflow.com/questions/5733808/submit-form-and-stay-on-same-page -->
    <!-- https://www.w3schools.com/tags/tag_form.asp -->
</body>

</html>