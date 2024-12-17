const nextBtn2 = document.getElementById('women');
const contentDiv2 = document.getElementById('content');

nextBtn2.addEventListener('click', function() {

  fetch('women.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv2.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});