'use strict';
window.addEventListener("DOMContentLoaded", () => {

let countries = [];
const countryListElement = document.querySelector("#countryList");
const countryInputElement = document.querySelector("#countryInput");

function fetchCountries() {
    fetch("countries.php")
    .then((response) => response.json())
    .then((data)=>{
        console.log(data);
        countries = data.map((x)=> x.name);
        countries.sort();
        console.log(countries);
        loadData(countries, countryListElement);
    })
}
function loadData(data, element) {
    if(data){
        element.innerHTML = "";
        let innerElement = "";
        data.forEach((item)=>{
            console.log(item.name);
            innerElement += `<li>${item.name}</li>`;
        });
        element.innerHTML = innerElement;
    }
}
function filterData(data, searchText){
    return data.filter((x)=> x.toLowerCase().includes(searchText.toLowerCase()))
}

fetchCountries();

countryInputElement.addEventListener("keyup", function(){
    cosole.log(coucou);
    const filterData = filterData(countries, countryInputElement.value);
    loadData(filterData, countryListElement)
});
});