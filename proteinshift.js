var existingContent2 = document.getElementById('remove');
var newContent2 = document.getElementById('content');
var showNewContentBtn2 = document.getElementById('protein');

function showNewContent2() {
  existingContent2.style.visibility = 'hidden';
  newContent2.style.display= 'block';
}

showNewContentBtn2.addEventListener('click', showNewContent2);