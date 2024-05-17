// Get UI

const getaudioscreen = document.getElementById("audioscreen");
const playbtn = document.getElementById("play"),
  prevbtn = document.getElementById("prev"),
  nextbtn = document.getElementById("next"),
  stopbtn = document.getElementById("stop");

const getprogress = document.getElementById("progress"),
  getprogressbar = document.getElementById("progress-bar");

const getvolprogress = document.getElementById("volumeprogress");
const getdisplaytime = document.getElementById("displaytime");

const audios = ["sample1", "sample2", "sample3"];
// length = 3
// index = 0 to 2

let curridx = 0;
console.log(audios[curridx]);

// loadaudio(audios[curridx]);

function loadaudio(audio) {
  getaudioscreen.src = `./source/${audio}.mp3`;
}

function playaudio() {
  playbtn.querySelector("i.fas").classList.remove("fa-play");
  playbtn.querySelector("i.fas").classList.add("fa-pause");

  getaudioscreen.play(); // default function
}

function pauseaudio() {
  playbtn.querySelector("i.fas").classList.add("fa-play");
  playbtn.querySelector("i.fas").classList.remove("fa-pause");

  getaudioscreen.pause(); // default function
}

function playandpauseaudio() {
  //pasued default keywork for audio/video
  if (getaudioscreen.paused) {
    getaudioscreen.play();
  } else {
    getaudioscreen.pause();
  }
}

function nextaudio() {
  curridx++;

  // 0 1 2          3-1=2
  if (curridx > audios.length - 1) {
    curridx = 0;
  }

  // console.log(curridx);
  loadaudio(audios[curridx]);
  playaudio();
}

function previousaudio() {
  curridx--;

  if (curridx < 0) {
    curridx = audios.length - 1;
  }

  // console.log(curridx);
  loadaudio(audios[curridx]);
  playaudio();
}

function updateprogress(e) {
  // console.log(e.target);

  // console.log(e.target.duration); // duration is the default function and for audio/video only
  // console.log(e.target.currentTime); // currentTime is the default function and for audio/video only

  //------------------------------------------------

  // const getduration = e.target.duration;
  // const getcurrenttime = e.target.currentTime;
  // console.log(getduration,getcurrenttime);

  //or you can code like ES6 as below

  // const { duration, currentTime } = e.target;
  // console.log(duration, currentTime);

  //or the following one as it is simpler

  const { duration } = e.target;
  const { currentTime } = e.target;
  // console.log(duration, currentTime);

  if (getaudioscreen.currentTime === 0) {
    getprogressbar.style.width = "0%";
  } else {
    const getprogresspercent = (currentTime / duration) * 100;
    // console.log(getprogresspercent);

    getprogressbar.style.width = `${getprogresspercent}%`;
  }

  //forward
  // const mins = Math.floor(currentTime/60);
  // const secs = Math.floor(currentTime%60);

  //backward
  const mins = Math.floor((duration - currentTime) / 60);
  const secs = Math.floor((duration - currentTime) % 60);
  // console.log(typeof mins); // number

  const minutevalue = mins.toString().padStart(2, "0"); // if you use padStart() concat number must be String.
  // console.log(minutevalue);

  const secondvalue = mins.toString().padStart(2, "0");

  getdisplaytime.innerHTML = `${minutevalue}:${secondvalue}`;
}

function stopaudio() {
  getaudioscreen.currentTime = 0;
  getprogressbar.style.width = `0%`;
  pauseaudio();
}

function volumecontrol() {
  // console.log(getvolprogress.value);
  // console.log(getaudioscreen.volume); // 1

  // volume default key from audio/key
  getaudioscreen.volume = getvolprogress.value / 100;

  // 1 is default (100%)
  // 0.5 is half-volume (50%)
  // 0 mute (0%)
}

function progressaudioclick(e) {
  // console.log(e.target);
  // console.log(this);

  const width = this.clientWidth;
  console.log(width);

  const clickx = e.offsetX;
  console.log(clickx);

  const getduration = getaudioscreen.duration;
  console.log(getduration);

  getaudioscreen.curretTime = (clickx / width) * getduration;
  console.log(getaudioscreen.currentTime);
}

getaudioscreen.addEventListener("timeupdate", updateprogress);
getaudioscreen.addEventListener("play", playaudio);
getaudioscreen.addEventListener("pause", pauseaudio);

playbtn.addEventListener("click", playandpauseaudio);
nextbtn.addEventListener("click", nextaudio); // 0 1 2 0 1 2
prevbtn.addEventListener("click", previousaudio); // 2 1 0 2 1 0
stopbtn.addEventListener("click", stopaudio);
getvolprogress.addEventListener("change", volumecontrol);
getprogress.addEventListener("click", progressaudioclick);
