const movieContainer = document.getElementById('movie-list');
const apiKey = '6761005f';
const searchKeyword = 'Inception';

async function getMovies() {
    try {
        const response = await fetch(`https://www.omdbapi.com/?s=${searchKeyword}&apikey=6761005f`);
        const data = await response.json();

        if (data.Search) {
            movieContainer.innerHTML = data.Search.map(movie => `
                <div class="col-md-4">
                    <div class="card movie-card shadow-sm h-100">
                        <img src="${movie.Poster}" class="card-img-top" alt="${movie.Title}" style="height: 400px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-primary">${movie.Title}</h5>
                            <p class="card-text text-muted">Yýl: ${movie.Year}</p>
                            <span class="badge bg-info">Sinema</span>
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