let col_obj = document.querySelector("#col");
let text_obj = document.querySelector("#text");
let rezult_obj = document.querySelector("#text_izv");
let submit_obj = document.querySelector("#submit");

console.log(submit_obj)

submit_obj.addEventListener("click", function(){
    rezult_obj.value = "";
    if(col_obj.value && text_obj.value)
        for(let i = 0; i < col_obj.value; i++){
            rezult_obj.value += text_obj.value + (i+1) + "\n";
        }
})
