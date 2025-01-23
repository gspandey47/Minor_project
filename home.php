<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="./urstyle.css">
    <link rel="stylesheet" href="./bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">


    <style>
 /* movies */

 .carousel-item img {
        border-radius: 10px;
        max-height: 400px;
        object-fit: cover;
      }
      .movie-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-top: 0.5rem;
      }
      .movie-card {
        text-align: center;
      }
      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
      }

      #movie{
        min-height:400px;
      }
/* end movies */

        .slider-wrapper {
        overflow: hidden;
        position: relative;
        width: 100%;
      }

      .slider {
        display: flex;
        gap: 1rem;
        animation: scroll 20s linear infinite;
      }

      .slider .card {
        flex: 0 0 calc(33.33% - 1rem); /* Default: 3 cards per view */
        max-width: calc(33.33% - 1rem);
        transition: transform 0.3s;
      }

      .slider img {
        object-fit: cover;
        height: 150px;
      }

      @keyframes scroll {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(-100%);
        }
      }

      @media (max-width: 768px) {
        .slider .card {
          flex: 0 0 calc(50% - 1rem); /* 2 cards per view on tablets */
          max-width: calc(50% - 1rem);
        }
      }

      @media (max-width: 576px) {
        .slider .card {
          flex: 0 0 100%; /* 1 card per view on mobile */
          max-width: 100%;
        }
      }


    </style>


</head>

<body>
<div class=" container-fluid d-flex justify-content-center flex-column align-content-center bg-white" id="bestheader"><img src="thehindu-logo copy.svg" alt="">
    <p  class="text-center fw-bolder">Bad news travels at the speed of light 
        Good news travel like molasses.
    
        The Development of any empire depends of the development of the people living in that empire,so change yourself.</h5>
    </p>
</div>

    <header id="headhumai" class="sticky-lg-top">
        <nav id="myNav">
            <ul class="text-secondary ulf">
                <a href="" onclick="reload()" class="menu"><img src="thehindu-logo.svg"alt="" ></a>
                
                <li class="menu li"><a href="panel.php">Admin</a></li>
                
                <li id="sports" onclick="navItemclick('sports')" class="menu ">Sports</li>
                <li id="politics" onclick="navItemclick('politics')" class="menu ">Politics</li>
                <li id="finance" onclick="navItemclick('finance')" class="menu ">Finance</li>
                


            </ul>
        </nav>
        <div id="myspecial">
            <input type="text" class="menu " name="" value="" id="inputme" style="color:#943578">
            <button class="menu btn text-white" id="searchbtn">Search</button>
            <button class="menu btn"><a href="login.php">signin</a></button>
            <button id="hamburger" onclick="myFunc()"><a><i class="fa fa-bars" aria-hidden="true"></i></a></button>
        </div>


    </header>

<!-- headlines     -->
    <div class="container my-5 " id="slider">
      <h6 class="text-center"> News Headlines</h6>
      <div class="slider-wrapper">
        <div id="news-slider" class="slider"></div>
      </div>
    </div>
    
     <!-- movies -->


     <div class="container-fluid  border border-2 border-black rounded-3 bg-black" id="movie">
      <h1 class="text-center mb-4">Trending Movies</h1>
      <div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="movieContainer">
          <!-- Movie cards will be inserted here dynamically -->
        </div>
        <!-- Carousel Controls -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#movieCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#movieCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> 







    
    
    
    <!-- yha se news fetching suru hai -->
     
    <main class="rounded-2 container-fluid bg-dark mt-5" id="mouceup">
        <card>
            <div class=" row row-cols-sm-2 row-cols-md-3 g-4" id="cards-container">


            </div>
        </card>

    </main>
    <template id="template-news-card">

        <card>
           

            <div class="col d-flex justify-content-center rounded-3 bg-gradient">
                <div class="card">
                    <img src="./OIP.jpg" alt="" class="card-img-top" id="news-img">
                    <div class="card-body bg-primary">
                        <h5 class="card-title text-white" id="news-title">Card title</h5>
                        
                        <p class="card-text text-dark fw-bolder" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Doloremque ut
                            quam
                            iure corrupti itaque ipsa in? Esse asperiores perferendis non.</p>
                    </div>
                    <span class="text-end fw-bold ">Readmore</span>
                </div>

            </div>




           

        </card>









       
    </template>

    <!-- start foooter -->

    
    <footer>
        <div class="container-fluid ">
            <div class="row bg-secondary"><span class="text-white pt-4 display-none"></span></div>
            <div class="row bg-dark d-flex pt-5"id="Frow">
