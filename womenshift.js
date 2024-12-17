var existingContent1 = document.getElementById('remove');
var newContent1 = document.getElementById('content');
var showNewContentBtn1 = document.getElementById('women');

function showNewContent1() {
  existingContent1.style.visibility = 'hidden';
  newContent1.style.display= 'block';
}

showNewContentBtn1.addEventListener('click', showNewContent1);