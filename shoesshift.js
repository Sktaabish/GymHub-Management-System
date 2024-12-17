var existingContent5 = document.getElementById('remove');
var newContent5 = document.getElementById('content');
var showNewContentBtn5 = document.getElementById('shoes');

function showNewContent5() {
  existingContent5.style.visibility = 'hidden';
  newContent5.style.display= 'block';
}

showNewContentBtn5.addEventListener('click', showNewContent5);