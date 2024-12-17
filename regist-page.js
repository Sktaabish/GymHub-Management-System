const nextBtn9 = document.getElementById('register-page');
const contentDiv9 = document.getElementById('content');

nextBtn9.addEventListener('click', function() {

  fetch('display.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv9.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});