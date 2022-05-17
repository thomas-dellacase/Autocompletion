
window.addEventListener("DOMContentLoaded", () => {

// let countries = [];
const search = document.querySelector("#countryInput");
const matchList = document.querySelector("#countryList");
const matchList2 = document.querySelector("#countryList2");

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
    // if(matches === []){
    //     matches = [];
    //     matchess = [];
    //     console.log('coucou6');
    //     matchList.innerHTML = '';
    //     matchList2.innerHTML = '';
    // }

    
    outputHtml(matches);
    outputHtml2(matchess);
};

    const outputHtml = matches =>{
        if(matches.length > 0){
            const html = matches.map(match => `
            <div class="divSelect">
            <a href="show.php?id=${match.id}"> 
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
            <a href="show.php?id=${match.id}"> 
            <h4>${match.nicename} (${match.iso})<span></h4>
            </a>
            </div>`
            ).join('');
            matchList2.innerHTML = html2;
        }
    };

search.addEventListener('input', ()=> searchState(search.value))
});