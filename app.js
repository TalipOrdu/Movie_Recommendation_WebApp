mybutton = document.getElementById("gotopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {

  document.documentElement.scrollTop = 0;
}

// ********** TMDB API
//988e17afa010ca134f38ace964916dd5

// https://api.themoviedb.org/3/movie/550?api_key=988e17afa010ca134f38ace964916dd5

const API_KEY = 'api_key=988e17afa010ca134f38ace964916dd5';
const BASE_URL = 'https://api.themoviedb.org/3';
const API_URL = BASE_URL + '/discover/movie?sort_by=popularity.desc&'+API_KEY;
const IMG_URL = 'https://image.tmdb.org/t/p/w500';
const searchURL = BASE_URL + '/search/movie?'+API_KEY;

const genres =
  [
     {
        "id":28,
        "name":"Action"
     },
     {
        "id":12,
        "name":"Adventure"
     },
     {
        "id":16,
        "name":"Animation"
     },
     {
        "id":35,
        "name":"Comedy"
     },
     {
        "id":80,
        "name":"Crime"
     },
     {
        "id":99,
        "name":"Documentary"
     },
     {
        "id":18,
        "name":"Drama"
     },
     {
        "id":10751,
        "name":"Family"
     },
     {
        "id":14,
        "name":"Fantasy"
     },
     {
        "id":36,
        "name":"History"
     },
     {
        "id":27,
        "name":"Horror"
     },
     {
        "id":10402,
        "name":"Music"
     },
     {
        "id":9648,
        "name":"Mystery"
     },
     {
        "id":10749,
        "name":"Romance"
     },
     {
        "id":878,
        "name":"Science Fiction"
     },
     {
        "id":10770,
        "name":"TV Movie"
     },
     {
        "id":53,
        "name":"Thriller"
     },
     {
        "id":10752,
        "name":"War"
     },
     {
        "id":37,
        "name":"Western"
     }
]

const main = document.getElementById("main");
const form = document.getElementById("form");
const search = document.getElementById("search");
const tagsEl = document.getElementById("tags");

const prev = document.getElementById('prev');
const current = document.getElementById('current');
const next = document.getElementById('next');

var currentPage = 1;
var nextPage = 2;
var prevPage = 3;
var lastURL = '';
var totalPages = 100;

var selectedGenre = []

setGenre();

function setGenre(){
  tagsEl.innerHTML = '';
  genres.forEach(genre =>{
    const t = document.createElement('div');
    t.classList.add('tag');
    t.id = genre.id;
    t.innerText = genre.name;
    t.addEventListener("click", ()=>{

      if(selectedGenre.length === 0){
        selectedGenre.push(genre.id);
      }else{
        if(selectedGenre.includes(genre.id)){
          selectedGenre.forEach((id, idx)=>{
            if(id === genre.id){
              selectedGenre.splice(idx,1);
              
            }
          })
        }else{
          selectedGenre.push(genre.id);
        }
      }

      // console.log(selectedGenre);
      getMovies(API_URL+ '&with_genres='+encodeURI(selectedGenre.join(',')));

      selectionColoring();
    });
    tagsEl.appendChild(t);
  })

}
function selectionColoring(){
  const tags = document.querySelectorAll('.tag');
  tags.forEach(tag =>{
    tag.classList.remove('highlight');
  })

  if(selectedGenre.length !=0){
    selectedGenre.forEach(id => {
      const coloredTag = document.getElementById(id);
      coloredTag.classList.add('highlight');

    })
  }
  
}

function getMovies(url){
  lastURL = url;
  fetch(url).then(res => res.json())
  .then(data => {

    if(data.results.length !=0){
      // console.log(data);
      displayMovies(data.results);
      currentPage = data.page;
      nextPage = currentPage + 1;
      prevPage = currentPage - 1;
      totalPages = data.total_pages;

      current.innerText = currentPage;
      if(currentPage <=1){
        prev.classList.add('disabled');
        
      }else if(currentPage >= totalPages){
        prev.classList.remove('disabled');
        next.classList.add('disabled');
      }else{
        prev.classList.remove('disabled');
        next.classList.remove('disabled');
      }

      

    }else{
      main.innerHTML = `<h1 class="no-result"> No Results Found </h1>`;
    }
    
  });
  // console.log(data.results);
  
  
}
getMovies(API_URL);


// <br/> 
// <button>know more </button>
function displayMovies(data){
  
  main.innerHTML = '';
  data.forEach(movie =>{

    const {title,poster_path,vote_average,overview} = movie;
    const movieEl = document.createElement('div');
    movieEl.classList.add('movie');
    movieEl.innerHTML = `
      <img src="${poster_path? IMG_URL+poster_path:"https://media.tenor.com/OyUVgQi-l-QAAAAC/404.gif"}" alt="${title}">
      <div class="movie-info">
      <h3>${title}</h3>
      <span class="${setColor(vote_average)}">${vote_average}</span>
      </div>
      <div class="overview">
        <h3>Overview</h3>
        ${overview}

       
      
      </div>
    `;

    main.appendChild(movieEl);

  })
}

function setColor(vote){

  if(vote>=7.5){
    return "green";
  }
  else if(vote >=5){
    return "orange";
  }
  else{
    return 'red';
  }
  
}

form.addEventListener("submit",(event)=>{
  event.preventDefault();

  const searchTerm = search.value;

  if(searchTerm){
    getMovies(searchURL+'&query='+searchTerm);
  }else{
    getMovies(API_URL);
  }

});

prev.addEventListener('click',()=>{

  if(prevPage > 0){
    pageCall(prevPage);
  }
})

next.addEventListener('click',()=>{

  if(nextPage <= totalPages){
    pageCall(nextPage);
  }
})

function pageCall(page){
  let urlSplit = lastURL.split('?');
  let queryParams = urlSplit[1].split('&');
  let key = queryParams[queryParams.length -1].split('=');
  if(key[0]!= 'page'){
    let url = lastURL + '&page='+ page;
    getMovies(url);
  }else{
    key[1] = page.toString();
    let a = key.join('=');
    queryParams[queryParams.length-1] = a;
    let b = queryParams.join('&');
    let url = urlSplit[0] + '?' + b;

    getMovies(url);
  }
}
