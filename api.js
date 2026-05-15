const movieContainer = document.getElementById('movie-list');
const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button'); 
const apiKey = '67519432'; 

async function getMovies(query = 'Inception') {
    try {
        const response = await fetch(`https://www.omdbapi.com/?s=${query}&apikey=${apiKey}`);
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
                                <p class="card-text text-muted mb-1">Yýl: ${movie.Year}</p>
                                <p class="small text-secondary">IMDb ID: ${movie.imdbID}</p> 
                            </div>
                            <span class="badge bg-info align-self-start">Sinema</span>
                        </div>
                    </div>
                </div>
            `).join('');
        } else {
            movieContainer.innerHTML = '<p class="text-center">Film bulunamadý aþkým, baþka bir þey yaz.</p>';
        }
    } catch (error) {
        console.error("API hatasý:", error);
    }
}

searchButton.addEventListener('click', () => {
    const query = searchInput.value;
    if (query) {
        getMovies(query);
    }
});

searchInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        const query = searchInput.value;
        if (query) {
            getMovies(query);
        }
    }
});

getMovies();