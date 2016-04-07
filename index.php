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
            <h1 class="font_deafult1">الرئيسية</h1>
             <a  href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a>
            
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
        
        
            <div data-role="controlgroup">
            <a href="page.php?view=show&id=2"  class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> التعريف بالمدرسة </a>
             <a href="page.php?view=show&id=6" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> الهيكل الاداري </a>
              <a href="page.php?view=show&id=7" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> أعضاء هيئة التدريس </a>
               <a href="page.php?view=show&id=8" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> مكان المدرسة </a>
                <a href="page.php?view=show&id=9" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> إنجازات المدرسة </a>
                 <a href="page.php?view=show&id=10" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">المدرس المثالي </a>
                  <a href="page.php?view=show&id=11" rel="external" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">الطالب المثالي </a>
                   
           </div>
        
        
         <!-- -->
        
        
        
        
        
        
        
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