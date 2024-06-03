// UI 
const getbox = document.querySelector('.box');
const getbtns = document.querySelector('.btns');
const getboxtitle = document.querySelector('#boxtitle');

getbox.addEventListener('click',function(e){
    // getbtns.classList.toggle('show');
    getbtns.classList.add('show');

    smallmenu(e.target);


});

getbox.addEventListener('dblclick',function(){
    getbtns.classList.remove('show');
});

function smallmenu(ele){
    // console.log(ele);

    if(ele.classList.contains('btn-icon')){
        // console.log('yes');

        const geturl = ele.getAttribute('data-link');
        // console.log(geturl);

        window.location.href = geturl;
    }else if(ele.classList.contains('icn')){
        const geturl = ele.parentElement.getAttribute('data-link');
        // console.log(geturl);
        window.location.href = geturl;
    }else{
        console.log('no');
    };
};

dragme(getbox);

function dragme(box){
    // console.log(box);
    console.log("i am main dragme function");

    let getcx,getcy,setcx,setcy;

    if(getboxtitle){
        getboxtitle.onmousedown = mousedown;
    }
    
    function mousedown(e){
    console.log("i am main mousedown function");

    getcx = e.clientX;
    getcy = e.clientY;
    console.log('step 1 =',getcx,getcy);

    document.onmousemove = dragnow;
    document.onmouseup = stopdrag;

    getbtns.classList.remove('show');
    }

    function dragnow(e){
    console.log("i am main dragnow function");

    setcx = getcx - e.clientX;
    setcy = getcy - e.clientY;

    console.log('step2 =',setcx,setcy);

    getcx = e.clientX //reset & overwrite clientx again new position moved element's location
    getcy = e.clientY //reset & overwrite clienty again new position moved element's location
    
    const btnleft = box.offsetLeft;
    const btntop = box.offsetTop;

    box.style.left = (btnleft-setcx)+ "px";
    box.style.top = (btntop-setcy)+ "px";
}

    function stopdrag(){
    console.log("i am main stopdown function");
    document.onmousemove = null;

    }
};