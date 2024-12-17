var existingContent6 = document.getElementById('remove');
var newContent6 = document.getElementById('content');
var showNewContentBtn6 = document.getElementById('yoga');

function showNewContent6() {
  existingContent6.style.visibility = 'hidden';
  newContent6.style.display= 'block';
}

showNewContentBtn6.addEventListener('click', showNewContent6);