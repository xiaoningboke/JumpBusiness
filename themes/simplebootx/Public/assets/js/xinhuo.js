var rollspeed=60
rolllink2.innerHTML=rolllink1.innerHTML
function Marquee(){
if(rolllink2.offsetTop-rolllink.scrollTop<=0)
rolllink.scrollTop-=rolllink1.offsetHeight
else{
rolllink.scrollTop++
}
}
var MyMar=setInterval(Marquee,rollspeed)
rolllink.onmouseover=function() {clearInterval(MyMar)}
rolllink.onmouseout=function() {MyMar=setInterval(Marquee,rollspeed)}