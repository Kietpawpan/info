<!DOCTYPE html><!-- 

                                @                                
   ::                          =%.                          ::   
 :::::                        *@@@=                        ::::: 
  :::::                       *##*#                       :::::. 
::.::.::.    :             .@%%##%%*@              :.   .::.::.::
 ::::::.::. .:::::%-       *@::::::-@+       +#:::::. .::.:::::: 
 .:::::::::::::             @*:+@@++*             ::.:::::.::::. 
 .:::.:::.:::*:-+           @:#= :+::          .#--+:::.:::.:::. 
   .::::::::.:::::::. :. :  ..:=%-:-   . .: .:::::::.::::::::.   
   .:::::::::::.:.:::::+#:::-#::-::+-:::#=:::::.:::::::::::::.   
     ::::::::::::::::::*+::::#-#++-*::::++::.:::::::::::::::     
      .:.:::::.:::::::::::::::::@-::::::::::::::::.:::::...      
           .:::::::.:.:::::::::::::::::::::.:.:::::::.           
             :::.:::::::::.%+#*%@#**#@::::::::::.:::             
              .:::::::::::::#%#%@%#@%::::::::::.:::              
                .:::::.:::::::::::::::::::::::::.                
                   ...::::: ::::::::: ::.::...                   
                      =  ..+-::...::#*.. .=                      
                   ::::%+...*#==%++##...*#::::.                  
                 .:::::::@%:....#..+.:%%:::::::.                 
                 :::::::.:.:#%+.@.+%*:::.:::::::.                
                 .:::::.:::*::-...=::*::.::::::.                 
                          #@@=..@-.=@@@.                         
                  +-*%   +%@....:....@@*   +%**                  
                 :-.*@@@@% %-...*...=# %@@@@%==#                 
                   %=+@@@@ :@%..:..#@: @@@@%+*                   
                   .     ::::::@.@:::::-.    .                   
                         ::::::.%.::::::                         
                           ..:::::::::                           
                                :                                

 ____________________________________________________
|\\\1\\\\\\2\\\\\\3\\\\\\||//////5///////6///////7///|
|\\\\\\: : : :: :DEVELOPER INFORMATION : : :::://////|
| Copyright © 2023 MNRE-SLC  All rights reserved.    |
| Contact: servicelinkcenter@mnre.go.th              |
| Author: Montri Kiatphaophan (monte.k@gmnre.go.th)  |
| version 1.0.0 | Sep. 20, 2023 .     .     .     ...|
|////////||\\\\\\\\\/////////||\\\\\\\///////||\\\\\\|
TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT
                                                                                                        
               
--><html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/iRequest.css">
    <link rel="stylesheet" href="../css/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href="../img/krut.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="../js/main.js"></script>


<title>MNRE | e-Tracking</title>

</head>

<body>
<style>
textarea {
width: 100%;
overflow:hidden;
resize:none;
height: scrollHeight;
vertical-align: text-top;
}
</style>



    	<nav>
        <div class="navbar">
            <img class="dpimg" onclick="openFullScreenDP()" src="../img/mnre.png" alt="">
            <div class="personalInfo">
                <label id="name">ศูนย์บริการร่วม ทส.</label>
                <label 
			id="lastseen">กลับ 
			<a href='../index.html'>
			<font color='#94bab3'>หน้าหลัก
			</font>
			</a> | 
			<a href='userGuide2.html'>
			<font color='#94bab3'>คู่มือผู้ใช้งาน
			</font>
			</a> | 
			<a href='license.html'>
			<font color='#94bab3'>License
			</font>
			</a>
		</label>
		<br>
           </div>
    </div>
    </nav>
	<input 
		style='color:black;
			background-color:lightgrey;
			border-color:grey' 
		type="text" 
		id="Question" 
		value="ระบบติดตามความคืบหน้า (e-Tracking)" 
		title="ID">

 	<div 
		class="scrollable" 
		id="myScrollable">
      	<div 
		id="chatting" 
		class="chatting">

		<ul id="Answer">
   			<li><a href="#">
			
รหัสคำขอ: <?php echo substr($_POST["name"],-8); ?><br><br>

สถานะ: <textarea style="width:100%" id="textBox1">
<?php
	$user = $_POST["name"]; 
	include 'progress.php';
	$a2=array_reverse($a);
	$pro=array_search($user, $a2);
	if($pro==''){echo "No data!";}
	else{echo $pro;}
?>
  
 
</textarea>
       	</a>
	</li>
        <li><center><div id="copyRight"></div></center></li>
</div>
</div>
<br>


<!--JAVASCRIPT TEXTAREA FIT TEXT-->
<script type="text/javascript">
	for (var i = 1; i <=100; i++) {
	document.getElementById('textBox' + i).style.height = document.getElementById('textBox' +i).scrollHeight+'px';
}

</script>



</body>
</html>