var speed=1//速度数值越大速度越慢
www_qpsh_com2.innerHTML=www_qpsh_com1.innerHTML
function Marquee(){
if(www_qpsh_com2.offsetWidth-www_qpsh_com.scrollLeft<=0)
www_qpsh_com.scrollLeft-=www_qpsh_com1.offsetWidth
else{
www_qpsh_com.scrollLeft++
}
}
var MyMar=setInterval(Marquee,speed)
www_qpsh_com.onmouseover=function() {clearInterval(MyMar)}
www_qpsh_com.onmouseout=function() {MyMar=setInterval(Marquee,speed)}