
				var count = 0
				var autoSlide;
				function autoPlay(){
					autoSlide = setTimeout("displayNextImage()",3000);
				}
				function displayNextImage(){
					clearTimeout(autoSlide);
					if (count > 9) {
						count = 0;
					}
					else {
						count++;
					}
					document.getElementById("mainImg").src=("images/thesis/thesis" + count + ".jpg");
						
				}
				
				
			