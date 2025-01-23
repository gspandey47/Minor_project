
let Mynav=document.getElementById("myNav");
    
function myFunc(){
    
    // Mynav.style.backgroundColor="yellow";
    if(Mynav.style.height<="40px"){
    Mynav.style.height="400px";
    
}


}






// yha se news api ki js code suru hai

const API_key="eb2aced6113e4cb5bff44ee43cc60515";
// const url="https://newsapi.org/v2/top-headlines?q=";
const url="https://newsapi.org/v2/everything?q=";

window.addEventListener("load",()=>fetchNews("India"));

async function fetchNews(query) {
    const res = await fetch(`${url}${query}&apiKey=${API_key}`);
    const data=await res.json();
    bindData(data.articles);
     console.log(data);
    
}



function bindData(articles){
    const cardsContainer = document.getElementById("cards-container");
    const newsCardTemplate=document.getElementById("template-news-card");

    cardsContainer.innerHTML= '';

    articles.forEach(article => {
        if(!article.urlToImage) return;


        const cardClone=newsCardTemplate.content.cloneNode(true);
        fillDataInCard(cardClone,article);
        cardsContainer.appendChild(cardClone);
        
    });
}

function fillDataInCard(cardClone,article){
    const newsImg=cardClone.querySelector('#news-img');
    const newsTitle=cardClone.querySelector('#news-title');
    const newsSource=cardClone.querySelector('#news-source');
    const newsdDesc=cardClone.querySelector('#news-desc');

    newsImg.src=article.urlToImage;
    newsTitle.innerHTML=article.title;
    newsdDesc.innerHTML=article.description;

    cardClone.firstElementChild.addEventListener('click',()=>{
        window.open(article.url,"_blank");
    })
}
    // const date=new Date(article.publichedAt).toLocalString("en-US",{
    //     timeZone:"Asia/Jakarta"
    // });



    let curSelectedNav=null;
    function navItemclick(id){
        fetchNews(id);
        const navItem= document.getElementById(id);
        curSelectedNav?.classList.remove('active');
        curSelectedNav=navItem;
        curSelectedNav.classList.add('active')

    }

const search_btn =document.getElementById('searchbtn');
const searchText =document.getElementById('inputme');


search_btn.addEventListener('click',()=>{
    const query=searchText.value;
    if(!query) return;
    fetchNews(query);
    curSelectedNav?.classList.remove('active');
    curSelectedNav=null;
});



function reload(){
    window.location.reload();
}