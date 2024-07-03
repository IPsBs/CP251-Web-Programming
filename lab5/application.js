document.addEventListener('DOMContentLoaded', function() {
  // Codes placed here will run when the DOM content has loaded.
  // Returns an array of elements with the 'remove-button' class name.
document.getElementsByClassName('remove-button');
var todoList = document.getElementById('todo-list');
var taskDetail = document.getElementById('task-detail');
var addTaskButton = document.getElementById('addtask-button');
var taskCount = 0;

// addTask function will dynamically add a div element
// containing the task detail to the todo-list div.
var addTask = function() {
  // The createElement() method creates an Element Node with the specified name.
  // Create a div element and assign it to taskDiv variable.
  var taskDiv = document.createElement('div');
  // Create a h5 element and assign it to the taskH5 variable.
  var taskH5 = document.createElement('h5');
  // Sets the class attribute of taskH5 to take up 4 columns in
  // Bootstrap's grid and a task class that we will add custom styles in CSS.
  // Create a button element and assign it to removeButton variable.
 var removeButton = document.createElement('button');
 // Set class attribute of removeButton as btn, btn-danger and remove-button.
 removeButton.setAttribute('class','btn btn-danger remove-button');
 // Add the string "REMOVE" into the innerHTML of removeButton.
 removeButton.innerHTML = "REMOVE";
  // Define the event listener so that this taskDiv element
 // will be removed when the user clicks removeButton
 removeButton.onclick = function() {
  // We use 'this' to point to the remove button element.
  // this.parentNode.parentNode will assign the grandparent of
  // removeButton, which is the todo-list div to variable parent
  var parent = this.parentNode.parentNode;
  // this.parentNode will assign the taskDiv to variable child
  var child = this.parentNode;
  // We use the removeChild method to delete taskDiv from the DOM
  parent.removeChild(child);
  };
  taskH5.setAttribute('class', 'col-xs-4 task');
  taskH5.innerHTML = taskDetail.value;
  taskDiv.appendChild(taskH5);
  // Add removeButton as the last children element of taskDiv
  taskDiv.appendChild(removeButton);
  todoList.appendChild(taskDiv);
};
  // This anonymous function will execute when the addTaskButton is clicked.
addTaskButton.onclick = function() {
  // First we make sure that there is less than 10 tasks,
  // and some value exists in the input element.
  if (taskCount < 10 && taskDetail.value !== '') {
  // Executes the addTask function we defined earlier.
  addTask();
  // Add 1 to taskCount.
  taskCount++;
  // Clear the input element by setting it to empty string.
  taskDetail.value = '';
  }

 };
  
 });