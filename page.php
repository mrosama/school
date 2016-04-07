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
             <a href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a>
            
     <div data-role="navbar"  >
                <ul>
                    
    <li><a href="email.php" class="font_title " data-role="button" data-icon="phone">اتصل بنا </a></li>                  
  <li><a href="subject.php" class="font_title" data-role="button" data-icon="shop">المناهج   </a></li>                        
  <li><a href="index.php" class="font_title ui-btn-active" data-role="button" data-icon="home">الرئيسية </a></li>
                  
             </ul>
            </div>
            
            
      </div>      
        
        
        
            <div data-role="content">
      
        

<?php
 
if($_REQUEST["view"]=="show"){
$id=intval(htmlentities($_REQUEST[id]));
$page=$sys->QueryRs("fixed_page","where `ID`='$id' and `hidden`='NO' ");
?>
       <!-- -->  
       <div data-role="header">
    <h1 ><span class="font_deafult2"><?php echo iconv('Windows-1256', 'UTF-8', $page["page_name"]);?></span></h1>
    </div> 
    <p class="font_deafult2" style="direction: rtl"><?php echo strip_tags(iconv('Windows-1256', 'UTF-8', $page["content"]));?></p>
    

        <!-- -->
 <?php
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