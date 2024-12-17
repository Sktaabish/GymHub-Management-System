var existingContent4 = document.getElementById('remove');
var newContent4 = document.getElementById('content');
var showNewContentBtn4 = document.getElementById('bag');

function showNewContent4() {
  existingContent4.style.visibility = 'hidden';
  newContent4.style.display= 'block';
}

showNewContentBtn4.addEventListener('click', showNewContent4);