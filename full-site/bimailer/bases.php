<?php header(_4r(0));header(_4r(1)); ?><!doctype html><html lang="ru"><head><meta charset="utf-8" /><title>BiMailer</title><meta name="author" content="BusMail.ru"><link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png"><link rel="stylesheet" href="/bimailer/extra/style.css"><link rel="stylesheet" href="/bimailer/extra/menu.css"><link rel="stylesheet" href="/bimailer/extra/table.css"><script src="/bimailer/extra/jquery.js"></script><script src="/bimailer/extra/allsite.js"></script><script src="/bimailer/extra/bases.js"></script><script src="/bimailer/extra/upload.js"></script><style>section:first-of-type{padding:0;}.adfil td{color:rgba(0,0,0,0.3);border-top:1px dashed #999999;border-bottom:1px dashed #999999;}.adfil td input{opacity:0.1;}.adfil td img{opacity:0.3;}.adfil td:first-child{border-left:1px dashed #999999;}.adfil td:last-child{border-right:1px dashed #999999;}.addbg{color:rgba(0,0,0,1);text-align:center;position:absolute;width:972px;background:rgba(255,255,255,0.5);height:23px;margin-top:-6px;margin-left:-2px;padding-top:5px;z-index:10;}.dynamic_bg{position:absolute;height:100%;margin-top:-5px;background:rgba(114,225,0,0.5);width:0%;}.modal td{position:relative;}.modal{margin-bottom:0px;}body,td,th {font-family: Whitney, Helvetica, Arial, sans-serif;}</style></head><?php require_once _4r(2);is_array($INT)?:require_once _4r(3);$min=min((int)ini_get(_4r(4)),(int)ini_get(_4r(5))); ?><body><?php require_once _4r(6); ?><h1>Списки email</h1><section><input type="hidden" name="maxfilesize" value="<?=$min?>"><table class="modal" cellpadding="2" cellspacing="1" border="0" width="1000"><tr><th width="250"><span data-title="Название email списка. Используется так же, как название категории в форме подписки">Название</span></th><th width="40"><span data-title="Количество email адресов в списке">Кол.</span></th><th><span data-title="Исключительно информативное поле">Описание</span></th><th width="145">Действия</th></tr><?php $fiok=mysqli_query($s,_4r(7));$u=1;$conf=mysqli_fetch_assoc(mysqli_query($s,_4r(8)));while($row=mysqli_fetch_assoc($fiok)){$cou=mysqli_fetch_row(mysqli_query($s,_4r(9) .$row[_4r(10)]));if($row[_4r(11)]==_4r(12)){$isp=_4r(13);}else{$isp=NULL;}if($row[_4r(14)]==$conf[_4r(15)]){$not=_4r(16);$not1=_4r(17);$not2=_4r(18);}else{unset($not,$not1,$not2);}echo _4r(19) .@$not ._4r(20) .$row[_4r(21)] ._4r(22) .@$not1 .htmlspecialchars($row[_4r(23)],ENT_QUOTES) ._4r(24) .$cou[0] ._4r(25) .htmlspecialchars($row[_4r(26)],ENT_QUOTES) ._4r(27) .@$not2 ._4r(28);$u++;} ?><tr id="addrow"><td colspan="2"><input type="text" name="spis" placeholder="название списка"></td><td><input type="text" name="opis" placeholder="описание списка"></td><td id="adsp">Создать список</td></tr></table><input style="display:none;" accept=".csv,.txt,.xlsx" type="file" multiple  name="file[]" /><span id="res">Лог ошибок:<!--Размер передаваемых файлов на этом хостинге ограничен <?=$min?>Mб'ами (php.ini), файлы свыше <?=$min?>Mб. будут игнорированы: --></span><br><br></section><h1>Дополнительно</h1><section><span style="color:#9f1d16">*Список email для отписавшихся:</span> <select id="nazn" name="otpis"><option value="none">Не указана</option><?php $fk=mysqli_query($s,_4r(29));while($rv=mysqli_fetch_assoc($fk)){if($rv[_4r(30)]==$conf[_4r(31)]){echo _4r(32) .$rv[_4r(33)] ._4r(34) .$rv[_4r(35)] ._4r(36);}else{echo _4r(37) .$rv[_4r(38)] ._4r(39) .$rv[_4r(40)] ._4r(41);}} ?></select>&nbsp;&nbsp;&nbsp;Формат скачивания списка:<?php $form=mysqli_fetch_assoc(mysqli_query($s,_4r(42))); ?><select  name="fotmat"><option value="csv" <?=$form[_4r(43)]== _4r(44)?_4r(45):_4r(46)?>>csv</option><option value="txt" <?=$form[_4r(47)]== _4r(48)?_4r(49):_4r(50)?>>txt (Столбец A)</option><option value="xlsx" <?=$form[_4r(51)]== _4r(52)?_4r(53):_4r(54)?>>xlsx</option><option value="debag" <?=$form[_4r(55)]== _4r(56)?_4r(57):_4r(58)?>>xlsx debag</option></select><br></section><section style="background:none"><center><div class='viewport'><ul class='slidewrapper' data-current=0><li><h3>Массовое создание списков email</h3><p>Используйте горячие клавиши:<br><strong>Tab</strong> - для переключения между полями НАЗВАНИЕ и ОПИСАНИЕ<br><strong>Enter</strong> (клик <span style="background:#439228; color:#FFF; text-shadow:none">Создать список</span>) - для создания очередного списка. Что очень удобно при массовом формировании.</p></li><li><h3>Способ загрузки баз email и перетаскивание</h3><p>Перетащите один или несколько файлов на нужную строчку в таблице &quot;Списки email&quot;, либо выберите необходимые файлы по нажатию <img src="images/help/bases_add.png" style="vertical-align:middle"></p></li><li><h3>Формат поддерживаемых файлов</h3><p style="text-indent:0px;"><strong>.XLSX(excel 2007+)</strong> - email адреса указываются в столбе А по 1шт./1строкe<br><strong>.CSV(разделитель точка с запятой)</strong> - email адреса указываются в столбе А 1шт./1строкe<br><strong>.TXT</strong> - один email адрес на строчке</p></li><li><h3>Имя и описание списка email</h3><p>Двойной клик мышкой по полю &quot;<em><strong>Описание</strong></em>&quot; существующего списка разрешает редактирование. Клик мышкой вне поля, сохраняет изменения.</p><center><img src="images/help/bases_edit.png" style="border: 1px #455A7E dashed;"></center></li><li><h3>Синхронизация списков</h3><p>Нажатие на кнопку <img src="images/help/bases_synh.png" style="vertical-align:middle">, без предупреждения удаляет email адреса, которые так же имеются в <span style="color:#9f1d16">*Списке для отписавшихся</span>. Меняйте на время <span style="color:#9f1d16">*Список отписчиков</span>, для синхронизации любых баз между собой. При загрузке адресов, синх. производится автоматически.</p></li><li><h3>Столбцы из файлов CSV и XLSX</h3><p>При необходимости загрузки контактов с данными в 4-ех и более столбцах, сначала создайте доп. столбцы в режиме <img src="images/help/bases_pencil.png" style="vertical-align:middle">. Иначе данные из столбца, например D, добавлены в список не будут.</p></li><li><h3>Так бывает</h3><p>XLSX не парсится. Нужно его пересохранить перед загрузкой, т.к. как у файлов XLSX скаченных с сети, запрещено редактирование.  Если не помогло, нужно делить данный файл на несколько маленьких.</p></li><li><h3>Формат скачивания базы &quot;<em><strong>xlsx debag</strong></em>&quot;</h3><p>Формат &quot;<em><strong>xlsx debag</strong></em>&quot; отдает максимум оперативной памяти хостинга на формирование XLSX файла. Его следует указывать только в случае, если список не скачивается в обычном &quot;<em><strong>xlsx</strong></em>&quot;  фортмате по причине своей увесистости.</p></li>    </ul>    <div class="slideline"><span class="next" onClick="nextSlide('x')">&lt;&lt;</span><span class="next" onClick="nextSlide('y')">&gt;&gt;</span></div></div></center></section><footer class="foo"><a href="http://bimailer.ru/help/email-database.php" class="but butO" title="Базы адресов" target="_blank">Справка раздела</a> <?php require_once _4r(59); ?></footer></body></html><?php function _4r($i){$a=Array("Cache-Control: no-store, no-cache, must-revalidate",'Pragma: no-cache',"dbuser.php","advanced/enter.php",'post_max_size','upload_max_filesize',"menu.php",'SELECT * FROM bus_baser ORDER BY data',"SELECT val FROM bus_conf WHERE nam='optis'","SELECT COUNT(A) FROM ",'psev','isp',"true"," checked",'psev','val','style="color:#9f1d16"','*','style="display:none"','<tr ',' id="','psev','"><td>','spis','</td><td>','</td><td>','opis','</td><td> <img title="Добавить адреса (.txt .csv .xlsx)" src="/bimailer/images/but/01_add.png"> <img title="Визуальный редактор" src="/bimailer/images/but/01_pencil.png"> <img ',' title="Синхронизация со списком отписчиков" src="/bimailer/images/but/01_synh.png"> <img title="Скачать список" src="/bimailer/images/but/01_down.png"> <img title="Очистить список" src="/bimailer/images/but/01_clean.png"> <img title="Удалить список" src="/bimailer/images/but/01_dell.png"></td></tr>','SELECT * FROM bus_baser','psev','val','<option value="','psev','" selected="selected">','spis','</option>','<option value="','psev','">','spis','</option>',"SELECT val FROM bus_conf WHERE nam='format'",'val','csv','selected','','val','txt','selected','','val','xlsx','selected','','val','debag','selected','',"footer.php");return $a[$i];} ?>