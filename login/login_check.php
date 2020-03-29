<?php
 require (__DIR__.'/../user data/client.php');
 // 'E:\wamp64\www\vicky donor\user data\client.php'
 require (__DIR__.'/../user data/donor.php');

 $username=$_POST['username'];
 $password=$_POST['password'];
 $option=$_POST['option'];
 $n=0;
       if(strcmp($option,"client")==0)
       {
         for($i=0;$i<2;$i++)
         {
           if(strcasecmp($username,$clientdata[$i]['id'])==0 && strcmp($password,$clientdata[$i]['Password'])==0 )
             {
               $n=1;
               switch(true)
               {
                 case(strcasecmp($username,"client1")==0 ):
                   {
                     header("Location:http://".$_SERVER['HTTP_HOST'].'/vicky%20donor/id_info/client/id_info_client1.html');
                     exit();
                   }
                 case(strcasecmp($username,"client2")==0 ):
                   {
                     header("Location:http://".$_SERVER['HTTP_HOST'].'/vicky%20donor/id_info/client/id_info_client2.html');
                     exit();
                   }
               }
             }
        }
        if($n==0)
         {
           header("Location:http://".$_SERVER['HTTP_HOST'].'/vicky%20donor/login/login_id_m.html');
         }
       }
       echo $option;
      if(strcmp($option,"donor")==0)
        {
           for($i=0;$i<2;$i++)
             {
               if(strcasecmp($username,$donordata[$i]['id'])==0 && strcmp($password,$donordata[$i]['Password'])==0 )
                 {
                   $n=1;
                   switch(true)
                   {
                     case(strcasecmp($username,"donor1")==0 ):
                       {
                         header("Location:http://".$_SERVER['HTTP_HOST'].'/vicky%20donor/id_info/donor/id_info_donor1.html');
                         exit();
                       }
                     case(strcasecmp($username,"donor2")==0 ):
                       {
                         header("Location:http://".$_SERVER['HTTP_HOST'].'/vicky%20donor/id_info/donor/id_info_donor2.html');
                         exit();
                       }
                   }
                }
            }
              if($n==0)
              {
                header("Location:http://".$_SERVER['HTTP_HOST'].'/vicky%20donor/login/login_id_m.html');
              }
        }
?>
