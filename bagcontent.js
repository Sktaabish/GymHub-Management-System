const nextBtn5 = document.getElementById('bag');
const contentDiv5 = document.getElementById('content');

nextBtn5.addEventListener('click', function() {

  fetch('bag.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv5.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});