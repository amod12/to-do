<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Todo List</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 42rem;
            margin: 1rem;
        }
        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }
        .card-content {
            padding: 1.5rem;
        }
        .card-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid #e5e7eb;
        }
        .input-group {
            display: flex;
            margin-bottom: 1rem;
        }
        .input {
            flex-grow: 1;
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.25rem;
            margin-right: 0.5rem;
        }
        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .btn-primary {
            background-color: #3b82f6;
            color: white;
        }
        .btn-outline {
            background-color: transparent;
            border: 1px solid #d1d5db;
        }
        .btn-destructive {
            background-color: #ef4444;
            color: white;
        }
        .todo-list {
            list-style-type: none;
            padding: 0;
        }
        .todo-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem;
            background-color: #f9fafb;
            border-radius: 0.25rem;
            margin-bottom: 0.5rem;
        }
        .todo-item label {
            margin-left: 0.5rem;
        }
        .todo-item.completed label {
            text-decoration: line-through;
            color: #6b7280;
        }
        .icon {
            width: 1rem;
            height: 1rem;
        }
        .dialog {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .dialog-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 0.5rem;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Your Todo List</h1>
        </div>
        <div class="card-content">
            <div class="input-group">
                <input type="text" class="input" placeholder="Add a new todo">
                <button class="btn btn-primary">
                    <i class="fas fa-plus icon"></i> Add Todo
                </button>
            </div>
            <ul class="todo-list">
                <li class="todo-item">
                    <div>
                        <input type="checkbox" id="todo-1">
                        <label for="todo-1">Complete Laravel project</label>
                    </div>
                    <div>
                        <button class="btn btn-outline" onclick="openDialog('todo-1')">
                            <i class="fas fa-pencil-alt icon"></i>
                        </button>
                        <button class="btn btn-destructive">
                            <i class="fas fa-trash icon"></i>
                        </button>
                    </div>
                </li>
                <li class="todo-item completed">
                    <div>
                        <input type="checkbox" id="todo-2" checked>
                        <label for="todo-2">Implement Repository Pattern</label>
                    </div>
                    <div>
                        <button class="btn btn-outline" onclick="openDialog('todo-2')">
                            <i class="fas fa-pencil-alt icon"></i>
                        </button>
                        <button class="btn btn-destructive">
                            <i class="fas fa-trash icon"></i>
                        </button>
                    </div>
                </li>
                <li class="todo-item">
                    <div>
                        <input type="checkbox" id="todo-3">
                        <label for="todo-3">Write unit tests</label>
                    </div>
                    <div>
                        <button class="btn btn-outline" onclick="openDialog('todo-3')">
                            <i class="fas fa-pencil-alt icon"></i>
                        </button>
                        <button class="btn btn-destructive">
                            <i class="fas fa-trash icon"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
        <div class="card-footer">
            <p class="text-sm text-gray-500">1 of 3 tasks completed</p>
        </div>
    </div>

    <div id="editDialog" class="dialog">
        <div class="dialog-content">
            <span class="close" onclick="closeDialog()">&times;</span>
            <h2>Edit Todo</h2>
            <label for="edit-todo">Todo Title</label>
            <input type="text" id="edit-todo" class="input" style="width: 100%; margin-top: 10px;">
            <button class="btn btn-primary" style="margin-top: 10px;" onclick="closeDialog()">Save changes</button>
        </div>
    </div>

    <script>
        function openDialog(todoId) {
            document.getElementById('editDialog').style.display = 'block';
            document.getElementById('edit-todo').value = document.querySelector(`label[for="${todoId}"]`).textContent;
        }

        function closeDialog() {
            document.getElementById('editDialog').style.display = 'none';
        }
    </script>
</body>
</html>