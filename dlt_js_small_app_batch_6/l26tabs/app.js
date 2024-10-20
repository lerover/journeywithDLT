// UI 
let gettablinks = document.getElementsByClassName('tablinks'),
    gettabpanels = document.getElementsByClassName('tab-panel'),
    getbtnclose = document.querySelectorAll('.btn-close');

    let tabpanels = Array.from (gettabpanels);

    // console.log(tabpanels);

    function gettab(evn,link){
        //console.log(link);

        //Remove All active
        for(let x=0; x<gettablinks.length;x++){
            gettablinks[x].className = gettablinks[x].className.replace(' active','')
        
            getbtnclose[x].addEventListener('click',function(){
                this.parentElement.style.display = 'none';
            })
        }

        //Add Single Active
        // console.log(env.target);

        tabpanels.forEach(function(tabpanel){
            tabpanel.style.display = 'none';
        })

        

        //show single panel
        document.getElementById(link).style.display = 'block';
    }

    document.getElementById('autoclick').click();