<?php
session_start();
include("../class/DB.php");
include("../config.php");
error_reporting(5);



///////////

 
 $level=$sys->Query("school_level","");
$dat=$sys->Query("school_dat","");
$school_room=$sys->Query("school_room","");
         
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
            <h1 class="font_deafult1"> النتائج</h1>
             <a  href="index.php" class="font_title " data-role="button" data-icon="home">الرئيسية </a>
            
     <div data-role="navbar"  >
                <ul>
                    
    <li><a href="email.php" class="font_title" data-role="button" data-icon="phone">اتصل بنا </a></li>                  
  <li><a href="subject.php" class="font_title" data-role="button" data-icon="shop">المناهج   </a></li>                
                 
  <li><a href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a></li>
                    
             </ul>
            </div>
            
            
      </div>      
        
        
        
            <div data-role="content">
        <!-- -->
     
        
<table align="center" dir="ltr" width="100%">
<form method="post" name="formss"  data-ajax="false">
<tr><td width="80%"><select   name="level" onchange="form.submit();">
<option  value="0" class="font_deafult2">-- اختار المرحلة التعليمية--</option>


<?php
if(is_array($level)){

foreach($level as $row){

if($row["ID"]==$_POST["level"]){

echo "<option class='font_deafult2' value='$row[ID]' selected='selected'>".iconv('Windows-1256', 'UTF-8',$row[level])."</option>";
}
else {
echo "<option class='font_deafult2' value='$row[ID]' >".iconv('Windows-1256', 'UTF-8',$row[level])."</option>";

}

}


}

?>


</select>
</td><td class="font_deafult2"><b>المرحلة الدراسية</b></td></tr>

<tr>
<td>
<?php
if($_POST["level"]!="0"){
$session1=$sys->Query("school_session","where `level`='$_POST[level]'  ");
 
 
}

?>

<select name="school_session" class="font_deafult2">
<?php
if(is_array($session1)){

foreach($session1 as $row){

echo "<option value='$row[ID]'>$row[school_session]</option>";


}


}

?>


</select>
</td>

<td class="font_deafult2"><b>الصف الدراسي</b></td></tr>

<tr>
<td><select name="school_room" class="font_deafult2">

 <?php
if(is_array($school_room)){

foreach($school_room as $row){
echo "<option value='$row[ID]'>$row[room]</option>";
}

}
 ?>

</select>

</td>

 <td><b>الغرفة الدراسية</b></td></tr>

<tr><td colspan="2" align="center"><input type="submit" value="عرض الجدول" name="show"></td></tr>


</form>

</table>
          
        
        
         <!-- -->
        
        
        
        
        
        
        
        </div>
        
        
       
       
       
       
       
        <div data-role="footer" data-theme="a" data-position="fixed">
            
            
               <div data-role="navbar" >
                <ul>
                    
                     
  <li><a href="agnatha.php" class="font_title" data-role="button" data-icon="eye">  اجندة المدرسة  </a></li>                
  <li><a href="table.php" class="font_title" data-role="button" data-icon="grid">    جداول الطلاب   </a></li>                  
  <li><a href="natega.php" class="font_title ui-btn-active " data-role="button" data-icon="user">نتائج الطلاب  </a></li>
                    
             </ul>
            </div>
            
            
      </div>   
    </div>



</body>
</html>