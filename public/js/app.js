import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function () {
    console.log("WebTech is ready!");
});




// script.js
function search() {
    var query = document.getElementById('search-bar').value;

    if (query.length > 2) { // Only search when the query length is greater than 2
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "search.php?q=" + query, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var results = JSON.parse(xhr.responseText);
                displayResults(results);
            }
        };
        xhr.send();
    } else {
        document.getElementById('search-results').style.display = 'none'; // Hide results if the query is too short
    }
}

function displayResults(results) {
    var resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = '';
    
    if (results.length > 0) {
        results.forEach(function(result) {
            var div = document.createElement('div');
            div.textContent = result;
            resultsContainer.appendChild(div);
        });
        resultsContainer.style.display = 'block';
    } else {
        resultsContainer.innerHTML = 'No results found.';
        resultsContainer.style.display = 'block';
    }
}
