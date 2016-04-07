<?php
session_start();
include("../class/DB.php");
include("../config.php");
error_reporting(5);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="lib/css/jquery.mobile.css" />
    
    <link rel="stylesheet" href="lib/css/fonts.css" />
    <link rel="stylesheet" href="lib/css/fontadmin.css" />
    
    <script src="lib/js/jquery.min.js"></script>
    <script src="lib/js/jquery.mobile.js"></script>
    
    
    <script src="lib/js/javascript.js"></script>
    <link rel="stylesheet" href="lib/css/style.css" />
    
<title>Insert title here</title>
</head>
<body>
<!-- a b c -->
<div id="result" data-role="page" data-title=" النسخة الكفية لموقع مدرسة المستقبل ">
    <div data-role="header" data-theme="a" data-position="fixed">
            <h1 class="font_deafult1">الرئيسية</h1>
             <a href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a>
            
     <div data-role="navbar"  >
                <ul>
                    
   <li><a href="email.php" class="font_title ui-btn-active" data-role="button" data-icon="phone">اتصل بنا </a></li>                  
  <li><a href="subject.php" class="font_title" data-role="button" data-icon="shop">المناهج   </a></li>                
                 
  <li><a href="index.php" class="font_title " data-role="button" data-icon="home">الرئيسية </a></li>
                    
                    
             </ul>
            </div>
            
            
      </div>      
        
        
        
            <div data-role="content">
      
            <div data-role="header">
  
    
   
    
  
  <?php
if($_POST["view"]=="show"){

$pattern = '/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])' .
'(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i';
$error="";
if($_POST["name"]==""){

$error="1";

}

if($_POST["email"]==""){
$error="2";
}


if(preg_match($pattern,$_POST["email"])==0){
$error="3";

}


if($error==""){
$main=$sys->QueryRs("main","");
$emailsite=$main["email"];
$to_email=htmlspecialchars(addslashes($_POST["email"]));
$contentmsg=htmlspecialchars(addslashes($_POST["msg"]));
$titlemsg=htmlspecialchars(addslashes($_POST["name"]));

$header="MIME-Version:10.\r\n";
$header .="Content-Type:text/html;charset=windows-1256\r\n";
$header .="From:<$emailsite>";
@mail("$to_email","$titlemsg","$contentmsg",$header);
$ms= "<font color='green'>تم إرسال البريد... شكرا لك</font>";
}
else {
$ms= "<font color='red'>من فضلك أدخل البيانات بطريقة صحيحة</font>";

}


//end
}


?>
  <h1 ><span class="font_deafult2">  <?php echo @$ms;?>  </span></h1>

</div> 

  
  
  

 
        
        
        
        
        
        
        </div>
        
        
       
       
       
       
       
        <div data-role="footer" data-theme="a" data-position="fixed">
            
            
               <div data-role="navbar" >
                <ul>
                    
                     
  <li><a href="agnatha.php" class="font_title" data-role="button" data-icon="eye">  اجندة المدرسة  </a></li>                
  <li><a href="table.php" rel="External" class="font_title" data-role="button" data-icon="grid">    جداول الطلاب   </a></li>                  
  <li><a href="natega.php" class="font_title " data-role="button" data-icon="user">نتائج الطلاب  </a></li>
                    
             </ul>
            </div>
            
            
      </div>   
    </div>



</body>
</html>