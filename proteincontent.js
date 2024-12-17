const nextBtn3 = document.getElementById('protein');
const contentDiv3 = document.getElementById('content');

nextBtn3.addEventListener('click', function() {

  fetch('protein.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv3.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});