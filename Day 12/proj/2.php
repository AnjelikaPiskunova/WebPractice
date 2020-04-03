<?php

class User{
    public $name;
    public $login;
    public $password;
    function __construct($name,$login,$password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
        echo "Созданный класс'".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      <br>\n";
    }
    function __clone(){
        echo "Клон Класса '".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      <br>\n";
    }
    function __destruct(){
        echo "Удаленный класс '".__CLASS__."'. name: {$this->name};<br>\n";
    }
    function showInfo(){
        echo "Объект класса'".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      <br>\n";
    }
}
$user1 = new User("Ilya","Ishunin_01","q1w2e3r4t5y6");
$user2 = new User("Lesha","KyryZaGaragami@sigi.ru", "q1w2e3r4t5y6");
$user3 = new User("Baton","Baton@mail.ru","q1w2e3r4t5y6");
$user4 = clone $user1;

unset($user01,$user02,$user03,$user04);



?>
