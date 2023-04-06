

<div class="heading">Оставить отзыв</div>

    <form method="post" enctype="multipart/form-data" action="service/add_review.php?uid=<?php print ($_SESSION['id']); ?>" method="POST" onsubmit="return fn_app_add();">
                
                 <input type="text" placeholder="Имя" name="name" id="name" required> <!-- поле для ввода имени -->
  <br>
                 
                 <input type="email" name="email" placeholder="Email" id="email" required> <!-- поле для ввода email -->
                 <br>
                
                 <textarea name="message" placeholder="Сообщение" id="message" required></textarea> <!-- поле для ввода сообщения -->
                 <br>
                  <input type="submit" value="Отправить"> <!-- кнопка отправки формы -->
     </form>
