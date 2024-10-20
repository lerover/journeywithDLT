// UI 
const getinput = document.getElementById('search');
let getsortazm1btn = document.getElementById('sortazm1'),
    getsortzam1btn = document.getElementById('sortzam1'),
    getsortazm2btn = document.getElementById('sortazm2'),
    getsortzam2btn = document.getElementById('sortzam2');

const getul = document.getElementById('members');
const getlis = document.getElementsByTagName('li');

getinput.addEventListener('keyup',filter);

getsortazm1btn.addEventListener('click',sortingazm1);

function filter(){
    const filter = this.value.toLowerCase();
    // console.log(filter);

    for(let i = 0; i<getlis.length; i++){
        // console.log(getlis[i].innerHTML);

        let getlink = getlis[i].getElementsByTagName('a')[0].innerText;
        let getatext = getlink.toLowerCase();

        if(getatext.indexOf(filter) > -1){
            getlis[i].style.display = '';
        }else{
            getlis[i].style.display = 'none';
        }

    }
}

function sortingazm1(){

    let lis = [];
    for(let i = 0; i<getlis.length; i++){
        // console.log(getlis[i].innerHTML);
        let litext = getlis[i].textContent;
        lis.push(litext);
    }

    
    const azresults = lis.sort();
    

     azresults.forEach(function(azresult){
        console.log(azresult);

        getul.innerHTML = '';
        
        let newli = document.createElement('li');
        let newlink = document.createElement('a');
        newlink.href = "javascript:void(0)";

        newli.appendChild(newlink);
        
    })
}



