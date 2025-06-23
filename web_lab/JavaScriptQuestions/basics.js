function if_example(a,b)
{
    if(a>b){
        console.log(`${a} is greatest`);
    }
    else{
        console.log(`${b} is greatest`);
    }
}

if_example(3,6);

function switch_case_example(a){
    switch(a){
        case 1:
            console.log(++a);
            break;
        case 2:
            console.log(--a);
            break;
        case 3:
            console.log(9%2==0?'Even':'Odd');
            break;
        default:
            console.log("Wrong input");

    }
}
switch_case_example(3);

function loop_example(){
    var i=1;
    
    console.log("Square upto 5:")
    for(i=1;i<=5;i++){
        console.log(i*i);
    }
    console.log("Even number upto 10");

    var j = 0;
    while(j < 10){
        console.log(j);
        j = j+2;

    }
    console.log("Odd number upto 10:");
    var k = 1;
    do{
        console.log(k);
        k = k + 2;
    }while(k<10)

}
loop_example();

function comparasion_operator(a , b){
    console.log("a > b: "+ (a > b));
    console.log("a < b: "+ (a < b));
    console.log("a >= b: "+ (a >= b));
    console.log("a <= b: "+ (a <= b));
    console.log("a !=b: "+ (a != b));
    console.log("a == b: "+(a == b));
    console.log("a === b: "+( a === b));

    alert("hello");
    
}
comparasion_operator(1,'1');