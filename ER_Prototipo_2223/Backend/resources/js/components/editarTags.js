var buttons = document.getElementsByTagName("button");


const buttonPressed = e => {
    console.log(e.target.id);
    
}

for(let button of buttons){
    button.addEventListener("click", buttonPressed);
    button.addEventListener('click', (e) => {
        const temp = document.getElementById("atr-"+e.target.id);

        console.log(e.target.dataset.tagatr);

        
    });
}

