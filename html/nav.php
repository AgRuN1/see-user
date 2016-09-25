<?php
session_start();?>
<div class="container-main">
  <ul id="mainlist"class="fa-ul">
      <li><a href="<?=$_SESSION['id']?>"><i class="fa-li fa fa-home"></i>  Моя страница</a></li>
      <li><a href="#"><i class="fa-li fa fa-user"></i>    Друзья</a></li>
      <li><a href="#"><i class="fa-li fa fa-comments"></i> Сообщения</a></li>
      <li><a href="#"><i class="fa-li fa fa-users"></i> Группы</a></li>
      <li><a href="blacklist.php"><i class="fa-li fa fa-user-times"></i> Черный список</a></li>
      <li><a href="blacklist.php"><i class="fa-li fa fa-cog"></i>    Настройки</a></li>
      <li><a href="blacklist.php"><i class="fa-li fa fa-user-secret"></i>Приватность</a></li>
      <li><a href="requests/logout.php"><i class="fa-li fa fa-power-off"></i>    Выход</a></li>
  </ul>
</div>