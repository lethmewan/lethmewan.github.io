const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar"),
    toggle = body.querySelector(".toggle"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

  

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if(body.classList.contains("dark")){
            modeText.innerText="Light Mode"
        }else{
            modeText.innerText="Dark Mode"

        }
    });

    var tablinks=document.getElementsByClassName("tab-links");
    var tabcontents=document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

    var sidemenu = document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right="0";
     }

     function closemenu(){
        sidemenu.style.right="-200px";
     }
