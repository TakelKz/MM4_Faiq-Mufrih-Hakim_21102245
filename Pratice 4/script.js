function addTask() {
    const taskInput = document.getElementById("task");
    const taskText = taskInput.value.trim();
    if (taskText === "") return;

    const taskList = document.getElementById("taskList");
    const newTask = document.createElement("li");
    newTask.innerText = taskText;
    taskList.appendChild(newTask);

    taskInput.value = "";

    // Add an event listener to remove a task
    newTask.addEventListener("click", function () {
        taskList.removeChild(newTask);
    });
}
