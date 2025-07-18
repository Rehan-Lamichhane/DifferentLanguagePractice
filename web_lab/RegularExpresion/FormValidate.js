function validateInput(){
    let name = document.querySelector('#fullName').value;
    let email = document.querySelector('#email').value;
    let contact = document.querySelector('#contactNo').value;
    let result = document.querySelector('#result');

    let reg_name = /^[A-Z][a-z]{3,}(?:\s[A-Z][a-z]{3,})+$/;
    let reg_email = /^[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,}$/gi;
    let regPhone = /^9[7-8][0-9]{8}$/;

    let output = '';

    if(name.match(reg_name)){
        output += `Name: ${name} is valid<br>`;
    } else {
        output += `Name: ${name} is not valid<br>`;
    }

    if(email.match(reg_email)){
        output += `Email: ${email} is valid<br>`;
    } else {
        output += `Email: ${email} is not valid<br>`;
    }

    if(contact.match(regPhone)){
        output += `Contact: ${contact} is valid<br>`;
    } else {
        output += `Contact: ${contact} is not valid<br>`;
    }

    result.innerHTML = output;
}
