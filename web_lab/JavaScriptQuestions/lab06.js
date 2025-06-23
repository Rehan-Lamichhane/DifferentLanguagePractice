function oddEvenCheck() {
    let numString = document.getElementById("checkNum").value;
    let num = Number(numString);
    document.querySelector("#result").innerText = 
        num % 2 === 0 ? `${num} is Even` : `${num} is Odd`;
}

let record = ['John', 'Hero', 'Don', 'SpiderMan', 'Superman', 'Batman', 'Catwoman'];
let ul = document.getElementById('listUsingjs');

record.forEach(hero => {
    let listElement = document.createElement('li');
    listElement.innerText = hero;
    ul.appendChild(listElement);
});

function removeFirstItem() {
    if (ul.firstChild) {
        ul.removeChild(ul.firstChild);
    }
}

function addListItem(itemText) {
    let li = document.createElement('li');
    li.textContent = itemText;
    ul.appendChild(li);
}

function logParentAndChildren() {
    const firstLi = ul.querySelector('li');
    console.log("Parent of first <li>:", firstLi.parentElement);
    console.log("Children of <ul>:", ul.children);
}

function highlightAllItems() {
    const items = document.querySelectorAll('#listUsingjs li');
    items.forEach(item => {
        item.classList.add('highlight');
    });
}

function logNodeListText() {
    const nodeList = document.querySelectorAll('#listUsingjs li');
    nodeList.forEach((item, index) => {
        console.log(`Item ${index + 1}:`, item.textContent);
    });
}
