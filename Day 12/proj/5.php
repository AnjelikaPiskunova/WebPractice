<?php
abstract class UserAbstract{
    abstract function showInfo();
}





class User extends  UserAbstract{
    public $name;
    public $login;
    public $password;
    static public $countUser=0;

    function __construct($name,$login,$password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
        ++self::$countUser;

        echo "Создан объект" .self::$countUser. " класса '".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      <br>\n";
    }

    function __clone(){  // Клон
        echo "Клон класса '".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      <br>\n";
    }

    function __destruct(){  // Деструктор
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







class SuperUser extends User{
    public $role;
    static public $countSuperUser;

    function __construct($name,$login,$password,$role){
        parent::__construct($name,$login,$password);
        $this->role = $role;
        ++self::$countSuperUser;

        echo "Создан объект ".self::$countSuperUser." класса '".__CLASS__."'.
      role: '{$this->role}';
      <br>\n";
    }

    function showInfo(){
        echo "Объект класса '".__CLASS__."'.
      name: '{$this->name}';
      login: '{$this->login}';
      password: '{$this->password}';
      role: '{$this->role}';
      <br>\n";
    }
}

$user1 = new User("Ilya","Ishunin_01","q1w2e3r4t5y6");
$user2 = new User("Lesha","KyryZaGaragami@sigi.ru", "q1w2e3r4t5y6");
$user3 = new User("Baton","Baton@mail.ru","q1w2e3r4t5y6");

echo "<br>\n";

$user4 = new SuperUser("Fish","I_love_fishing@fish.ru","fish_fish","main");
echo "<br>\n";

$user4->showInfo();
echo "<br>\n";

echo "Создано ".User::$countUser." объектов класса User_be<br>\n";
echo "Создано ".SuperUser::$countSuperUser." объектов класса SuperUser_be<br>\n";
echo "<br>\n";

unset($user1,$user2,$user3,$user4);
?>
