function showDeleteForm(id) {
  var element = document.getElementById("deleteWarningForm");
  var currentAction = document.getElementById('deleteForm').action;
  while (currentAction.endsWith('/') == false) {
  	currentAction = currentAction.slice(0, -1);
  }
  document.getElementById('deleteForm').action = currentAction + id;
  element.classList.remove("hidden");
}

function hideDeleteForm() {
  var element = document.getElementById("deleteWarningForm");
  element.classList.add("hidden");
}