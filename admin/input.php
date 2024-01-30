<html>
	<head>
		<style>*{margin: 0;padding: 0;box-sizing: border-box;}

body
{
    background: linear-gradient(-60deg,#29B0C5,#E9BB5D,#fe9c8f ,#CB4561);
    background-size: 400%;
    animation:grad 20s infinite alternate ;
    display: flex ;
	justify-content: space-evenly;
}

@keyframes grad
{    0%{background-position: left;}
    40%{background-position:center ;}
    50%{background-position: right;}
    100%{background-position:bottom;}
}
.card{height: 400px;width: 350px; background-color:   #ffefd7 ; opacity: .8; position: relative; margin-top: 9%;}
.ult_div{position:absolute ;top: 0;left: 0; display: flex; justify-content: center;align-items: center; flex-direction: column; width: 100%; height: 100%; }
.sec_div{text-align: center; color: #58668b; padding: 20px;}
.prim_div{background-color:#58668b;}
.sec_div p,h1 { margin-top: 60px; }
a{border: 2px solid  #58668b; border-radius:5px 0px; text-decoration: none; color:#CB4561; margin-top: 15px;  transition:0.7s;}
a:hover{background-color:#58668b; height: 45px;width: 85px;font: size 65px;transition:0.7s; }
h2{font-size: 60px;color: #070707;transition: .5s; }
.card:hover .prim_div{ width: 100px;height: 100px; border-radius:59% ; top: 50px; left: 38%; border: 1px solid #58668b ;transition: .7s; }
.card:hover h2{ font-size: 18px; color:   #c68642 ; }
</style>
	</head>
		<body>
		
			<div class="card flex1">
			<div class="ult_div sec_div">
			<h1>Input Homework
				</h1>
			
				<p >
			To add some homework/Assignment click below
			</p>
			<a href="inputhomework.php">See HomeWork </a>
						</div>
			<div class="ult_div prim_div">
			<h2>ㅤInput<br>Homework</h2>
			
			</div>
			</div>
			<div class="card flex2">
				<div class="ult_div sec_div">
				<h1>Input  Result
					</h1>
				
					<p >To add results click below
				</p>
				<a href="inputresult.php">Add result </a>
							</div>
				<div class="ult_div prim_div">
				<h2>Input<br>Result</h2>
				
				</div>
				</div>
		
			</body>
</html>


