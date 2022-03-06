/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    // Active link
    navLink.forEach(n => n.classList.remove('active'))
    this.classList.add('active')

    // Remove menu mobile 
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

// 
function startTime() {
          var today = new Date();
          var hr = today.getHours();
          var min = today.getMinutes();
          var sec = today.getSeconds();
          ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
          hr = (hr == 0) ? 12 : hr;
          hr = (hr > 12) ? hr - 12 : hr;
          
          hr = checkTime(hr);
          min = checkTime(min);
          sec = checkTime(sec);
          document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
          
          var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
          var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
          var curWeekDay = days[today.getDay()];
          var curDay = today.getDate();
          var curMonth = months[today.getMonth()];
          var curYear = today.getFullYear();
          var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
          document.getElementById("date").innerHTML = date;
          
          var time = setTimeout(function(){ startTime() }, 500);
        }
        function checkTime(i) {
          if (i < 10) {
              i = "0" + i;
          }
          return i;
        }
    
        //Data AOS
        // AOS.init({
        //   delay:500
        // });