const nextBtn10 = document.getElementById('member-page');
const contentDiv10 = document.getElementById('content');

nextBtn10.addEventListener('click', function() {

  fetch('display1.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv10.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});