<!DOCTYPE html>
<html>
<head>
	<title>HNG Internship 4</title>
	<style type="text/css">
		body{
			background: #E5E5E5;
		}
		#rectangle{
			margin:30px auto;
			position: relative;
			width: 657px;
			height: 444px;
			background: #56CCF2;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}
		#hello{
			position: absolute;
			width: 100%;
			height: 43px;
			top: 36px;
			text-align: center;
			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			line-height: normal;
			font-size: 36px;
			color: #FFFFFF;
		}
		#time{
			top: 123px;
			text-align: center;
			position: absolute;
			width: 100%;
			height: 22px;
			font-family: Roboto;
			font-style: italic;
			font-weight: normal;
			line-height: normal;
			font-size: 18px;
			color: #FFFFFF;
		}
		#rectangle2{			
			position: absolute;
			width: 431px;
			height: 117px;
			top: 162px;
			left: 127px;
			background: #FFFFFF;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

		}
		#time2{
			top: 200px;
			left: 223px;
			position: absolute;
			width: 250px;
			height: 43px;

			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			line-height: normal;
			font-size: 36px;

			color: #000000;
		}
		#desginer{
			top: 424px;
			left: 485px;
			position: absolute;
			width: 163px;
			height: 15px;

			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			line-height: normal;
			font-size: 12px;

			color: #FFFFFF;
		}
	</style>
</head>
<body>
	<div id="rectangle">
		<div id="hello">HELLO FIGMA</div>
		<div id="time">The Current Time is</div>
		<div id="rectangle2"></div>	
		<div id="time2"><?php echo date("h : i : s a"); ?></div>
		<div id="desginer">Designed By: Adeyemo Adeolu</div>
	</div>	
</body>
</html>