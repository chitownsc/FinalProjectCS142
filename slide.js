var count = 0;
var countAll = [0,0,0,0];
var autoSlide;
var gallery;
var num;
function autoPlay(gallery, num)
{
	this.gallery = gallery;
	this.num = num;
	autoSlide = setTimeout("displayNextImage(gallery, num)",3000);
}
function displayNextImage(gallery, num)
{
	this.gallery = gallery;
	this.num = num;
	clearTimeout(autoSlide);
	if (count > num) {
		count = 0;
	}
	else {
		count++;
	}
	var source = "images/" + gallery + "/regular/photo" + count + ".png";
	console.log(source);
	var idName = gallery + "Img";
	console.log(idName);
	document.getElementById(idName).src=(source);
}
				
				
function autoPlayAll()
{
	autoSlide = setTimeout("displayAllNextImages()",500);
}
function displayAllNextImages()
{
	clearTimeout(autoSlide);

	if (countAll[0] > 9) {
		countAll[0] = 0;
	}
	else {
		countAll[0]++;
	}

	if (countAll[1] > 13) {
		countAll[1] = 0;
	}
	else {
		countAll[1]++;
	}

	if (countAll[2] > 23) {
		countAll[2] = 0;
	}
	else {
		countAll[2]++;
	}

	if (countAll[3] > 8) {
		countAll[3] = 0;
	}
	else {
		countAll[3]++;
	}

	document.getElementById("thesisImg").src=("images/thesis/small/photo" + countAll[0] + ".png");
	document.getElementById("courseWorkImg").src=("images/courseWork/small/photo" + countAll[1] + ".png");
	document.getElementById("travelImg").src=("images/travel/small/photo" + countAll[2] + ".png");
	document.getElementById("commisionImg").src=("images/commision/small/photo" + countAll[3] + ".png");
}