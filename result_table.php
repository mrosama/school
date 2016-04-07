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
<div id="home" data-role="page" data-title=" النسخة الكفية لموقع مدرسة المستقبل ">
    <div data-role="header" data-theme="a" data-position="fixed">
            <h1 class="font_deafult1"> الجداول الدراسية</h1>
             <a href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a>
            
     <div data-role="navbar"  >
                <ul>
                    
  <li><a href="email.php" class="font_title " data-role="button" data-icon="phone">اتصل بنا </a></li>                  
  <li><a href="subject.php" class="font_title  " data-role="button" data-icon="shop">المناهج   </a></li>                        
  <li><a href="index.php" class="font_title" data-role="button" data-icon="home">الرئيسية </a></li>
                  
      
                    
             </ul>
            </div>
            
            
      </div>      
        
        
        
            <div data-role="content">
      
        

 
        <?php
        if($_POST['tabletype']=='subject'){
            
            
            $rt=$sys->Query("school_table","where `school_level`='$_POST[level]' and `school_room`='$_POST[school_room]' and `school_session`='$_POST[school_session]'  order by dat ASC");
$len=$sys->countrows("school_table","where `school_level`='$_POST[level]' and `school_room`='$_POST[school_room]' and `school_session`='$_POST[school_session]'  order by dat ASC");

if($len!="0"){

$arr[1]="السبت";
$arr[2]="الاحد";
$arr[3]="الاثنين";
$arr[4]="الثلاثاء";
$arr[5]="الاربعاء";
$arr[6]="الخميس";
?>

<table align="center" border="1" cellpadding="0" cellspacing="0" dir="ltr" width="100%">
 
<tr>
 
 
 
<td align="center" class="font_deafult2"><b>9</b></td>
<td  align="center" class="font_deafult2"><b>8</b></td>
<td  align="center" class="font_deafult2"><b>7</b></td>
<td  align="center" class="font_deafult2"><b>6</b></td>
<td  align="center" class="font_deafult2"><b>5</b></td>
<td  align="center" class="font_deafult2"><b>4</b></td>
<td  align="center" class="font_deafult2"><b>3</b></td>
 <td  align="center" class="font_deafult2"><b>2</b></td>
<td  align="center" class="font_deafult2"><b>1</b></td>
<td  align="center" bgcolor='#f1f1f1' class="font_my"><b>اليوم</b></td>
</tr>

<?php
if(is_array($rt)){
$n="0";
foreach($rt as $row){
$da1=$sys->QueryRs("school_subject","where `ID`='$row[h1]' ");
$da2=$sys->QueryRs("school_subject","where `ID`='$row[h2]' ");
$da3=$sys->QueryRs("school_subject","where `ID`='$row[h3]' ");
$da4=$sys->QueryRs("school_subject","where `ID`='$row[h4]' ");
$da5=$sys->QueryRs("school_subject","where `ID`='$row[h5]' ");
$da6=$sys->QueryRs("school_subject","where `ID`='$row[h6]' ");
$da7=$sys->QueryRs("school_subject","where `ID`='$row[h7]' ");
$da8=$sys->QueryRs("school_subject","where `ID`='$row[h8]' ");
$da9=$sys->QueryRs("school_subject","where `ID`='$row[h9]' ");


//////////////////////

$h9=($da9["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da9["subject"]);

$h8=($da8["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da8["subject"]);

$h7=($da7["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da7["subject"]);


$h6=($da6["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da6["subject"]);


$h5=($da5["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da5["subject"]);

 


$h4=($da4["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da4["subject"]);


$h3=($da3["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da3["subject"]);


$h2=($da2["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da2["subject"]);


$h1=($da1["subject"]=="")?"---------":iconv('Windows-1256', 'UTF-8',$da1["subject"]);

if($n%2){
$bg="#f2f2f2";
}
else {
$bg="";
}



echo "<tr bgcolor='$bg'>
<td  class='font_my' align='center'>$h9</td>
<td class='font_my' align='center'>$h8</td>
<td class='font_my' align='center'>$h7</td>
<td class='font_my'  align='center'>$h6</td>
<td class='font_my' align='center'>$h5</td>
<td class='font_my' align='center'>$h4</td>
<td class='font_my' align='center'>$h3</td>
<td class='font_my' align='center'>$h2</td>
<td class='font_my' align='center'>$h1</td>
<td  class='font_my' align='center' bgcolor='#f1f1f1'>".$arr[$row[dat]]."</td>
</tr>";










}


}



?>








<?php
} else {

echo "<center class='font_my'><font color='red'>!!...لا يوجد جدول مضاف حاليأ</font></center>";

}
            
            
            
            
            
            
            
            
            
            
        }
        ?>
        
         <?php
        if($_POST['tabletype']=='exam'){
          
       
$view_data=$sys->Query("exam_table","where `school_level`='$_POST[level]' and `school_session`='$_POST[school_session]' and `type_exam`='$_POST[type_exam]'  order by ID");

$len=$sys->countrows("exam_table","where `school_level`='$_POST[level]' and `school_session`='$_POST[school_session]' and `type_exam`='$_POST[type_exam]'  order by ID");

 

if($len!="0"){
?>

 
 
 
 <table align="center"  dir="ltr"   bgcolor='#ffffff' bordercolor='#f1f1f1' border='1' cellpadding='2' cellspacing='1'>
 <tr  bgcolor="#f2f2f2">
<td class="font_my" align="center"   ><b>الصف الدراسي </b></td>
 <td class="font_my" align="center"><b>المرحلة الدراسية </b></td>
 <td class="font_my" align="center"><b>وقت الاختبار </b></td>
 <td class="font_my" align="center"><b>إلي الساعة </b></td>
 <td class="font_my" align="center"><b>من الساعة </b></td>
 <td class="font_my" align="center"><b>التاريخ </b></td>
 <td class="font_my" align="center" height="40px"><b> المادة </b></td>
  </tr>
<?php
if(is_array($view_data)){

foreach($view_data as $row){
$level=$sys->QueryRs("school_level","where `ID`='$row[school_level]' ");
$session=$sys->QueryRs("school_session","where `ID`='$row[school_session]'");
$subject=$sys->QueryRs("school_subject","where `ID`='$row[subject]'");
 

 if($row["pm"]=="0"){
 $t="صباحي";
 }
 else {
 $t="مسائي";
 }
?>

 <tr >
<td class="font_my" align="center"><b><?php echo iconv('Windows-1256', 'UTF-8',$session["school_session"]);?></b></td>
 <td class="font_my" align="center"><b><?php echo iconv('Windows-1256', 'UTF-8',$level["level"]);?></b></td>
 <td class="font_my" align="center"><b><?php echo $t;?></td>
 <td class="font_my" align="center"><b><?php echo $row["exam_to"];?></b></td>
 <td class="font_my" align="center"><b><?php echo $row["exam_from"];?></b></td>
 <td class="font_my" align="center"><b><?php echo $row["dat"]; ?></b></td>
 <td class="font_my" align="center"  ><b> <?php echo iconv('Windows-1256', 'UTF-8',$subject["subject"]); ?></b></td>



<?php

}

}
?>

</table>


<?php
} else {

echo "<center class='font_my'><font color='red'>!! لا توجد جداول متاحة.....</font></center>";
}   
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
            
        }
        ?>
        
        
        
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