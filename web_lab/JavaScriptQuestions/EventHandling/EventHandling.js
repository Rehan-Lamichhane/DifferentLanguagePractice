let cName = document.querySelector("#canName");
let test_1_input = document.querySelector("#test1");
let test_2_input = document.querySelector("#test2");
let check_btn = document.querySelector("#checkBtn");

check_btn.addEventListener("click", ()=>{
    let test_1 = Number(test_1_input.value);
    let test_2 = Number(test_2_input.value);
    let name = cName.value;
    check_btn.style.backgroundColor='green';
    document.getElementById("result").innerHTML = `<i><b>${name}</b> scored <b>${test_1 + test_2}</b></i>`;
})

cName.style.textTransform = 'capitalize';

test_1_input.addEventListener("focus",function(){
    test_1_input.style.backgroundColor='yellow';
})
test_2_input.addEventListener("focus",function(){
    test_2_input.style.backgroundColor='yellow';
})
test_1_input.addEventListener("blur",function(){
    test_1_input.style.backgroundColor='red';
})
test_2_input.addEventListener("blur",function(){
    test_2_input.style.backgroundColor='red';
})

