    function fixDown(boxId){
        var box = document.getElementById(boxId);
        var cn = box.className;
        var bh=box.offsetTop;
        var wh=document.documentElement.clientHeight;//这里为了兼容IE，所以不能用window.innerHeight;
        if(bh >= wh){
            box.className = cn + " fixed-bottom";
        }else{
            box.className = cn;
        }
    }
    window.onload=function(){fixDown("bb");}
    window.onresize=function(){fixDown("bb");}
