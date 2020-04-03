<?php
class User{
    public $name;
    public $login;
    public $password;

    function showInfo(){
        echo "name: '{$this->name}'; login: '{$this->login}'; password: '{$this->password}';<br>\n";
    }
}

$user1 = new User;
$user1 -> name = "Ilya";
$user1 -> login = "Ishunin_01";
$user1 -> password =  "q1w2e3r4t5y6" ;

$user2 = new User;
$user2 -> name = "Lesha";
$user2 -> login = "KyryZaGaragami@sigi.ru";
$user2 -> password = "q1w2e3r4t5y6";

$user3 = new User;
$user3 -> name = "Baton";
$user3 -> login = "Baton@mail.ru";
$user3 -> password = "q1w2e3r4t5y6";

$content.=$user1 -> showInfo();
$content.=$user2 -> showInfo();
$content.=$user3 -> showInfo();

?>
