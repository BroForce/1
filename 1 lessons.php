<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head> <!-- шапка -->
        <title> Первые уроки </title> <!-- заголовок всей страницы -->
        <meta name="author" content="Alexey Myshlyaev" />
        <meta name="copyright" content="Copyright 2014 TED" />
        <meta name="description" content="text/html'Изучаем шапку докупента" />
        <meta name="robots" content="noindex" />
        <meta http-equiv="content-lenguage" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="test/text.css" />
        <link rel="shortcut icon" href="http://test.ru/favicon.ico" /> <!-- иконка страницы -->
    </head>
    <body> <!-- тело документа -->
        <form action="form.php" method="post"> <!-- формы: action-адрес расположения файла обработчика формы, method="get(данные формы передаются через адр.строку) или post(в закр.режиме,только после соединения с сервером)" -->
            <fieldset> <!-- объединение форм в группы -->
            <legend>Авторизация</legend> <!-- подпись группы --> 
            Логин: <br />
            <input name="login" type="text" size="50" value="email" /> <br /> <!-- name-имя эл-та формы, type-тип эл-та("text"-поле для ввода текстовой инф.), size-длинна поля(в симв.), value-значение по ум. -->
            Пароль: <br />
            <input name="pass" type="password" size="50" /> <br />
            </fieldset>
            <fieldset>
            <legend>Регистрация</legend>
            Введите Ваш email: <br />
            <input name="email" type="text" size="50" value="email" /> <br /> <!-- name-имя эл-та формы, type-тип эл-та("text"-поле для ввода текстовой инф.), size-длинна поля(в симв.), value-значение по ум. -->
            Пароль: <br />
            <input name="password" type="password" size="50" /> <br />
            Повторите пароль: <br />
            <input name="password2" type="password" size="50" /> <br />
            Пол: <br />
            <input type="radio" name="sex" value="female"/> Женщина <br /> <!-- "radio"-кнопки для выбора одного варианта -->
            <input type="radio" name="sex" value="male" checked="" /> Мужчина <br /> <!-- checked-чтобы эта кнопка была выбрана по ум. -->
            Возможности: <br />
            <input type="checkbox" name="news" /> Новости <br /> <!-- "checkbox"-кнопки с выбором нескольких вариантов -->  
            <input type="checkbox" name="rss" /> Подписаться на рассылку <br />
            <input type="checkbox" name="actions" /> Учавствовать в акциях <br />
            Загрузить фото:
            <input type="file" size="50" />  <br /> <!-- "file"-для загрузки файла в форму -->
            Выберите год рождения:
            <select> <!-- раскрывающийся список выбора  -->
                <option value="1993" /> 1993 <!-- элементы списка выбора -->
                <option value="1994" /> 1994
                <option value="1995" /> 1995
                <option value="1996" /> 1996
                <option value="1997" /> 1997
                <option value="1998" /> 1998
            </select> <br />
            <select multiple size="3" /> <!-- делает список не раскрывающимся, а уже раскрытыми на параметр size ответами -->
                <optgroup label="Год"> <!-- объединение в группы внутри списка -->
                    <option value="1993" /> 1993 
                    <option value="1994" /> 1994
                    <option value="1995" /> 1995
                </optgroup>
                <optgroup label="Месяц">
                    <option value="январь" /> январь
                    <option value="февраль" /> февраль
                    <option value="март" /> март
                </optgroup>
            </select> <br />
            <textarea rows="3" cols="50"> Пример </textarea> <br /> <!--поле для ввода текста: rows-высота поля в стоках, cols-ширина в символах; между тегами текст по умолчанию -->
            <input type="reset" value="Сброс" /> <!-- "reset"-для сброса формы -->
            <input type="submit" value="Зарегистрироваться" /> <br /> <!-- "submit"-отправить форму -->
            </fieldset>
            
        </form>
        <a name ="top"></a> <!-- "якорь" с названием "top" -->
        <h1>Заголовок</h1> <!-- заголовок: h1,h2,h3,h4,h5,h6 - величина от большего к меньшему -->
        <a href="#end"><img src="111.jpg" width="200" height="200" alt="Отжимания" hspace="100" border="5" alight="right" /></a> <br /> <!-- какринка со ссылкой на конец страницы, hspace-отступ текста(в px), border-рамка, alight="left,right"- с какой стороны от текста будет располагаться картинка(обтекание) -->
        <div style="border: 1px solid black;"> 
            <p>Текст параграфа 1</p>
            <p>Текст параграфа 2</p>
            текст <br /> текст
        </div>
        <hr /> <!-- сплошная линия на ширину всех страницы -->
        <br clear="all" /> <!-- "left,right или all" - прекращение обтекания текстом картинок -->
        <ul type ="circle"> <!-- список обычный (либо "disk", "square") -->
            <li>строка 1</li> <!-- тег, соответствующий одной строке -->
            <li>строка 2</li>
            <li>строка 3</li>
        </ul>
        <ol type ="I" start="4"> <!-- список нумерованный ("1"-арабские,"I"(или "i")-арабские,"a"(или "A")-буквами); так же с какой строки мы стартуем(start) -->
            <li>строка 4</li>
            <li>строка 5</li>
            <li>строка 6</li>
        </ol>
        <dl> <!-- тег для списка определений -->
            <dt> Термин </dt>
            <dd> описание термина </dd>
        </dl>
        <table border="1" cellspacing="10" cellpadding="10" width="250" height="200" align="center"> <!-- таблица: cellspacing-отступы между ячейками, cellpadding-отступ внутри ячейки -->
            <caption align="bottom">Тестовая таблица 1</caption> <!-- заголовок таблицы, align-выравнивание("bottom-смещаем вниз и выравниваем по центру") -->
            <tr> <!-- строка таблицы -->
                <td colspan="2" align="center">1.1 - 1.2</td> <!-- ячейка в строке, callspan-объединение ячеек в строке-->
                <td rowspan="2" align="center" bgcolor="#888815">1.3</td> <!-- rowspan-объединение ячеек в стобце, bgcolor-цвет фона ячейки -->
            </tr>
            <tr>
                <td rowspan="2" colspan="2" valign="baseline">2.1</td> <!-- valign-вертикальное выравнивание: "baseline"-по базовой линии, "bottom"-по нижнему краю, "middle"-по середине(по ум.), "top"-по верхнему краю -->
                
            </tr>
            <tr>
              
                <td align="center">3.3</td>
            </tr>
            
        </table>
                
        
        
        <img src="logo.jpg" width="50%" height="60%" alt="альтернативный текст если картинка не загрузилась" title="Всплывающая подсказка" /> <!-- вставка картинки, width и height могут быть в рикселях(100px) -->
        <br />
        <a href="http://vk.com" target="_blank" title="Всплывающая подсказка">Внешняя обычная ссылка</a> <br /> <!-- "_blank" -открывает ссылку в новом окне,"_parent" -в родительском окне, "_self"(по ум.)-в этом же окне, "_top" -отменяет все фреймы и открывает ссылку в полном окне(не используется) -->
        <a href="#top">Перейти в начало</a> <br /> <!-- "#" нужна для указания внутренней ссылки -->
        <a href="mailto: ghost-yar@rambler.ru">Отправить письмо</a> <br /> <!-- ссылка на эл. почту -->
        <a name ="end"></a>
    </body>
<!--  -->    
</html>