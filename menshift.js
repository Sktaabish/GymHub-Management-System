var existingContent = document.getElementById('remove');
var newContent = document.getElementById('content');
var showNewContentBtn = document.getElementById('men');

function showNewContent() {
  existingContent.style.visibility = 'hidden';
  newContent.style.visibility= 'visible';
}

showNewContentBtn.addEventListener('click', showNewContent);