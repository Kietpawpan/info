<!DOCTYPE html><!-- UPDATE.PHP DATABASE UPDATING PROGRAM

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
| version 1.0.1 | Sep. 22, 2023 .     .     .     ...|
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


<title>MNRE | DB Update</title>

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
			<a href='userGuide3.html'>
			<font color='#94bab3'>คู่มือเจ้าหน้าที่
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
		value="ระบบ Update ข้อมูล e-Tracking" 
		title="ID">

 	<div 
		class="scrollable" 
		id="myScrollable">
      	<div 
		id="chatting" 
		class="chatting">

		<ul id="Answer">
   			<li><a href="#">

			เลขประจำตัวประชาชน (13 หลัก) : <div id="required" style="color:red;size=-1"></div> 
			<input 
				type="password" 
				pattern="[0-9]*" 
				inputmode="numeric" 
				id="input" 
				maxlength="13" 
				name="userID"
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
	
			<br>
		      	<button 
				class='btn' 
				id="execute" 
				style='width:100px'>
				<i 
					class="fa fa- fa-check">
				</i> ยืนยัน
			</button>
			<br>

			<form>Public Key<br>
			<input 
				type="text" 
				id="output" 
				placeholder="<ระบบจะเข้ารหัสเพื่อคุ้มครองข้อมูลของผู้ขอ>">
			<br><br>
			</form> 


			<div>ความคืบหน้า:
	                   <textarea 
				name='form' 
				id="progress" 
				row="30" 
				cols="70" 
				style="height: 100px"></textarea>
			<br>

			<button 
				class='btn' 
				style='width:130px' 
				onclick='progress()'>
				<i class="fa fa- fa-code">
				</i> Get Code
			</button>
			<button class='btn' onclick='finalCheck()'>OK</button>


			<font 
				size='-1' 
				color='red'>*โปรดกด OK ทุกครั้ง ก่อนกด Save!
			</font>
			<br>	

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   	<input 
		type="text" 
		name="updateDB" 
		id="outputCode"
		style="width:100%;height:50px"><div id='updateNote' style="color:red;size=-1"></div>

<br><br>
	<input type="submit" name="update" value="Save" 
		style="width:100px;
			background-color:DodgerBlue;	
			cursor: pointer;
			border:none;
 			color: white;
			padding: 12px 16px;
			font-size: 16px;"
	>

</form>



<script>
function finalCheck(){
	let check = document.getElementById('outputCode').value;
	if(check==''){document.getElementById('updateNote').innerHTML='*Required data กด Get Code ก่อน';}
	else{document.getElementById('updateNote').innerHTML='<font color="blue">*Thank you! โปรดกด Save</font>';}
}

</script>
</div><br>


<br>


</div>
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
			let nid = document.getElementById('input').value;
			let nidh = document.getElementById('output').value;
			let progress = document.getElementById('progress').value;
			let dataCode = "'"+progress+"'=>" + "'"+nidh+"',\n);?>"
			if(nid=='' || nidh==''){
				document.getElementById("required").innerHTML = "* ข้อมูลจำเป็น กรอกแล้วกด ยืนยัน อีกครั้ง";
				alert('โปรดกรอกหมายเลขประจำตัวประชาชน');
			}
			else if(progress==''){alert('โปรดกรอกข้อมูลความคืบหน้า');}
			else {document.getElementById('outputCode').value = dataCode;}
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
		
<!UPDATE THE DATABASE>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['update'])){
$data=$_POST['updateDB'].PHP_EOL;
$message = "ERROR 001: Incomplete data!";
$success = "Done! Thank you.";
if($data==''){echo "<script type='text/javascript'>alert('$message');</script>";}
	else{
	$filecontent=file_get_contents('progress.php');
	$pos=strpos($filecontent, ';)?>') -6;
	$filecontent=substr($filecontent, 0, $pos)."\r\n".$data;
	file_put_contents("progress.php", $filecontent);
	echo "<script type='text/javascript'>alert('$success');</script>";
	}
}
?>
</body>
</html>
