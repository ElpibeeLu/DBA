document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#new-task').onsubmit = (event) => {
      event.preventDefault();
  
      const taskInput = document.querySelector('#task');
      const taskText = taskInput.value.trim();
  
      if (taskText === '') {
        alert('Por favor, introduce una tarea válida.');
        return;
      }
  
      const cb = document.createElement('input');
      cb.setAttribute('type', 'checkbox');
      const li = document.createElement('li');
      const taskTextSpan = document.createElement('span');
      taskTextSpan.textContent = taskText;
  
      const deleteButton = document.createElement('button');
      deleteButton.textContent = 'X';
      deleteButton.addEventListener('click', function () {
        li.remove();
      });
  
      li.appendChild(cb);
      li.appendChild(taskTextSpan);
      li.appendChild(deleteButton);
  
      cb.addEventListener('change', function () {
        if (this.checked) {
          taskTextSpan.classList.add('completed');
        } else {
          taskTextSpan.classList.remove('completed');
        }
      });
  
      document.querySelector('#tasks').appendChild(li);
  
      taskInput.value = '';
    };
  });
  