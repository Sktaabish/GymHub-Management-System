const nextBtn7 = document.getElementById('yoga');
const contentDiv7 = document.getElementById('content');

nextBtn7.addEventListener('click', function() {

  fetch('yoga.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv7.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});