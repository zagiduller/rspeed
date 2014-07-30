<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<style>
			div {
				word-wrap: break-word;
			}
			.main {
				width: 800px;
				margin-left: 22%;
			}
			.div1:hover .div2 {
				display: block;
			}
			.div3 {			
				position: absolute;
				top: 0;
				left: 0;
				height: 100%;
				width: 100%;
				opacity: 0.5;
				background-color: white;
				color: red;				
			}
			.div4 {
				width: 300px;
				position: absolute;
				top: 20%;
				left: 40%;
				background-color: white;
				padding: 15px;
				box-shadow: 0 0 15px rgba(105,105,105,0.5);
				border-radius:6px;
				-webkit-border-radius:6px;
				-moz-border-radius:5px;
				-khtml-border-radius:10px;
			}
			.div1 {
				display:inline-block;
			}
			.div2 { 
				display: none;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<pre>
				<?php print_r( $content->toString() ); ?>
			</pre>
		</div>
	</body>
</html>
