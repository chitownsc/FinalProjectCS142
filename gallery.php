<? include ("top.php"); ?>

	
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
						<img alt="" id="thesisCover" onclick="window.location = 'thesis.php';" class="cover" src="images/cover/photo0.png">
						<img alt="" id="thesisImgCover" class="coverImg" onload="autoPlayAll()" src="images/thesis/small/photo0.png">
					</div>
					<div class="wrap">
						<img alt="" id="courseWorkCover" onclick="window.location = 'courseWork.php';" class="cover" src="images/cover/photo1.png">
						<img alt="" id="courseWorkImgCover" class="coverImg" src="images/courseWork/small/photo0.png">
					</div>
				</div>
				<div class="wrapRow">
					<div class="wrap">
						<img alt="" id="travelCover" onclick="window.location = 'travel.php';" class="cover" src="images/cover/photo2.png">
						<img alt="" id="travelImgCover" class="coverImg" src="images/travel/small/photo0.png">
					</div>
					<div class="wrap">
						<img alt="" id="commisionCover" onclick="window.location = 'commision.php';" class="cover" src="images/cover/photo3.png">
						<img alt="" id="commisionImgCover" class="coverImg" src="images/commision/small/photo0.png">
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	

