<html>
<head>
<title>Welcome Page</title>
 <style>
.load {
	 width: 100%;
	 height: 100vh;
	 position: fixed;
	 top: 0;
	 left: 0;
}
 .load:before, .load:after, .load .dot, .load .outline {
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 -o-transform: translate(-50%, -50%);
	 -moz-transform: translate(-50%, -50%);
	 -webkit-transform: translate(-50%, -50%);
	 -ms-transform: translate(-50%, -50%);
	 transform: translate(-50%, -50%);
	 border-radius: 50%;
}
 .load .dot {
	 width: 96px;
	 height: 96px;
	 background:#D9AC2A;
	 -o-animation: in 4s linear infinite;
	 -moz-animation: in 4s linear infinite;
	 -ms-animation: in 4s linear infinite;
	 -webkit-animation: in 4s linear infinite;
	 animation: in 4s linear infinite;
	 z-index: 2;
}
 .load:before {
	 content: "";
	 width: 0px;
	 height: 0px;
	 background: #720017;
	 -o-animation: out1 4s linear infinite;
	 -moz-animation: out1 4s linear infinite;
	 -ms-animation: out1 4s linear infinite;
	 -webkit-animation: out1 4s linear infinite;
	 animation: out1 4s linear infinite;
}
 .load:after {
	 content: "";
	 width: 0px;
	 height: 0px;
	 background: #D9AC2A;
	 -o-animation: out2 4s linear infinite;
	 -moz-animation: out2 4s linear infinite;
	 -ms-animation: out2 4s linear infinite;
	 -webkit-animation: out2 4s linear infinite;
	 animation: out2 4s linear infinite;
}
 .load .outline {
	 width: 120px;
	 height: 120px;
	 z-index: 2;
}
 .load .outline span {
	 width: 68px;
	 height: 68px;
	 -o-transform-origin: 100% 100%;
	 -moz-transform-origin: 100% 100%;
	 -webkit-transform-origin: 100% 100%;
	 -ms-transform-origin: 100% 100%;
	 transform-origin: 100% 100%;
	 -o-transform: rotate(45deg) skewX(80deg);
	 -moz-transform: rotate(45deg) skewX(80deg);
	 -webkit-transform: rotate(45deg) skewX(80deg);
	 -ms-transform: rotate(45deg) skewX(80deg);
	 transform: rotate(45deg) skewX(80deg);
	 overflow: hidden;
	 position: absolute;
	 bottom: 50%;
	 right: 50%;
	 -o-animation: outline 4s linear infinite;
	 -moz-animation: outline 4s linear infinite;
	 -ms-animation: outline 4s linear infinite;
	 -webkit-animation: outline 4s linear infinite;
	 animation: outline 4s linear infinite;
}
 .load .outline span:before {
	 content: "";
	 display: block;
	 border: solid 5px #fff;
	 width: 200%;
	 height: 200%;
	 border-radius: 50%;
	 -o-transform: skewX(-80deg);
	 -moz-transform: skewX(-80deg);
	 -webkit-transform: skewX(-80deg);
	 -ms-transform: skewX(-80deg);
	 transform: skewX(-80deg);
	 -o-animation: outlineBefore 4s linear infinite;
	 -moz-animation: outlineBefore 4s linear infinite;
	 -ms-animation: outlineBefore 4s linear infinite;
	 -webkit-animation: outlineBefore 4s linear infinite;
	 animation: outlineBefore 4s linear infinite;
}
 @-o-keyframes outline {
	 0% {
		 -o-transform: rotate(0deg) skewX(80deg);
		 -moz-transform: rotate(0deg) skewX(80deg);
		 -webkit-transform: rotate(0deg) skewX(80deg);
		 -ms-transform: rotate(0deg) skewX(80deg);
		 transform: rotate(0deg) skewX(80deg);
	}
	 25% {
		 -o-transform: rotate(500deg) skewX(15deg);
		 -moz-transform: rotate(500deg) skewX(15deg);
		 -webkit-transform: rotate(500deg) skewX(15deg);
		 -ms-transform: rotate(500deg) skewX(15deg);
		 transform: rotate(500deg) skewX(15deg);
	}
	 50% {
		 -o-transform: rotate(1000deg) skewX(40deg);
		 -moz-transform: rotate(1000deg) skewX(40deg);
		 -webkit-transform: rotate(1000deg) skewX(40deg);
		 -ms-transform: rotate(1000deg) skewX(40deg);
		 transform: rotate(1000deg) skewX(40deg);
	}
	 75% {
		 -o-transform: rotate(1500deg) skewX(60deg);
		 -moz-transform: rotate(1500deg) skewX(60deg);
		 -webkit-transform: rotate(1500deg) skewX(60deg);
		 -ms-transform: rotate(1500deg) skewX(60deg);
		 transform: rotate(1500deg) skewX(60deg);
	}
	 100% {
		 -o-transform: rotate(2160deg) skewX(80deg);
		 -moz-transform: rotate(2160deg) skewX(80deg);
		 -webkit-transform: rotate(2160deg) skewX(80deg);
		 -ms-transform: rotate(2160deg) skewX(80deg);
		 transform: rotate(2160deg) skewX(80deg);
	}
}
 @-moz-keyframes outline {
	 0% {
		 -o-transform: rotate(0deg) skewX(80deg);
		 -moz-transform: rotate(0deg) skewX(80deg);
		 -webkit-transform: rotate(0deg) skewX(80deg);
		 -ms-transform: rotate(0deg) skewX(80deg);
		 transform: rotate(0deg) skewX(80deg);
	}
	 25% {
		 -o-transform: rotate(500deg) skewX(15deg);
		 -moz-transform: rotate(500deg) skewX(15deg);
		 -webkit-transform: rotate(500deg) skewX(15deg);
		 -ms-transform: rotate(500deg) skewX(15deg);
		 transform: rotate(500deg) skewX(15deg);
	}
	 50% {
		 -o-transform: rotate(1000deg) skewX(40deg);
		 -moz-transform: rotate(1000deg) skewX(40deg);
		 -webkit-transform: rotate(1000deg) skewX(40deg);
		 -ms-transform: rotate(1000deg) skewX(40deg);
		 transform: rotate(1000deg) skewX(40deg);
	}
	 75% {
		 -o-transform: rotate(1500deg) skewX(60deg);
		 -moz-transform: rotate(1500deg) skewX(60deg);
		 -webkit-transform: rotate(1500deg) skewX(60deg);
		 -ms-transform: rotate(1500deg) skewX(60deg);
		 transform: rotate(1500deg) skewX(60deg);
	}
	 100% {
		 -o-transform: rotate(2160deg) skewX(80deg);
		 -moz-transform: rotate(2160deg) skewX(80deg);
		 -webkit-transform: rotate(2160deg) skewX(80deg);
		 -ms-transform: rotate(2160deg) skewX(80deg);
		 transform: rotate(2160deg) skewX(80deg);
	}
}
 @-webkit-keyframes outline {
	 0% {
		 -o-transform: rotate(0deg) skewX(80deg);
		 -moz-transform: rotate(0deg) skewX(80deg);
		 -webkit-transform: rotate(0deg) skewX(80deg);
		 -ms-transform: rotate(0deg) skewX(80deg);
		 transform: rotate(0deg) skewX(80deg);
	}
	 25% {
		 -o-transform: rotate(500deg) skewX(15deg);
		 -moz-transform: rotate(500deg) skewX(15deg);
		 -webkit-transform: rotate(500deg) skewX(15deg);
		 -ms-transform: rotate(500deg) skewX(15deg);
		 transform: rotate(500deg) skewX(15deg);
	}
	 50% {
		 -o-transform: rotate(1000deg) skewX(40deg);
		 -moz-transform: rotate(1000deg) skewX(40deg);
		 -webkit-transform: rotate(1000deg) skewX(40deg);
		 -ms-transform: rotate(1000deg) skewX(40deg);
		 transform: rotate(1000deg) skewX(40deg);
	}
	 75% {
		 -o-transform: rotate(1500deg) skewX(60deg);
		 -moz-transform: rotate(1500deg) skewX(60deg);
		 -webkit-transform: rotate(1500deg) skewX(60deg);
		 -ms-transform: rotate(1500deg) skewX(60deg);
		 transform: rotate(1500deg) skewX(60deg);
	}
	 100% {
		 -o-transform: rotate(2160deg) skewX(80deg);
		 -moz-transform: rotate(2160deg) skewX(80deg);
		 -webkit-transform: rotate(2160deg) skewX(80deg);
		 -ms-transform: rotate(2160deg) skewX(80deg);
		 transform: rotate(2160deg) skewX(80deg);
	}
}
 @keyframes outline {
	 0% {
		 -o-transform: rotate(0deg) skewX(80deg);
		 -moz-transform: rotate(0deg) skewX(80deg);
		 -webkit-transform: rotate(0deg) skewX(80deg);
		 -ms-transform: rotate(0deg) skewX(80deg);
		 transform: rotate(0deg) skewX(80deg);
	}
	 25% {
		 -o-transform: rotate(500deg) skewX(15deg);
		 -moz-transform: rotate(500deg) skewX(15deg);
		 -webkit-transform: rotate(500deg) skewX(15deg);
		 -ms-transform: rotate(500deg) skewX(15deg);
		 transform: rotate(500deg) skewX(15deg);
	}
	 50% {
		 -o-transform: rotate(1000deg) skewX(40deg);
		 -moz-transform: rotate(1000deg) skewX(40deg);
		 -webkit-transform: rotate(1000deg) skewX(40deg);
		 -ms-transform: rotate(1000deg) skewX(40deg);
		 transform: rotate(1000deg) skewX(40deg);
	}
	 75% {
		 -o-transform: rotate(1500deg) skewX(60deg);
		 -moz-transform: rotate(1500deg) skewX(60deg);
		 -webkit-transform: rotate(1500deg) skewX(60deg);
		 -ms-transform: rotate(1500deg) skewX(60deg);
		 transform: rotate(1500deg) skewX(60deg);
	}
	 100% {
		 -o-transform: rotate(2160deg) skewX(80deg);
		 -moz-transform: rotate(2160deg) skewX(80deg);
		 -webkit-transform: rotate(2160deg) skewX(80deg);
		 -ms-transform: rotate(2160deg) skewX(80deg);
		 transform: rotate(2160deg) skewX(80deg);
	}
}
 @-o-keyframes outlineBefore {
	 0% {
		 -o-transform: skewX(-80deg);
		 -moz-transform: skewX(-80deg);
		 -webkit-transform: skewX(-80deg);
		 -ms-transform: skewX(-80deg);
		 transform: skewX(-80deg);
		 border: solid 5px #fff;
	}
	 25% {
		 -o-transform: skewX(-15deg);
		 -moz-transform: skewX(-15deg);
		 -webkit-transform: skewX(-15deg);
		 -ms-transform: skewX(-15deg);
		 transform: skewX(-15deg);
		 border: solid 5px #fff;
	}
	 49% {
		 border: solid 5px #fff;
	}
	 50% {
		 -o-transform: skewX(-40deg);
		 -moz-transform: skewX(-40deg);
		 -webkit-transform: skewX(-40deg);
		 -ms-transform: skewX(-40deg);
		 transform: skewX(-40deg);
		 border: solid 5px #3463eb;
	}
	 75% {
		 -o-transform: skewX(-60deg);
		 -moz-transform: skewX(-60deg);
		 -webkit-transform: skewX(-60deg);
		 -ms-transform: skewX(-60deg);
		 transform: skewX(-60deg);
		 border: solid 5px #3463eb;
	}
	 100% {
		 -o-transform: skewX(-80deg);
		 -moz-transform: skewX(-80deg);
		 -webkit-transform: skewX(-80deg);
		 -ms-transform: skewX(-80deg);
		 transform: skewX(-80deg);
		 border: solid 5px #3463eb;
	}
}
 @-moz-keyframes outlineBefore {
	 0% {
		 -o-transform: skewX(-80deg);
		 -moz-transform: skewX(-80deg);
		 -webkit-transform: skewX(-80deg);
		 -ms-transform: skewX(-80deg);
		 transform: skewX(-80deg);
		 border: solid 5px #fff;
	}
	 25% {
		 -o-transform: skewX(-15deg);
		 -moz-transform: skewX(-15deg);
		 -webkit-transform: skewX(-15deg);
		 -ms-transform: skewX(-15deg);
		 transform: skewX(-15deg);
		 border: solid 5px #fff;
	}
	 49% {
		 border: solid 5px #fff;
	}
	 50% {
		 -o-transform: skewX(-40deg);
		 -moz-transform: skewX(-40deg);
		 -webkit-transform: skewX(-40deg);
		 -ms-transform: skewX(-40deg);
		 transform: skewX(-40deg);
		 border: solid 5px #3463eb;
	}
	 75% {
		 -o-transform: skewX(-60deg);
		 -moz-transform: skewX(-60deg);
		 -webkit-transform: skewX(-60deg);
		 -ms-transform: skewX(-60deg);
		 transform: skewX(-60deg);
		 border: solid 5px #3463eb;
	}
	 100% {
		 -o-transform: skewX(-80deg);
		 -moz-transform: skewX(-80deg);
		 -webkit-transform: skewX(-80deg);
		 -ms-transform: skewX(-80deg);
		 transform: skewX(-80deg);
		 border: solid 5px #3463eb;
	}
}
 @-webkit-keyframes outlineBefore {
	 0% {
		 -o-transform: skewX(-80deg);
		 -moz-transform: skewX(-80deg);
		 -webkit-transform: skewX(-80deg);
		 -ms-transform: skewX(-80deg);
		 transform: skewX(-80deg);
		 border: solid 5px #fff;
	}
	 25% {
		 -o-transform: skewX(-15deg);
		 -moz-transform: skewX(-15deg);
		 -webkit-transform: skewX(-15deg);
		 -ms-transform: skewX(-15deg);
		 transform: skewX(-15deg);
		 border: solid 5px #fff;
	}
	 49% {
		 border: solid 5px #fff;
	}
	 50% {
		 -o-transform: skewX(-40deg);
		 -moz-transform: skewX(-40deg);
		 -webkit-transform: skewX(-40deg);
		 -ms-transform: skewX(-40deg);
		 transform: skewX(-40deg);
		 border: solid 5px #3463eb;
	}
	 75% {
		 -o-transform: skewX(-60deg);
		 -moz-transform: skewX(-60deg);
		 -webkit-transform: skewX(-60deg);
		 -ms-transform: skewX(-60deg);
		 transform: skewX(-60deg);
		 border: solid 5px #3463eb;
	}
	 100% {
		 -o-transform: skewX(-80deg);
		 -moz-transform: skewX(-80deg);
		 -webkit-transform: skewX(-80deg);
		 -ms-transform: skewX(-80deg);
		 transform: skewX(-80deg);
		 border: solid 5px #3463eb;
	}
}
 @keyframes outlineBefore {
	 0% {
		 -o-transform: skewX(-80deg);
		 -moz-transform: skewX(-80deg);
		 -webkit-transform: skewX(-80deg);
		 -ms-transform: skewX(-80deg);
		 transform: skewX(-80deg);
		 border: solid 5px #fff;
	}
	 25% {
		 -o-transform: skewX(-15deg);
		 -moz-transform: skewX(-15deg);
		 -webkit-transform: skewX(-15deg);
		 -ms-transform: skewX(-15deg);
		 transform: skewX(-15deg);
		 border: solid 5px #fff;
	}
	 49% {
		 border: solid 5px #fff;
	}
	 50% {
		 -o-transform: skewX(-40deg);
		 -moz-transform: skewX(-40deg);
		 -webkit-transform: skewX(-40deg);
		 -ms-transform: skewX(-40deg);
		 transform: skewX(-40deg);
		 border: solid 5px #3463eb;
	}
	 75% {
		 -o-transform: skewX(-60deg);
		 -moz-transform: skewX(-60deg);
		 -webkit-transform: skewX(-60deg);
		 -ms-transform: skewX(-60deg);
		 transform: skewX(-60deg);
		 border: solid 5px #3463eb;
	}
	 100% {
		 -o-transform: skewX(-80deg);
		 -moz-transform: skewX(-80deg);
		 -webkit-transform: skewX(-80deg);
		 -ms-transform: skewX(-80deg);
		 transform: skewX(-80deg);
		 border: solid 5px #3463eb;
	}
}
 @-o-keyframes in {
	 0% {
		 width: 144px;
		 height: 144px;
		 background: #1f2833;
	}
	 40% {
		 width: 0px;
		 height: 0px;
		 background: #1f2833;
	}
	 41% {
		 width: 0px;
		 height: 0px;
		 background: #66fcf1;
	}
	 50% {
		 width: 144px;
		 height: 144px;
		 background: #66fcf1;
	}
	 90% {
		 width: 0px;
		 height: 0px;
		 background: #66fcf1;
	}
	 91% {
		 width: 0px;
		 height: 0px;
		 background: #1f2833;
	}
	 100% {
		 width: 144px;
		 height: 144px;
		 background: #1f2833;
	}
}
 @-moz-keyframes in {
	 0% {
		 width: 144px;
		 height: 144px;
		 background: #1f2833;
	}
	 40% {
		 width: 0px;
		 height: 0px;
		 background: #1f2833;
	}
	 41% {
		 width: 0px;
		 height: 0px;
		 background: #66fcf1;
	}
	 50% {
		 width: 144px;
		 height: 144px;
		 background: #66fcf1;
	}
	 90% {
		 width: 0px;
		 height: 0px;
		 background: #66fcf1;
	}
	 91% {
		 width: 0px;
		 height: 0px;
		 background: #1f2833;
	}
	 100% {
		 width: 144px;
		 height: 144px;
		 background: #1f2833;
	}
}
 @-webkit-keyframes in {
	 0% {
		 width: 144px;
		 height: 144px;
		 background: #1f2833;
	}
	 40% {
		 width: 0px;
		 height: 0px;
		 background: #1f2833;
	}
	 41% {
		 width: 0px;
		 height: 0px;
		 background: #66fcf1;
	}
	 50% {
		 width: 144px;
		 height: 144px;
		 background: #66fcf1;
	}
	 90% {
		 width: 0px;
		 height: 0px;
		 background: #66fcf1;
	}
	 91% {
		 width: 0px;
		 height: 0px;
		 background: #1f2833;
	}
	 100% {
		 width: 144px;
		 height: 144px;
		 background: #1f2833;
	}
}
 @keyframes in {
	 0% {
		 width: 144px;
		 height: 144px;
		 background: #1f2833;
	}
	 40% {
		 width: 0px;
		 height: 0px;
		 background: #1f2833;
	}
	 41% {
		 width: 0px;
		 height: 0px;
		 background: #66fcf1;
	}
	 50% {
		 width: 144px;
		 height: 144px;
		 background: #66fcf1;
	}
	 90% {
		 width: 0px;
		 height: 0px;
		 background: #66fcf1;
	}
	 91% {
		 width: 0px;
		 height: 0px;
		 background: #1f2833;
	}
	 100% {
		 width: 144px;
		 height: 144px;
		 background: #1f2833;
	}
}
 @-o-keyframes out1 {
	 0% {
		 width: 0px;
		 height: 0px;
	}
	 30% {
		 width: 120vw;
		 height: 120vw;
	}
	 100% {
		 width: 120vw;
		 height: 120vw;
	}
}
 @-moz-keyframes out1 {
	 0% {
		 width: 0px;
		 height: 0px;
	}
	 30% {
		 width: 120vw;
		 height: 120vw;
	}
	 100% {
		 width: 120vw;
		 height: 120vw;
	}
}
 @-webkit-keyframes out1 {
	 0% {
		 width: 0px;
		 height: 0px;
	}
	 30% {
		 width: 120vw;
		 height: 120vw;
	}
	 100% {
		 width: 120vw;
		 height: 120vw;
	}
}
 @keyframes out1 {
	 0% {
		 width: 0px;
		 height: 0px;
	}
	 30% {
		 width: 120vw;
		 height: 120vw;
	}
	 100% {
		 width: 120vw;
		 height: 120vw;
	}
}
 @-o-keyframes out2 {
	 0% {
		 width: 0px;
		 height: 0px;
	}
	 30% {
		 width: 0px;
		 height: 0px;
	}
	 60% {
		 width: 120vw;
		 height: 120vw;
	}
	 100% {
		 width: 120vw;
		 height: 120vw;
	}
}
 @-moz-keyframes out2 {
	 0% {
		 width: 0px;
		 height: 0px;
	}
	 30% {
		 width: 0px;
		 height: 0px;
	}
	 60% {
		 width: 120vw;
		 height: 120vw;
	}
	 100% {
		 width: 120vw;
		 height: 120vw;
	}
}
 @-webkit-keyframes out2 {
	 0% {
		 width: 0px;
		 height: 0px;
	}
	 30% {
		 width: 0px;
		 height: 0px;
	}
	 60% {
		 width: 120vw;
		 height: 120vw;
	}
	 100% {
		 width: 120vw;
		 height: 120vw;
	}
}
 @keyframes out2 {
	 0% {
		 width: 0px;
		 height: 0px;
	}
	 30% {
		 width: 0px;
		 height: 0px;
	}
	 60% {
		 width: 120vw;
		 height: 120vw;
	}
	 100% {
		 width: 120vw;
		 height: 120vw;
	}
}
 *, *:after, *::before {
	 -webkit-box-sizing: border-box;
	 -ms-box-sizing: border-box;
	 -moz-box-sizing: border-box;
	 box-sizing: border-box;
	 margin: 0;
	 padding: 0;
}
 </style>
</head>
<body>
<div class="load">
   <div class="dot"></div>
  <div class="outline"><span></span><br><br><br><br><br><br><br><br><h1  id="hello" style="font-family:cursive;color:white;">Loading</h1></div>
</div>
<script>
setTimeout(function(){window.location.href="user.php"} ,4000);
</script>
</body>
</html>