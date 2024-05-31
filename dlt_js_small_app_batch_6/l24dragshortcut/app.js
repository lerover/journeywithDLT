// UI 
const getbox = document.querySelector('.box');
const getbtns = document.querySelector('.btns');

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

    function mousedown(){
    console.log("i am main mousedown function");
    }

    function dragnow(){
    console.log("i am main dragnow function");
    }

    function stopdrag(){
    console.log("i am main stopdown function");
    }
};