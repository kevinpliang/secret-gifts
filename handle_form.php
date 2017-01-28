<?php>
  class user{
    var $email;
    var $password;
    var $interests;

    function user($a, $b, $c){
        $email = $a;
        $password = $b;
        $interests = $c;
    }
    function getEmail{
      return $this->name;
    }

    function getPassword{
      return $this->password;
    }

    function getInterests{
      return $this->interests;
    }
  }

$user test = user($_POST["email"], $_POST["password"], $_POST["interests"]);
?>

<html>
<body>
  Welcome <?php echo user.getEmail(); ?>

</body>
</html>
