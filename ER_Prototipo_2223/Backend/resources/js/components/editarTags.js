//Obter o innerHTML da tag atual
var buttons = document.getElementsByTagName("button");
const buttonPressed = e => {
    console.log(e.target.id);  
}
for(let button of buttons){
    button.addEventListener("click", buttonPressed);
    button.addEventListener('click', (e) => {
        if(e.target.id=="#tag-"+e.target.dataset.repid){
            console.log(e.target.id)
            const selectElement = document.querySelector("#tag-"+e.target.dataset.repid+"-edit");

            const tempor = document.querySelector("#tag-atr-"+e.target.dataset.repid);

            console.log(tempor.innerHTML)
            console.log(outputSelected)

            tempor.innerHTML = selectElement.options[selectElement.selectedIndex].innerHTML
        }
        else if(e.target.id="#bur-"+e.target.dataset.repid){
            console.log(e.target.id)
            const selectElementEnt = document.querySelector("#state-"+e.target.dataset.repid+"-edit");
            let outputEnt = selectElementEnt.value;
            let outputSelectedEnt = selectElementEnt.options[selectElementEnt.selectedIndex].innerHTML
            console.log(outputEnt, "ID do Estado")
            const temporEnt = document.querySelector("#state-bur-"+e.target.dataset.repid);

            console.log(temporEnt.innerHTML) //Texto do Estado atual
            console.log(outputSelectedEnt) //Texto da opção atual

            temporEnt.innerHTML = selectElementEnt.options[selectElementEnt.selectedIndex].innerHTML

            let form = document.getElementById("form-bur-"+e.target.dataset.repid);

            form.submit();
            
        }
        
    });
}
