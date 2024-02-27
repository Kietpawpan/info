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

			เลขประจำตัวประชาชน (13 หลัก) : <div id="required" style="color:red"></div> 
			<input 
				type="password" 
				pattern="[0-9]*" 
				inputmode="numeric" 
				id="input" maxlength="13" 
				required 
				placeholder="1234567890123" 
				size="13" 
				style="width:50%" 
				oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" />
   			 <i 
				class="bi bi-eye-slash" 
				id="togglePassword">
			</i>
			<br>
	
		      	<button 
				class='btn' 
				id="execute" 
				name="hash"
				style='width:100px'>
				<i 
					class="fa fa- fa-check">
				</i> ยืนยัน
			</button>
			<br>

			<form method="POST" action="progressTest.php" hidden>
			<input 
				type="text" 
				id="output2" 
				name="hashID"
				placeholder="<ระบบจะเข้ารหัสเพื่อคุ้มครองข้อมูลของท่าน>">
		    <input type="submit">

			</form> 

			<div>
	                   <textarea  hidden
				name='form' 
				id="progress" 
				row="30" 
				cols="70" 
				style="height: 100px">


			</textarea>
			<br>รหัสคำขอ :
			
			<br>		
</div>
<form action="checkBot.php" method="post">
<input type="text" name="name" id="output"><br>

<button type="submit" class='btn' value='Search'><i 
					class="fa fa- fa-search">
				</i> Tracking</button>
</form><font 
				size='-1' 
				color='red'>*กรณียื่นคำขอวันนี้ โปรดติดตามในวันถัดไป
			</font>

       	</a>
	</li>
        <li><center><div id="copyRight"></div></center></li>
</div>
</div>
<br>

<!HASH THE ID NUMBER WITH SHA3 512>	
    <script src="../js/sha3.min.js"></script>
    <script>method = sha3_512;</script>

<!REPORT THE PROGRESS>
    	<script type='text/javascript' src="../js/progress.js"></script>
    	<script type='text/javascript'>
		function progress(){
			let i = document.getElementById('input').value;
			let u = document.getElementById('output').value;


			let pro = p0.get(u);
			if(i==''){
				document.getElementById("required").innerHTML = "* ข้อมูลจำเป็น";
				alert('โปรดกรอกหมายเลขประจำตัวประชาชน');
			}
			else if(pro==undefined){alert('ไม่พบข้อมูล โปรดตรวจสอบหมายเลขประจำตัวประชาชนอีกครั้ง หรือติดต่อเจ้าหน้าที่ โทร. 0 2265 6223-5');}
			else {document.getElementById('progress').value = pro;}
			}
	</script>

<!HIDE NATIONAL ID NUMBER>
	<script type='text/javascript'>
        	const togglePassword = document.querySelector("#togglePassword");
	        const password = document.querySelector("#input");
        	togglePassword.addEventListener("click", function () {
	            const type = password.getAttribute("type") === "password" ? "text" : "password";
        	    password.setAttribute("type", type);
                    this.classList.toggle("bi-eye");
	        });
    		const form = document.querySelector("form");
        	form.addEventListener('submit', function (e) {
	        e.preventDefault();
	        });
    	</script>
?>


</body>
</html>