<div class="col-lg-3">
    <ul class="list-unstyled">
        <li><img src="./download9.png" alt="" style="height: 16px; width: 14px;"> <span class="text-white">chat with news promotion</span></li>
        <li><img src="./download7.png" alt="" style="height: 16px; width: 14px;"> <span class="text-white">gaurav@gmail.com</span></li>
        <li><img src="./download6.png" alt="" style="height: 16px; width: 14px;"> <span class="text-white">8849530321</span></li>
    </ul>
</div>
<div class="col-lg-3">
    <span class="text-success">Another news(click your own choice and you can see the news at main content)</span>
<ul class="list-unstyled text-white">
    <li id="Fcrime" onclick="navItemclick('Fcrime')">crime</li>
    <li id="Fpolice" onclick="navItemclick('Fpolice')">Police</li>
    <li id="Fmurder" onclick="navItemclick('Fmurder')">Murder</li>
    <li id="FUP" onclick="navItemclick('FUP')">UttarPradesh</li>
    <li id="FG" onclick="navItemclick('FG')">Gujrat</li>
</ul>
</div>
<div class="col-lg-3">
    <ul class="list-unstyled text-white">
        <li><a href="">Home</a></li>
        <li><a href="">Docs</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Project</a></li>
       
    </ul>
</div>
<div class="col-lg-3">
    <span class="text-secondary">Follow US On</span>
    <ul class="list-unstyled">
        <li><img src="./download2.png" alt="" style="height: 27px; width: 18px;"></li>
        <li><img src="./download3.png" alt="" style="height: 28px; width: 23px;"></li>
        <li><img src="./download4.png" alt="" style="height: 28px; width: 24px;"></li>
        <li><img src="./download5.png" alt="" style="height: 28px; width: 25px;"></li>
        <li><img src="./download1.png" alt="" style="height: 28px; width: 27px;"></li>
    </ul>


            </div>
            
        </div>
        <div class="row bg-secondary pt-3 text-center"><span class="text-white text-decoration-underline ms-4">PoweredbyNEWS</span></div>
    </footer>

