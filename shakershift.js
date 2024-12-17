var existingContent3 = document.getElementById('remove');
var newContent3 = document.getElementById('content');
var showNewContentBtn3 = document.getElementById('shaker');

function showNewContent3() {
  existingContent3.style.visibility = 'hidden';
  newContent3.style.display= 'block';
}

showNewContentBtn3.addEventListener('click', showNewContent3);