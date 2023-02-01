<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="/add/2s.css">
    <script src="/JavaScript/js.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="set_4">
        <form action = "php.php" method = "post">
            <div>
                <fieldset>
                    <legend>Данные о пользователе</legend>
                        <p>Ваше имя:</p>
                        <input class="but" type="text" id="name" name="name" value="">
                        <p>Ваше фамилия:</p>
                        <input class="but" type="text" id="famel" name="famel" value="">
                        <p>Ваше отчество:</p>
                        <input class="but" type="text" id="other" name="other" value="">
                        <p>Ваш телефон</p>
                        <input class="but" type="text" id="tel" name="tel" value="">
                        <p>Желаемая дата:</p>
                        <input class="but" type="text" id="data" name="data" value="">
                        <div>
                            <p>Ваш вид работы:</p>
                            <input type='radio' name='s' value='m' id="px" onclick="ab()"/> Банер <br/>
                            <input type='radio' name='s' value='f' id="sx" onclick="bb()"/> Визитка<br/>
                            <input type='radio' name='s' value='f' id="дx" onclick="cb()"/> Флаер
                        </div> 
                        <legend>Ваш заказ</legend>
                    <div class="set_5">
                        <input id="itog" name="itog" value = ""></input>
                        <input id = "str" name = "str" value = ""></input>
                        
                        
                    </div>
                </fieldset>
            </div>
            <div>
            
           
            </div>
            <div>
            <button name = "save" > Сохранить</button>
            
        </div>
        </form>
        <button onclick="delet()"  readonly>Отчистить</button>
      
    </div>
   
</body>
</html>