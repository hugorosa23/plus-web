<?php
class USER
{
    private $db;
 
    function __construct($db_connect)
    {
      $this->db = $db_connect;
    }
 
    public function register($nome,$login,$email,$senha)
    {
       try
       {
   
           $stmt = $this->db->prepare("INSERT INTO usuarios(us_nome_full, us_login, us_email, us_senha) VALUES(:nome, :login, :email, :senha)");
              
           $stmt->bindparam(":nome", $nome);
           $stmt->bindparam(":login", $login);
           $stmt->bindparam(":email", $email);
           $stmt->bindparam(":upass", md5($senha));            
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function login($nome,$email,$senha)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM suarios WHERE us_login=:login OR us_email=:email LIMIT 1");
          $stmt->execute(array(':nome'=>$nome, ':email'=>$email));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($senha, $userRow['us_senha']))
             {
                $_SESSION['us_sessao'] = $userRow['us_id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['us_sessao']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['us_sessao']);
        return true;
   }
}
?>