document.addEventListener("DOMContentLoaded", function () {
    const searchForm = document.getElementById("search-form");
    const searchInput = document.getElementById("search-input");
    const wordDefinition = document.getElementById("word-definition");

    searchForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const searchTerm = searchInput.value;

        // Perform an AJAX request to get the definition
        fetch("get_definition.php", {
            method: "POST",
            body: new URLSearchParams({ word: searchTerm }),
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
        })
        .then((response) => response.text())
        .then((data) => {
            wordDefinition.textContent = data; // Display the definition
        })
        .catch((error) => {
            console.error("Error fetching definition:", error);
        });
    });
});
              
