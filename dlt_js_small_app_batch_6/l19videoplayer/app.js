// Get UI
const getcontainer = document.querySelector(".container");
const getvideoscreen = document.getElementById("videoscreen");
const playbtn = document.getElementById("play"),
  prevbtn = document.getElementById("prev"),
  nextbtn = document.getElementById("next"),
  stopbtn = document.getElementById("stop");

const getprogress = document.getElementById("progress"),
  getprogressbar = document.getElementById("progress-bar");

const getvolprogress = document.getElementById("volumeprogress");

const gettitle = document.getElementById("title");
const getdisplaytime = document.getElementById("displaytime");

const getopenfullscreen = document.querySelector(".openfullscreen"),
  getclosefullscreen = document.querySelector(".closefullscreen");

const videos = ["samplevideo1", "samplevideo2"];

let curridx = 0;

loadvideo(videos[curridx]);

function loadvideo(video) {
  getvideoscreen.src = `./source/${video}.mp4`;
  gettitle.textContent = video;
}

function playvideo() {
  playbtn.querySelector("i.fas").classList.remove("fa-play");
  playbtn.querySelector("i.fas").classList.add("fa-pause");

  getvideoscreen.play();
}

function pausevideo() {
  playbtn.querySelector("i.fas").classList.remove("fa-pause");
  playbtn.querySelector("i.fas").classList.add("fa-play");

  getvideoscreen.pause();
}

function playpausevideo() {
  if (getvideoscreen.paused) {
    playvideo();
  } else {
    pausevideo();
  }
}

function nextvideo() {
  curridx += 1;

  if (curridx > videos.length - 1) {
    curridx = 0;
  }

  loadvideo(videos[curridx]);
  playvideo();
}

function previousvideo() {
  curridx -= 1;

  if (curridx < 0) {
    curridx = videos.length - 1;
  }

  loadvideo(videos[curridx]);
  playvideo();
}

function stopvideo() {
  getvideoscreen.currentTime = 0;
  pausevideo();
}

function updateprogress(e) {
  // const currentTime = e.target.currentTime;
  // const duration = e.target.duration;
  // console.log(currentTime,duration);

  // const { currentTime } = e.target;
  // const { duration } = e.target;
  // console.log(currentTime,duration );

  // const {currentTime, duration } = e.target;
  // console.log( currentTime, duration);

  const [currentTime, duration] = [
    e.srcElement.currentTime,
    e.srcElement.duration,
  ];
  // console.log([currentTime, duration]);

  if (getvideoscreen.currentTime === 0) {
    getprogressbar.style.width = "0%";
  } else {
    const getprogresspercent = (currentTime / duration) * 100;

    getprogressbar.style.width = `${getprogresspercent}%`;
  }

  const getmins = Math.floor(getvideoscreen.currentTime / 60);
  const getsecs = Math.floor(getvideoscreen.currentTime % 60);

  // if (getmins < 10) {
  // getmins = "0"+getmins;
  // getmins = "0"+String(getmins);
  // }

  // if (getsecs < 10) {
  // getsecs = "0"+getsecs;
  // getsecs = "0"+String(getsecs);
  // }

  // console.log(getmins, getsecs);

  const minutevalue = getmins.toString().padStart(2, "0"); // if you use padStart() concat number must be String.

  const secondvalue = getsecs.toString().padStart(2, "0");

  getdisplaytime.innerHTML = `${minutevalue}:${secondvalue}`;
}

function setprogress(e) {
  const clientwidth = e.target.clientWidth;
  const offsetX = e.offsetX;
  const duration = getvideoscreen.duration;

  getvideoscreen.currentTime = (offsetX / clientwidth) * duration;
}

function openfullscreen() {
  if (getcontainer.requestFullscreen) {
    getcontainer.requestFullscreen(); //standard
  } else if (getcontainer.mozRequestFullscreen) {
    getcontainer.mozRequestFullscreen(); //firefox
  } else if (getcontainer.webkitRequestFullscreen) {
    getcontainer.webkitRequestFullscreen(); // chrome,safari,oppora
  } else if (getcontainer.msRequestFullscreen) {
    getcontainer.msRequestFullscreen(); // ie ,edge
  }

  getopenfullscreen.style.display = "none";
  getclosefullscreen.style.display = "inline-block";
}

function closefullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen(); //standard
  } else if (document.mozCancelFullscreen) {
    document.mozCancelFullscreen(); //firefox
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen(); // chrome,safari,oppora
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen(); // ie ,edge
  }

  getopenfullscreen.style.display = "inline-block";
  getclosefullscreen.style.display = "none";
}

getvideoscreen.addEventListener("timeupdate", updateprogress);
getvideoscreen.addEventListener("ended", nextvideo);
getprogress.addEventListener("click", setprogress);

playbtn.addEventListener("click", playpausevideo);
nextbtn.addEventListener("click", nextvideo);
prevbtn.addEventListener("click", previousvideo);
stopbtn.addEventListener("click", stopvideo);

getopenfullscreen.addEventListener("click", openfullscreen);
getclosefullscreen.addEventListener("click", closefullscreen);
