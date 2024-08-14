
<?php
// Start the session
session_start();

// Function to display the data
function displayData() {
    if (!empty($_SESSION['formData'])) {
        echo "<h1>Stored Data</h1>";
        echo "<table border='10'>";
        echo "<tr><th>Task</th><th>Deadline</th><th>Status</th></tr>";
        foreach ($_SESSION['formData'] as $key => $data) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($data['task']) . "</td>";
            echo "<td>" . htmlspecialchars($data['deadline']) . "</td>";
            echo "<td>
                    <a href='?action=edit&id=$key'>Edit</a> |
                    <a href='?action=delete&id=$key'>Delete</a>
                 </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data stored in session.";
    }
}

// Handle CRUD actions
if (isset($POST['action'])) {
    $action = $POST['action'];
    $id = $POST['id'];

    if ($action == 'delete') {
        // Delete the data
        unset($_SESSION['formData'][$id]);
        echo "Data deleted successfully!<br>";
    } elseif ($action == 'edit') {
        // Edit the data
        $name = $_SESSION['formData'][$id]['task'];
        $email = $_SESSION['formData'][$id]['dealine'];
        echo "
        <h1>Edit Data</h1>
        <form method='post' action='?action=update&id=$id'>
            <label for='task'>Name:</label>
            <input type='text' id='ID' name='task' value='" . htmlspecialchars($task) . "' required>
            <br><br>
            <label for='deadline'>deadline:</label>
            <input type='deadline' id='ID' name='deadline' value='" . htmlspecialchars($deadline) . "' required>
            <br><br>
            <input type='submit' value='Update'>
            
        </form>";
        exit;
    } elseif ($action == 'update') {
        // Update the data
        $_SESSION['formData'][$id] = array('task' => $_POST['task'], 'deadline' => $_POST['daedline']);
        echo "Data updated successfully!<br>";
    }
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST ['action'])) {
    $task = $_POST['task'];
    $deadline = $_POST['deadline'];

    // Store data in session
    $_SESSION['formData'][] = array('task' => $task, 'deadline' => $deadline);

    echo "Data stored in session successfully! <br>";
}

// Display the form
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced todo list</title>
</head>

<body>
    <table>
    <tr>
<th>Task ID</th>
<th>Task Name</th>
<th>deadline</th>
<th>status</th>


    </tr>
    <form action = "Todo.php" method = "POST">
  <td><input type = "text" id= "ID" name = "ID" placeholder = "Enter unique Task ID"></td>
  <td><input type = "text" id= "task" name = "task" placeholder = "Enter your task name"></td>
  <td><input type = "date"  name = "deadline" placeholder = "Enter your deadline"></td>
  <td><input type = "checkbox"  name = "status" id="status" >
  <label for= "status" >Completed</label>
</td>
  </table>
  <button type = "submit" name = "submit">create task</button>
  <!-- <Select name = "Option"><br>
    <Option value = >  </option>
    <Option value = "add">Add Task</option>
    <Option value = "edit">Edit Task</Option>
    <Option value = "delete">Delete Task</Option> -->
    
    </select><br><br> 

    </form>
    <?php
    // Display the stored data
    displayData();
    ?>
</body>
</html>

