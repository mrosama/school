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
            <h1 class="font_deafult1">إتصل بنا</h1>
             <a href="index.php" class="font_title " data-role="button" data-icon="home">الرئيسية </a>
            
     <div data-role="navbar"  >
                <ul>
                    
    <li><a href="email.php" class="font_title ui-btn-active" data-role="button" data-icon="phone">اتصل بنا </a></li>                  
  <li><a href="subject.php" class="font_title" data-role="button" data-icon="shop">المناهج   </a></li>                        
  <li><a href="index.php" class="font_title " data-role="button" data-icon="home">الرئيسية </a></li>
                    
             </ul>
            </div>
            
            
      </div>      
        
        
        
            <div data-role="content"  data-theme="c">
      
            <div data-role="header">
    <h1 ><span class="font_deafult2"> إتصل بنا</span></h1>
    </div> 
    <p class="font_deafult2" style="direction: rtl"> </p>
    
 
<form method="post"    action="result.php"   data-ajax="false" >
    <table align="center"  dir="ltr" width="100%" >
<tr><td align="right"><input type="text" name="email" size="120"></td><td class="font_deafult2"><b>البريد الشخصي </b></td></tr>
<tr><td align="right"><input type="text" name="name"></td><td class="font_deafult2"><b>عنوان الرسالة </b></td></tr>
<tr><td align="right" colspan="2" class="font_deafult2"><b> نص الرسالة </b></td></tr>
<tr><td align="right" colspan="2"><textarea cols="20" rows="9" name="msg"></textarea></td></tr>
<tr>
<td colspan="2" align="center"  class="font_deafult2">
 
<fieldset data-role="controlgroup" data-type="horizontal">
    
    <button data-theme="b" type="reset" class="ui-shadow ui-btn ui-corner-all ui-icon-refresh ui-btn-icon-right font_deafult2">مسح</button>
        <button data-theme="b" type="submit" class="ui-shadow ui-btn ui-corner-all ui-icon-mail ui-btn-icon-right font_deafult2">إرسال</button>

    
   
    
     
     
</fieldset>
</td>
</tr>

 

 
<input type="hidden" value="show" name="view">
</table> 

</form>

        
        
        
        
        
        
        
        </div>
        
        
       
       
       
       
       
        <div data-role="footer" data-theme="a" data-position="fixed">
            
            
               <div data-role="navbar" >
                <ul>
                    
                     
  <li><a href="agnatha.php" class="font_title" data-role="button" data-icon="eye">  اجندة المدرسة  </a></li>                
  <li><a href="table.php" class="font_title" data-role="button" data-icon="grid">    جداول الطلاب   </a></li>                  
  <li><a href="natega.php" class="font_title " data-role="button" data-icon="user">نتائج الطلاب  </a></li>
                    
             </ul>
            </div>
            
            
      </div>   
    </div>



</body>
</html>