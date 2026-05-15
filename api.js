const movieContainer = document.getElementById('movie-list');
const apiKey = '6761005f';
const searchKeyword = 'Inception';

async function getMovies() {
    try {
        const response = await fetch(`https://www.omdbapi.com/?s=${searchKeyword}&apikey=6761005f`);
        const data = await response.json();

        if (data.Search) {
            movieContainer.innerHTML = data.Search.map(movie => `

    <div class="col-md-4 mb-4">
    <div class="card movie-card h-100 shadow-sm">
    <img src="${movie.Poster !== 'N/A' ? movie.Poster : 'https://via.placeholder.com/300x450?text=Afis+Yok'}" 
                 class="card-img-top" 
                 alt="${movie.Title}" 
                 style="height: 400px; object-fit: cover;">
            
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h5 class="card-title text-primary fw-bold">${movie.Title}</h5>
                    <p class="card-text text-muted">Yýl: ${movie.Year}</p>
                </div>
                <span class="badge bg-info align-self-start">Sinema</span>
            </div>
        </div>
    </div>
`).join('');
        }
    } catch (error) {
        console.error("API hatasý:", error);
    }
}

getMovies();