<?php
session_start();?>
<ul id="mainmenu">
<div>
<a href="/<?=$_SESSION['id']?>"><li id="mainpageli"><p>MAINPAGES</p></li></a>
<a href="blacklist.php"><li id="blacklistli"><p>BLACKLIST</p></li></a>
<a href="message.php"><li id="messagesli"><p>MESSAGES</p></li></a>
<a href="group.php"><li id="groupli"><p>GROUPS</p></li></a>
<a href="friends.php"><li id="friendsli"><p>FRIENDS</p></li></a>
</div>
</ul>
