<?php 
  
  session_start();

  

  if(isset($_POST['Submit'])){
  
  
  
  $logins = array('sara' => 'shalom123', 'admin' => 'admin');


  $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';




  if (isset($logins[$user_name]) && $logins[$user_name] == $password){
  

  $_SESSION['UserData']['user_name']=$logins[$user_name];
  header("location:home.php");
 
  exit;
  } else {
  
  
 
  $msg="<span style='color:red'>Invalid Login Details</span>";
  }
  }
?>
  <form action="" method="POST" name="Login_Form">
  <table width="360" border="1px" align="center" cellpadding="10px" cellspacing="1" class="Table">
  <?php if(isset($msg)){?>
  <tr>
  <td colspan="3" align="center" valign="top"><?php echo $msg;?></td>
  </tr>
  <?php } ?>
  <tr>
  <td colspan="3" align="left"><h3>Login</h3></td>
  </tr>
  <tr>
  <td align="right">Username</td>
  <td><input name="user_name" type="text" class="Input"></td>
  </tr>
  <tr>
  <td align="right">Password</td>
  <td><input name="password" type="password" class="Input"></td>
  </tr>
  <tr>
  <td> </td>
  <td><input name="Submit" type="submit" value="Login" class="Button"></td>
  </tr>
  </table>
  </form>
      

  <style>

    form
    {

        display: flexbox;
    
        justify-content: center;
        margin: auto;
     
        padding: 150px;
        margin-top: 50px;
       
    }

    body

    {

      background-image: url('logo.png');
      background-size:contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    tr
    {

      color: black;
      font-weight: bold;
      font-family: 'Times New Roman', Times, serif;
    }
  </style>