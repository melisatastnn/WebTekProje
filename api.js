const movieContainer = document.getElementById('movie-list');
const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button'); 
const apiKey = '67519432'; 

async function getMovies(query) {
    try {
        const response = await fetch(`https://www.omdbapi.com/?s=${query}&apikey=${apiKey}`);
        const data = await response.json();

        if (data.Search) {
            movieContainer.innerHTML = data.Search.map(movie => `
    <div class="col-md-4 mb-4">
        <div class="card movie-card h-100 shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
            <img src="${movie.Poster !== 'N/A' ? movie.Poster : 'https://via.placeholder.com/300x450?text=Afis+Yok'}" 
                 class="card-img-top" 
                 style="height: 400px; object-fit: cover;">
            <div class="card-body d-flex flex-column justify-content-between text-center bg-white">
                <div>
                    <h5 class="card-title text-primary fw-bold mb-1">${movie.Title}</h5>
                    <p class="card-text text-muted small mb-1">Yil: ${movie.Year}</p> 
                    <p class="small fw-bold text-secondary mb-2">IMDb No: ${movie.imdbID}</p>
                </div>
                <span class="badge bg-info align-self-center mt-2">Sinema</span>
            </div>
        </div>
    </div>
`).join('');
        } else {
            movieContainer.innerHTML = '<p class="text-center">Film bulunamadý.</p>';
        }
    } catch (error) {
        console.error("Hata:", error);
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
