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
            <h1 class="font_deafult1">أجنتة المدرسة</h1>
             <a href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a>
            
     <div data-role="navbar"  >
                <ul>
                    
   <li><a href="email.php" class="font_title" data-role="button" data-icon="phone">اتصل بنا </a></li>                  
  <li><a href="subject.php" class="font_title" data-role="button" data-icon="shop">المناهج   </a></li>                
                 
  <li><a href="index.php" class="font_title" data-role="button" data-icon="home">الرئيسية </a></li>
                    
                    
             </ul>
            </div>
            
            
      </div>      
        
        
        
            <div data-role="content">
      
        
        <div data-role="controlgroup">
            <a href="page.php?view=show&id=15"  class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">المواعيد الدراسية </a>
             <a href="page.php?view=show&id=16" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> الاختبارات الدراسية </a>
              <a href="page.php?view=show&id=17" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> الاجازات </a>
               <a href="page.php?view=show&id=18" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> مواعيد أولياء الامور   </a>
                <a href="page.php?view=show&id=19" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> مواعيد الاخصائيين  </a>
                 <a href="page.php?view=show&id=20" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">الزي المدرسي    </a>
                  <a href="page.php?view=show&id=21"   class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">نظام إحتساب الغياب    </a>
               <a href="page.php?view=show&id=22"   class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">الحضور والانصراف    </a>
      <a href="page.php?view=show&id=23" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right"> تنبيهات على أولياء     </a>
                 <a href="page.php?view=show&id=24" class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">تعاميم المدرسة       </a>
                  <a href="page.php?view=show&id=25"   class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">نظام المصروقات    </a>
               <a href="page.php?view=show&id=26"   class="font_deafult2" data-role="button" data-icon="bars"  data-iconpos="right">أتوبيسات المدرسة    </a>

           </div>
        
        
        
        
        
        
        
        
        </div>
        
        
       
       
       
       
       
        <div data-role="footer" data-theme="a" data-position="fixed">
            
            
               <div data-role="navbar" >
                <ul>
                    
                     
          
  <li><a href="agnatha.php" class="font_title ui-btn-active" data-role="button" data-icon="eye">  اجندة المدرسة  </a></li>                
  <li><a href="table.php" rel="External" class="font_title" data-role="button" data-icon="grid">    جداول الطلاب   </a></li>                  
  <li><a href="natega.php" class="font_title " data-role="button" data-icon="user">نتائج الطلاب  </a></li>
                    
             </ul>
            </div>
            
            
      </div>   
    </div>



</body>
</html>