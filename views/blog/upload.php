<?php਍瀀甀戀氀椀挀 昀甀渀挀琀椀漀渀 甀瀀氀漀愀搀⠀⤀笀ഀഀ
   if($_FILES["filename"]["size"] > 1024*3*1024)਍   笀ഀഀ
     echo ("Размер файла превышает три мегабайта");਍     攀砀椀琀㬀ഀഀ
   }਍   ⼀⼀ ἀ䀄㸄㈄㔄䀄伄㔄㰄 㜀〄㌄䀄䌄㘄㔄㴄 㬀㠄 䐀〄㤄㬄ഄഀ
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))਍   笀ഀഀ
     // Если файл загружен успешно, перемещаем его਍     ⼀⼀ 㠀㜄 ㈀䀄㔄㰄㔄㴄㴄㸄㤄 㐀㠄䀄㔄㨄䈄㸄䀄㠄㠄 ㈀ 㨀㸄㴄㔄䜄㴄䌄丄ഄഀ
     move_uploaded_file($_FILES["filename"]["tmp_name"], "webroot/uploads/".$_FILES["filename"]["name"]);਍   紀 攀氀猀攀 笀ഀഀ
      echo("Ошибка загрузки файла");਍   紀ഀഀ
   ਍   紀ഀഀ
?>