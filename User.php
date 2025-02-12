<?php
/*class User{
    private $username;
    public function set_user($u_ser){
        $this->username=$u_ser;
    }
}
class Admin extends User{
    function __construct($username){
        parent::set_user($username);
    }
    public function expressYourRole(){
        return "Admin: ";
    }
    public function sayHello(){
        return "Hello admin, ".$username."<br>";
    }
}
$admin1=new Admin("Ahmed");
echo $admin1->expressYourRole();
echo $admin1->sayHello();
?>
//The problem is there is a Warning: Undefined variable $username in line 16
reason: $username is private so its only accessible in its own class(User)
solution is to call username in say hello using get function
*/
class User {
    private $username;
    public function set_user($username) {
        $this->username = $username;
    }
    public function get_user(){
        return $this->username;
    }
}
class Admin extends User {
    function __construct($username) {
        parent::set_user($username);
    }

    public function expressYourRole() {
        return "Admin: ";
    }

    public function sayHello() {
        return "Hello admin, ".$this->get_user()."<br>";
    }
}

$admin1 = new Admin("Ahmed");
echo $admin1->expressYourRole();
echo $admin1->sayHello();
?>