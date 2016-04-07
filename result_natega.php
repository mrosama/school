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
            <h1 class="font_deafult1">النتائج</h1>
             <a href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a>
            
     <div data-role="navbar"  >
                <ul>
                    
    <li><a href="email.php" class="font_title " data-role="button" data-icon="phone">اتصل بنا </a></li>                  
  <li><a href="subject.php" class="font_title" data-role="button" data-icon="shop">المناهج   </a></li>                        
  <li><a href="index.php" class="font_title " data-role="button" data-icon="home">الرئيسية </a></li>
    
                    
             </ul>
            </div>
            
            
      </div>      
        
        
        
            <div data-role="content">
      
            <div data-role="header">
                 <h1 ><span class="font_deafult2">  النتائج </span></h1>
             </div>   
 
 <!-- -->        
   
   

<?php

if($_POST["view1"]=="show"){
 
@include("../includes/f.php");
$data=$sys->Query("exam_final","where `place_num`='$_POST[place_num]' and `school_level`='$_POST[level]' and `school_session`='$_POST[school_session]' and `school_dat`='$_POST[school_dat]' and `exam`='".$_POST["type_exam"]."'     order by ID");

 
 

$len=$sys->countrows("exam_final","where `place_num`='$_POST[place_num]' and `school_level`='$_POST[level]' and `school_session`='$_POST[school_session]' and `school_dat`='$_POST[school_dat]' and `exam`='".$_POST["type_exam"]."'     order by ID");

if($len!="0"){


///

 $mypc=$sys->QueryRs("exam_final","where `place_num`='$_POST[place_num]' and `school_level`='$_POST[level]' and `school_session`='$_POST[school_session]' and `school_dat`='$_POST[school_dat]' and `exam`='".$_POST["type_exam"]."'     order by ID");
  
$school_level1=$sys->QueryRs("school_level","where `ID`='$mypc[school_level]' ");
$school_session1=$sys->QueryRs("school_session","where `ID`='$mypc[school_session]' ");
$school_dat1=$sys->QueryRs("school_dat","where `ID`='$mypc[school_dat]' ");

$member=$sys->QueryRs("member","where `ID`='$mypc[memID]' ");

$member=$sys->QueryRs("member","where `ID`='$mypc[memID]' ");

//


if(is_array($data)){
?>

<table align="center" width="99%" data-mode="reflow" class="ui-responsive table-stroke"  style="border:1px #f2f2f2 solid" dir="ltr">



<tr>
<td class="font_my" align="center"><font color="#FF0000"><?php echo iconv('Windows-1256', 'UTF-8',$school_level1["level"]);?></font></td>
<td class="font_my" bgcolor="#f1f1f1">المرحلة التعليمية</td>
<td class="font_my" align="center"><font color="#FF0000"><?php echo iconv('Windows-1256', 'UTF-8', $member["st_name"]);?></font></td>
<td class="font_my" bgcolor="#f1f1f1">اسم الطالب</td>
</tr>

 <tr>

<td class="font_my" align="center"><font color="#FF0000"><?php echo   iconv('Windows-1256', 'UTF-8',$school_session1["school_session"]);?></font></td>
<td class="font_my" bgcolor="#f1f1f1">الصف </td>

<td class="font_my" align="center"><font color="#FF0000"><?php echo   iconv('Windows-1256', 'UTF-8',$_POST["place_num"]);?></font></td>
<td class="font_my" bgcolor="#f1f1f1">رقم الجلوس</td>
</tr>
<tr><td colspan="4  " width="100%"><br/>&nbsp;  
<table algn="center" border="1" bordercolor="#F3F3F3"  width="100%" style="border:1px #f2f2f2 solid" cellpadding="2" cellspacing="3">



<?php
foreach($data as $row){
 
 $record[]=$row;

 
////////////////////////////////////////////////////


$mysub=$sys->QueryRs("school_subject","where `ID`='$row[subject]' ");

if($mysub["add"]=="YES"){
$sum[]=$row["grad"];
}
 
?>

 




 <?php

}


}

if(is_array($record)){
 echo "<tr>";
foreach($record as $row){
$rs=$sys->QueryRs("school_subject","where `ID`='$row[subject]' ");
echo "<td   align='center' class='font_my'  bgcolor='#FFFFF9'>". iconv('Windows-1256', 'UTF-8',$rs[subject])."</td>";

}


}
echo "
<td align='center' class='font_my' bgcolor='#f1f1f1'>المادة</td>

</tr>";



if(is_array($record)){
 echo "<tr>";
foreach($record as $row){
$rs=$sys->QueryRs("school_subject","where `ID`='$row[subject]' ");
echo "<td   align='center' class='font_my'  bgcolor='#FFFFF9'>$rs[num_max]</td>";

}


}
echo "
<td align='center' class='font_my' bgcolor='#f1f1f1'>الحد الاعلي</td>

</tr>";



if(is_array($record)){
 echo "<tr>";
foreach($record as $row){
$rs=$sys->QueryRs("school_subject","where `ID`='$row[subject]' ");
echo "<td   align='center' class='font_my'  bgcolor='#FFFFF9'>$rs[num_min]</td>";

}


}
echo "
<td align='center' class='font_my' bgcolor='#f1f1f1'>الحد الادني</td>

</tr>";




if(is_array($record)){
 echo "<tr>";
foreach($record as $row){
//$rs=$sys->QueryRs("school_subject","where `ID`='$row[subject]' ");
echo "<td   align='center' class='font_my'  bgcolor='#FFFFF9'>$row[grad]</td>";

}


}
echo "
<td align='center' class='font_my' bgcolor='#f1f1f1'>الدرجة</td>

</tr></table>
</td></tr>";



if(is_array($sum)){
$tot=array_sum($sum);
$numchar=numtoarb($tot);

}else {
$tot="0";
$numchar=numtoarb($tot);
}


?>
<tr><td colspan="2" align="center" class='font_my' style="border:1px #f1f1f1 solid"><?php echo $tot;?></td><td class="font_my" bgcolor="#f1f1f1">المجموع الكلي بالدرجات</td></tr>
<tr><td  align="center" colspan="2" class='font_my' style="border:1px #f1f1f1 solid"><?php echo  iconv('Windows-1256', 'UTF-8',$numchar);?></td><td class="font_my" bgcolor="#f1f1f1">المجموع الكلي  بالحروف</td></tr> 


</table>








<?php
}
else {
echo "<center><h1 ><span class='font_error'><font color='red'>  !....لا توجد نتيجة مسجلة </span></h1></font></center>";
      
    
}



}
?>


   
   
   
   
   
   
   
   
   
        
        
 <!-- -->       
        
        
        
        
        </div>
        
        
       
       
       
       
       
        <div data-role="footer" data-theme="a" data-position="fixed">
            
            
               <div data-role="navbar" >
                <ul>
                    
                     
    <li><a href="agnatha.php" class="font_title" data-role="button" data-icon="eye">  اجندة المدرسة  </a></li>                
  <li><a href="table.php" rel="External" class="font_title" data-role="button" data-icon="grid">    جداول الطلاب   </a></li>                  
  <li><a href="natega.php" class="font_title ui-btn-active " data-role="button" data-icon="user">نتائج الطلاب  </a></li>
            
                    
             </ul>
            </div>
            
            
      </div>   
    </div>



</body>
</html>