<script>
  const API_KEY = "eb2aced6113e4cb5bff44ee43cc60515"; 
      const API_URL = `https://newsapi.org/v2/top-headlines?country=us&apiKey=${API_KEY}`;

      async function fetchNews() {
        try {
          const response = await fetch(API_URL);
          const data = await response.json();
          if (data.status === "ok") {
            displayNews(data.articles);
          } else {
            console.error("Error fetching news:", data);
          }
        } catch (error) {
          console.error("Error:", error);
        }
      }

      function displayNews(articles) {
        const slider = document.getElementById("news-slider");

        // Duplicate articles for infinite scrolling
        const duplicatedArticles = [...articles, ...articles];

        duplicatedArticles.forEach((article) => {
          const card = document.createElement("div");
          card.className = "card";
          card.innerHTML = `
          <img src="${
            article.urlToImage || "https://via.placeholder.com/150"
          }" class="card-img-top" alt="news">
          <div class="card-body d-flex flex-column">
            <h6 class="card-title ">${article.title || "No Title Available"}</h6>
            <p class="card-text">${
              article.description || "No description available"
            }</p>
            <a href="${
              article.url
            }" class="btn btn-primary mt-auto" target="_blank">Read More</a>
          </div>
        `;
          slider.appendChild(card);
        });
      }

      fetchNews();  




      $(document).ready(() => {
        $("#slider").keyup(() => {
          $("#slider").slideUp(2000, () => {
            // document.querySelector("div").style.backgroundColor = "yellow";
            // alert("finished");
          });
        });
        $("#mouceup").keyup(() => {
          $("#slider").slideDown(5000, () => {
            // document.querySelector("div").style.backgroundColor = "yellow";
            alert("finished");
          });
        });
      });



      
      const API_KEYm = "f77464ae"; // Replace with your OMDb API key
      const MOVIE_TITLES = [
        // "Pushpa 2: The Rule",
        "Mirzapur",
        "Mirzapur Season 2",
        "Mirzapur Season 3",
        "Kalki 2898 AD",
        // "Pushpa 2: The Rule",
        "Fighter",
        "Animal",
        "Singham Again",
        // "Indian 2",
        "Salaar",
        "Leo",
        "Jawan",
        "Gadar 2",
        // "Rocky Aur Rani Ki Prem Kahani",
        "Dream Girl 2",
        "Dangal",
        "Bahubali: The Beginning",
        "Bahubali 2: The Conclusion",
        "3 Idiots",
        "PK",
        "Lagaan",
        "Gully Boy",
        "Swades",
        "Chennai Express",
        "Kabir Singh",
        "Kalki 2898 AD",
        "Pushpa: The Rise",
        "Pushpa 2: The Rule",
        "Animal",
        "Fighter",
        "Singham Again",
        "Indian 2",
        "Salaar",
        "Leo",
        "Jawan",
        "Gadar 2",
        "Rocky Aur Rani Ki Prem Kahani",
        "Dream Girl 2",
        "RRR",
        "KGF Chapter 1",
        "KGF Chapter 2",
        "Drishyam",
        "Drishyam 2",
        "Zindagi Na Milegi Dobara",
        "Barfi",
        "Padmaavat",
        "Tanhaji",
        "Dilwale Dulhania Le Jayenge",
        "Kabhi Khushi Kabhie Gham",
        "Sholay",
        "Deewar",
        "Andaz Apna Apna",
        "Mughal-E-Azam",
        "Mother India",
        "Om Shanti Om",
        "Kal Ho Naa Ho",
        "Veer-Zaara",
        "Black",
        "Sultan",
        "War",
        "Don",
        "Don 2",
        "Raees",
        "Chak De India",
        "Dangal",
        // "Bahubali: The Beginning",
        // "Bahubali 2: The Conclusion",
        "3 Idiots",
        "PK",
        "Lagaan",
        "Gully Boy",
        "Swades",
        "Chennai Express",
        "Kabir Singh",
        "Inception",
        "Avatar",
        "Titanic",
        "The Dark Knight",
        "Interstellar",
      ]; // Example movie titles

      const movieContainer = document.getElementById("movieContainer");

      // Fetch movie data for each title
      async function fetchMovies() {
        try {
          const movieCards = await Promise.all(
            MOVIE_TITLES.map(async (title) => {
              const response = await fetch(
                `https://www.omdbapi.com/?apikey=${API_KEYm}&t=${encodeURIComponent(
                  title
                )}`
              );
              const data = await response.json();
              return createMovieCard(data);
            })
          );
          movieCards.forEach((card, index) => {
            const isActive = index === 0 ? "active" : "";
            movieContainer.innerHTML += `<div class="carousel-item ${isActive}">${card}</div>`;
          });
        } catch (error) {
          console.error("Error fetching movies:", error);
        }
      }

      // Create a movie card
      function createMovieCard(movie) {
        if (movie.Response === "False")
          return `<div class="text-danger">Movie not found</div>`;
        return `
                <div class="movie-card">
                    <img src="${movie.Poster}" alt="${movie.Title}" class="img-fluid">
                    <div class="movie-title">${movie.Title}</div>
                    <p class="text-muted">${movie.Year}</p>
                </div>`;
      }

      // Initialize movie fetch
      fetchMovies();
    


</script>





    <script src="urscript.js"></script>
<!-- <script src="./newApi.js"></script> -->
</body>

</html>