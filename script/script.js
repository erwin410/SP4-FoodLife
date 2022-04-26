

let toggle = document.getElementById('m-bar');
let holder = document.getElementById('menu-links');
let btn = document.getElementById('btn');

toggle.addEventListener('click', ()=> {
    if (holder.className === "hidden") {
        holder.className = "not-hidden"
        btn.className = "not-hidden"
    } else {
        holder.className = "hidden"
        btn.className = "hidden"
    }
})