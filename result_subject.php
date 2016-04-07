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
    
<title> النسخة الكفية لموقع مدرسة المستقبل </title>
</head>
<body>
<!-- a b c -->
<div id="home" data-role="page" data-title=" النسخة الكفية لموقع مدرسة المستقبل ">
    <div data-role="header" data-theme="a" data-position="fixed">
            <h1 class="font_deafult1">المناهج الدراسية</h1>
             <a href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a>
            
     <div data-role="navbar"  >
                <ul>
                    
  <li><a href="email.php" class="font_title " data-role="button" data-icon="phone">اتصل بنا </a></li>                  
  <li><a href="subject.php" class="font_title  ui-btn-active" data-role="button" data-icon="shop">المناهج   </a></li>                        
  <li><a href="index.php" class="font_title" data-role="button" data-icon="home">الرئيسية </a></li>
                  
                    
             </ul>
            </div>
            
            
      </div>      
        
        
        
            <div data-role="content">
      
    <!-- -->    

    

<?php
if($_POST["level"]){




$view_data=$sys->Query("school_subject","where `school_level`='$_POST[level]' and `school_session`='$_POST[session]'  order by ID");
$len=$sys->countrows("school_subject","where `school_level`='$_POST[level]' and `school_session`='$_POST[session]'  order by ID");

if($len!="0"){

echo "<table width='99%'   align='center' bgcolor='#ffffff' bordercolor='#f1f1f1' border='0' cellpadding='2' cellspacing='1'>

<tr bgcolor='#f2f2f2'>
<td align='center' class='font_deafult2'><b>الحد الادني</b></td>
<td align='center' class='font_deafult2'><b>الحد الاعلي</b></td>
<td align='center' class='font_my'><b>المادة</b></td>
</tr>

";

if(is_array($view_data)){
$u=0;
foreach($view_data as $row){
$level=$sys->QueryRs("school_level","where `ID`='$row[school_level]' ");
$session=$sys->QueryRs("school_session","where `ID`='$row[school_session]'");

if($u%2){
$bg="#f2f2f2";
}
else {
$bg="";
}

?>
 
<tr  bgcolor="<?php echo $bg; ?>">
<td align="center"  class='font_my'><?php echo $row["num_min"];?></td>
<td align="center"   class='font_my'><?php echo $row["num_max"];?></td>
<td align="center"  class='font_my'><?php echo iconv('Windows-1256', 'UTF-8',$row["subject"]);?></td>
</tr>
<?php 
$u++;

}

}

echo "</table>";

} else {

echo "<p align='center'><h1 class='font_my' > <font color='red'>نأسف لعدم وجود بيانات</font></h1></p>";

}


?>










<?php
}
?>
    
    
    
        
        <!-- -->
        
        
        
        
        
        
        </div>
        
        
       
       
       
       
       
        <div data-role="footer" data-theme="a" data-position="fixed">
            
            
               <div data-role="navbar" >
                <ul>
                    
                     
     <li><a href="agnatha.php" class="font_title" data-role="button" data-icon="eye">  اجندة المدرسة  </a></li>                
  <li><a href="table.php" rel="External" class="font_title" data-role="button" data-icon="grid">    جداول الطلاب   </a></li>                  
  <li><a href="natega.php" class="font_title  " data-role="button" data-icon="user">نتائج الطلاب  </a></li>
            
    
                    
             </ul>
            </div>
            
            
      </div>   
    </div>



</body>
</html>