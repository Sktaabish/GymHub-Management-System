const nextBtn11 = document.getElementById('upload-page');
const contentDiv11 = document.getElementById('content');

nextBtn11.addEventListener('click', function() {

  fetch('uploadcont.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv11.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});