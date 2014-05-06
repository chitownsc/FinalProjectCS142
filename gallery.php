<? include ("top.php"); ?>

	</head>
	<body>
		<div id="headerWrapper">
			<? include ("menu2.php"); ?>
			<div id="mainTitle">
				<h1> Lauren Fiasconaro </h1>
				<h2> Collections </h2>
			</div><!--close title wrapper-->
			<div id="mainWrapper" class="main">
				<div class="wrapRow">
					<div class="wrap">
						<img id="thesisCover" onclick="window.location = 'thesis.php';" class="cover" src="images/cover/photo0.png">
						<img id="thesisImgCover" class="coverImg" onload="autoPlayAll()" src="images/thesis/small/photo0.png">
					</div>
					<div class="wrap">
						<img id="courseWorkCover" onclick="window.location = 'courseWork.php';" class="cover" src="images/cover/photo1.png">
						<img id="courseWorkImgCover" class="coverImg" src="images/courseWork/small/photo0.png">
					</div>
				</div>
				<div class="wrapRow">
					<div class="wrap">
						<img id="travelCover" onclick="window.location = 'travel.php';" class="cover" src="images/cover/photo2.png">
						<img id="travelImgCover" class="coverImg" src="images/travel/small/photo0.png">
					</div>
					<div class="wrap">
						<img id="commisionCover" onclick="window.location = 'commision.php';" class="cover" src="images/cover/photo3.png">
						<img id="commisionImgCover" class="coverImg" src="images/commision/small/photo0.png">
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	

