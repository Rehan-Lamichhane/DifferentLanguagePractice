const xhr = new XMLHttpRequest(); //xml http request create , server lie request and response
xhr.open("GET","./student_record.json",true);//async hoo 

xhr.onreadystatechange = function(){
    if(xhr.readyState === 4 && xhr.status === 200){
        console.log(JSON.parse(xhr.responseText));
        let students = JSON.parse(xhr.responseText); // Response with data
        console.table(students);

        let tbody = document.querySelector("#student_detail")
        let trow;
        let tdata ;

        students.forEach(student => {
            console.log(student);
            trow = document.createElement("tr");
            for(std in student ){
                console.log(student[std]);
                tdata = document.createElement("td");
                tdata.innerText = student[std];
                trow.appendChild(tdata);
            }
            tbody.appendChild(trow);
        });

    }
}

xhr.send();