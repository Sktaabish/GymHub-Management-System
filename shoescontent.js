const nextBtn6 = document.getElementById('shoes');
const contentDiv6 = document.getElementById('content');

nextBtn6.addEventListener('click', function() {

  fetch('shoes.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv6.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});