 <?php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "tbl_login");  
 if(isset($_POST["username"]))  
 {  
      $query = "SELECT * FROM admin_login WHERE admin_name = '".$_POST["username"]."' AND admin_password = '".md5($_POST["password"])."' LIMIT 1";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $_SESSION['username'] = $_POST['username'];  
           echo 'Yes';  
      }  
      else  
      {  
           echo 'No'; 
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);  
 }  
 ?>  