<?php
session_start();
if(isset($_SESSION['login'])&&($_SESSION['login']==1))
{
    //$_SESSION['login']=0;
    unset( $_SESSION['login']);
    unset( $_SESSION['email']);
    unset( $_SESSION['pid']);
    unset( $_SESSION['pname']);
    unset( $_SESSION['price']);
    unset( $_SESSION['quantity']);
    unset( $_SESSION['tprice']);
    unset( $_SESSION['uaddress']);
    unset( $_SESSION['admin']);

    
}                      

?>
<script type="text/javascript">location.href = 'index.php';</script>
