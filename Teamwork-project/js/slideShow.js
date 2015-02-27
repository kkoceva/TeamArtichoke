/**
 * Created by Boyan on 27-Feb-15.
 */
var image1 = new Image();
image1.src = "../images/bo/bo-image1-622-467.jpg";
var image2 = new Image();
image2.src = "../images/bo/bo-image2-212-237.jpg";

var step = 1;
function slideIt() {
    document.images.slide.src = eval("image"+step+".src");
    if(step<2) {
        step++;
    }
    else {
        step=1;
    }
    setTimeout("slideIt()",5000);
}
slideIt();