let navLinks = document.querySelectorAll(".links a");
let bodyId = document.querySelector("body").id;
 
for(let link of navLinks){
   if(bodyId == link.dataset.active){
      link.classList.add("active");
   }
}

