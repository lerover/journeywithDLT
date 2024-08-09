//UI

let getsignupbtn = document.getElementById("signup-btn"),
    getfullscreenbtn = document.getElementById('fullscreen-btn'),
    getclfullscreenbtn = document.getElementById('closefullscreen-btn');

let getmodal = document.querySelector('.modal'),
    getbtnclose = document.querySelector('.btn-close');

getsignupbtn.addEventListener('click',function(){
    getmodal.style.display = "block";
})

getbtnclose.addEventListener('click',function(){
    getmodal.style.display = "none";
})

window.onclick = function(e){

    if(e.target === getmodal){
        e.target.style.display = 'none';
    }
}

const getdoele = document.documentElement;

//for open full screen 
getfullscreenbtn.addEventListener('click',function(){
    if(getdoele.requestFullscreen){  //condition to get full screen
        getdoele.requestFullscreen();  // method to get full screen
    }else if(getdoele.webkitRequestFullscreen){ //for different browser(webkit)
        getdoele.webkitRequestFullscreen();
    }else if(getdoele.msRequestFullscreen){  //for different browser(microsoft)
        getdoele.msRequestFullscreen();
    }

    getclfullscreenbtn.style.display  = 'inline-block';
})

//for close full screen 
getclfullscreenbtn.addEventListener('click',function(){
    if(document.exitFullscreen){ //condtion to close full screen
        document.exitFullscreen();   //js method to close full screen 
    }else if(document.webkitExitFullscreen){ //for different browser(webkit)
        document.webkitExitFullscreen();
    }else if(document.msExitFullscreen){  //for different browser(microsoft)
        document.msExitFullscreen();
    }

    getclfullscreenbtn.style.display  = 'none';
})