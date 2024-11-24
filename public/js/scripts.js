// JavaScript for search functionality in Services section
document.addEventListener('DOMContentLoaded', function () {
    const searchBar = document.getElementById('searchBar');
    const servicesList = document.getElementById('services-list');
    const serviceItems = servicesList.getElementsByClassName('service-item');

    searchBar.addEventListener('input', function () {
        const query = searchBar.value.toLowerCase();

        Array.from(serviceItems).forEach(function (item) {
            const title = item.querySelector('h3').textContent.toLowerCase();
            const description = item.querySelector('p').textContent.toLowerCase();

            if (title.includes(query) || description.includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
