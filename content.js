var existingContent = document.getElementById('wel');
var newContent = document.getElementById('content');
var dashContentBtn = document.getElementById('dash-page');
var registerContentBtn = document.getElementById('register-page');
var memberContentBtn = document.getElementById('member-page');
var uploadContentBtn = document.getElementById('upload-page');

function showNewContent() {
  existingContent.style.visibility = 'hidden';
  newContent.style.display = 'block';
}

dashContentBtn.addEventListener('click', showNewContent);
registerContentBtn.addEventListener('click', showNewContent);
memberContentBtn.addEventListener('click', showNewContent);
uploadContentBtn.addEventListener('click', showNewContent);