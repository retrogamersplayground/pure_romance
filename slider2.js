<a href="javascript:gotoshow()"><img src="food1.jpg" name="slide" border=0 width=300 height=375></a>

<script>
<!--

//configure the paths of the images, plus corresponding target links
slideshowimages("https://tse3.mm.bing.net/th?id=OIP.-7oxJmeaUK5DtcbCVtl4QAEsEr&pid=15.1&P=0&w=300&h=300"," https://s5.postimg.org/dmez5smx3/IMG_1010.jpg "," https://s5.postimg.org/9orpge03r/IMG_1007.jpg  "," https://s5.postimg.org/i5r7rb4sn/IMG_1008.jpg "," https://s5.postimg.org/gj2062sqv/IMG_1009.jpg  ")
slideshowlinks("http://food.epicurious.com/run/recipe/view?id=13285","http://food.epicurious.com/run/recipe/view?id=10092","http://food.epicurious.com/run/recipe/view?id=100975","http://food.epicurious.com/run/recipe/view?id=2876","http://food.epicurious.com/run/recipe/view?id=20010")

//configure the speed of the slideshow, in miliseconds
var slideshowspeed=6000

var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()

//-->
</script>