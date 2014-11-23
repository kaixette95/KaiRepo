var imagecount = 1;
var total = 10;
var array = ["Laughter","Life","Love"];

function slide(x)
{
	var Image = document.getElementById('img');
	var r = Math.round(Math.random()*2);
	console.log(array[r])
	imagecount = imagecount +x;
	if(imagecount > total)
	{
		imagecount = 1;
	}
	if(imagecount < 1)
	{
		imagecount = total;
	}
	Image.src = "images/"+array[r]+"/img"+ imagecount +".jpg";

}

window.setInterval(function slideA(){
	var Image = document.getElementById('img');
	var r = Math.round(Math.random()*2);
	imagecount = imagecount + 1;
	if(imagecount > total)
	{
		imagecount = 1;
	}

	if(imagecount < 1)
	{
		imagecount = total;
	}
	Image.src = "images/"+array[r]+"/img"+ imagecount +".jpg";
}, 5000);