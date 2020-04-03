<?php

spl_autoload_register(function($class){
    include "phpClass/$class.class.php";
});
$user1 = new User("lya","Ishunin_01","q1w2e3r4t5y6");
$user2 = new User("Lesha","KyryZaGaragami@sigi.ru", "q1w2e3r4t5y6");
$user3 = new User("Baton","Baton@mail.ru","q1w2e3r4t5y6");

echo "<br>\n";

$user4 = new SuperUser("Fish","I_love_fishing@fish.ru","fish_fish","main");
echo "<br>\n";

$user4->showInfo();
echo "<br>\n";

echo "Создан ".User::$countUser." объекст класса User_be<br>\n";
echo "Создан ".SuperUser::$countSuperUser." Объект класса SuperUser_be<br>\n";
echo "<br>\n";

unset($user1,$user2,$user3,$user4);

?>
