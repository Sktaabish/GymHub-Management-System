const nextBtn4 = document.getElementById('shaker');
const contentDiv4 = document.getElementById('content');

nextBtn4.addEventListener('click', function() {

  fetch('shaker.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv4.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});