Для инсталляции приложения следуйте следующим шагам:

1) bower install
2) npm install
3) Пропишите свои логин и пароль в файле send_mail.php
4) composer install
5) Запустите wamp
6) Отредактируйте gulpfile.js, если это необходимо
7) Наслаждайтесь!

Замечания:
1. Для проверки форм можно использовать HTML5 атрибут required, но в данной работе проверка на заполненность полей осуществляется при помощи javascript, чтобы продемонстрировать работу тултипов и обеспечить работоспособность в IE9 (http://caniuse.com/#feat=form-validation).
2. Для проверки на правильность заполненного email используется HTML5 атрибут type="email", а для обеспечания валидации на старых браузерах используется дополнительная проверка на стороне PHP. 
3. Не сделана адаптивность.
4. Нет минификации/конкатенации, сжатия картинок, автопрефиксов CSS (будет после вебинара по gulp)
5. Не были использованы какие-либо CSS/JS/HTML препроцессоры. Их выбор всегда остаётся за вами и мы не будем навязывать какой-либо препроцессор.
6. Не было использовано БЭМ-нэйминга или прочих методик именований классов. Классы именованы исходя из личного опыта верстальщика и его подход может и будет отличаться от вашего. Не забывайте, что программирование - это не только "лучшие практики", это еще и определенная доля творчества.

Авторы:
frontend - Ковальчук Дмитрий - kovaldn@gmail.com
backend - Голомазов Антон - cesear8@gmail.com

Высылайте свои идеи и пожелания!