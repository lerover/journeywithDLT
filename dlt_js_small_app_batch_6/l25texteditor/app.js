//UI 
const getdivarea = document.getElementById('divarea');
getdivarea.contentEditable = true;
getdivarea.spellcheck = false;

const getbtns = document.querySelectorAll('.btn');

getbtns.forEach(function(getbtn){
    getbtn.addEventListener('click',function(){
        // const getcommand = getbtn.getAttribute('data-command');
        // console.log(getcommand);

        const getcommand = getbtn.dataset['command'];
        // console.log(getcommand);

        if(getcommand === 'clearText'){
            getdivarea.textContent = '';
        }else if(getcommand === 'createLink'){
            const geturl = prompt('Enter your website link','https://');
            document.execCommand(getcommand,false,geturl);

        }else if(getcommand === 'paste'){
            navigator.clipboard.readText().then(function(text){
                getdivarea.innerHTML += text;
            })
        }else if(getcommand === 'foreColor'){
            document.execCommand(getcommand,false,getbtn.value);
        }else if(getcommand === 'backColor'){
            document.execCommand(getcommand,false,getbtn.value);
        }else if(getcommand === 'fontName'){
            document.execCommand(getcommand,false,getbtn.value);
        }else{
            document.execCommand(getcommand,false,null);

        }
    })

    


})

function upcase(){
    getdivarea.style.textTransform = 'uppercase';
}

function lwcase(){
    getdivarea.style.textTransform = 'lowercase';
}

function capcase(){
    getdivarea.style.textTransform = 'capitalize';
}