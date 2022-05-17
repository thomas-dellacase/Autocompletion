
window.addEventListener("DOMContentLoaded", () => {

// let countries = [];
const search = document.querySelector("#countryInput");
const matchList = document.querySelector("#countryList");
const matchList2 = document.querySelector("#countryList2");

// function fetchCountries() {
//     fetch("countries.php")
//     .then((response) => response.json())
//     .then((data)=>{
//         console.log(data);
//         countries = data.map((x)=> x.name);
//         countries.sort();
//         console.log(countries);
//         loadData(countries, countryListElement);
//     })
// }
// function loadData(data, element) {
//     if(data){
//         element.innerHTML = "";
//         let innerElement = "";
//         data.forEach((item)=>{
//             console.log(item.name);
//             innerElement += `<li>${item.name}</li>`;
//         });
//         element.innerHTML = innerElement;
//     }
// }
// function filterData(data, searchText){
//     return data.filter((x)=> x.toLowerCase().includes(searchText.toLowerCase()))
// }

// fetchCountries();

// countryInputElement.addEventListener("keyup", function(){
//     cosole.log(coucou);
//     const filterData = filterData(countries, countryInputElement.value);
//     loadData(filterData, countryListElement)
// });

const searchState = async searchText =>{
    const res = await fetch("countries.php");
    const states = await res.json();
    console.log(states);
    let matches = states.filter(state => {
        const regex = new RegExp(`^${searchText}`, 'gi');
        return state.nicename.match(regex);
    });
    let matchess = states.filter(state => {
        const regexp = new RegExp(`${searchText}`, 'gi')
        return state.nicename.match(regexp);
    });
    console.log(matches);

    if(searchText.length === 0){
        matches = [];
        matchess = [];
        console.log('coucou');
        matchList.innerHTML = '';
        matchList2.innerHTML = '';
    }
    
    outputHtml(matches);
    outputHtml2(matchess);
};

    const outputHtml = matches =>{
        if(matches.length > 0){
            const html = matches.map(match => `
            <div class="divSelect">
            <a href="show.php/?id=${match.id}"> 
            <h4>${match.nicename} (${match.iso})<span></h4>
            </a>
            </div>`
            ).join('');
            console.log('coucou2');
            console.log(html);
            matchList.innerHTML = html;
        }
    };
    const outputHtml2 = matchess =>{
        if(matchess.length > 0){
            const html2 = matchess.map(match=>`
            <div class="divSelect2">
            <a href="show.php/?id=${match.id}"> 
            <h4>${match.nicename} (${match.iso})<span></h4>
            </a>
            </div>`
            ).join('');
            matchList2.innerHTML = html2;
        }
    };

search.addEventListener('input', ()=> searchState(search.value))
});