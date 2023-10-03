document.addEventListener("DOMContentLoaded", function () {
    const searchForm = document.getElementById("search-form");
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const wordDefinition = document.getElementById("word-definition");

    searchForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const searchTerm = searchInput.value;
        // Perform a JavaScript AJAX request to retrieve the word definition and display it in 'wordDefinition' div
        // You'll need to implement this part.
    });
});
                          
