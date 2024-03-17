function search() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const posts = document.querySelectorAll('.post p');
    const searchResultsDiv = document.getElementById('searchResults');

    searchResultsDiv.innerHTML = '';

    posts.forEach(post => {
        const postContent = post.textContent.toLowerCase();
        if (postContent.includes(searchInput)) {
            const resultDiv = document.createElement('div');
            resultDiv.innerHTML = `<p>${postContent}</p>`;
            searchResultsDiv.appendChild(resultDiv);
        }
    });
}
