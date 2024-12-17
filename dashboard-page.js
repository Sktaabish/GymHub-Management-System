const nextBtn8 = document.getElementById('dash-page');
const contentDiv8 = document.getElementById('content');

nextBtn8.addEventListener('click', function() {

  fetch('dashboard.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv8.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});