
var buttons = document.getElementsByTagName("button");



const buttonPressed = e => {
    console.log(e.target.id);
    
}

for(let button of buttons){
    button.addEventListener("click", buttonPressed);
    button.addEventListener('click', (e) => {
        const tager = document.getElementById("tag-"+e.target.id);
        console.log(tager.dataset.reportid);
        
    });
}

