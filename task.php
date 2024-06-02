<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  header("location: login.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>

    <link rel="stylesheet" href="style-task.css">
    <script src="task-script.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

        


        <style>
            form {
                margin: 0 auto;
                width: 400px;
                padding: 1em;
                border: 1px solid #ccc;
                border-radius: 1em;
            }
    
            ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            
            li{
                display: flex;
                align-items: center;
                gap: 1rem;
            }

            form li+li {
                margin-top: 1em;
            }
    
            label {
                display: inline-block;
                width: 150px;
                text-align: center;
            }
    
            input,
            textarea {
                font: 1em sans-serif;
    
                width: 300px;
                box-sizing: border-box;
    
                border: 1px solid #999;
            }
    
            input:focus,
            textarea:focus {
                border-color: #000;
            }
    
            textarea {
                vertical-align: top;
                height: 5em;
            }
    
            form .button {
                padding-left: 90px;
            }
    
            button {
                margin-left: 0.5em;
            }
        </style>
</head>

<body>
    
    <dialog>
        <form method="dialog">
            <!-- <div class="formLine">
                <label for="taskName">Enter the task name : </label>
                <input type="text" name="name" id="taskName">
            </div>
            <div class="formLine">
                <label for="taskDescription">Enter the task description : </label>
                <input type="text" name="description" id="taskDescription">
            </div>
            <div class="formLine">
                <button>Submit</button>
            </div> -->
            <ul>
                <li>
                    <label for="firstName">Enter the Card Heading - </label>
                    <input type="text" name="name" id="taskName" placeholder="Type Here">
                </li>
                <li>
                    <label for="message">Enter the card Description - </label>
                    <textarea name="value" id="taskDescription"></textarea>
                </li>

                <li class="button">
                    <button type="submit">Create Card</button>
                </li>
            </ul>
        </form>
    </dialog>

    <div class="task">
        <div class="top">
            <h2>Welcome - <?php echo $_SESSION['username']?></h2>
            <button class="addTask">Add A Task</button>
            <?php require 'partials/homelogged.php' ?>
            
        </div>
        <div class="task-grid">
            <div class="ready">
                <h3>Task Ready</h3>
                <div class="card-column">
                    <div class="card" draggable="true">
                        <h4>Drafting</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio odio, accusantium sunt
                            nostrum ea perferendis reiciendis maiores! Accusantium est voluptate numquam eaque nemo
                            cupiditate porro rem fugiat architecto doloremque, ipsum aut exercitationem voluptatem quas
                            ex.</p>
                    </div>
                    <div class="card" draggable="true">
                        <h4>Copywriting</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio odio, accusantium sunt
                            nostrum ea perferendis reiciendis maiores! Accusantium est voluptate numquam eaque nemo
                            cupiditate porro rem fugiat architecto doloremque, ipsum aut exercitationem voluptatem quas
                            ex.</p>
                    </div>
                    <div class="card" draggable="true">
                        <h4>Recording</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio odio, accusantium sunt
                            nostrum ea perferendis reiciendis maiores! Accusantium est voluptate numquam eaque nemo
                            cupiditate porro rem fugiat architecto doloremque, ipsum aut exercitationem voluptatem quas
                            ex.</p>
                    </div>
                    <p class="readyCol addTask" draggable="true">+ ADD A TASK</p>
                </div>
            </div>
            <div class="progress">
                <h3>In Progress</h3>
                <div class="card-column">
                    <div class="card" draggable="true">
                        <h4>Proof Reading</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio odio, accusantium sunt
                            nostrum ea perferendis reiciendis maiores! Accusantium est voluptate numquam eaque nemo
                            cupiditate porro rem fugiat architecto doloremque, ipsum aut exercitationem voluptatem quas
                            ex.</p>
                    </div>
                    <div class="card" draggable="true">
                        <h4>Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio odio, accusantium sunt
                            nostrum ea perferendis reiciendis maiores! Accusantium est voluptate numquam eaque nemo
                            cupiditate porro rem fugiat architecto doloremque, ipsum aut exercitationem voluptatem quas
                            ex.</p>
                    </div>
                    <p class="progressCol addTask" draggable="true">+ ADD A TASK</p>
                </div>
            </div>
            <div class="review">
                <h3>Needs Review</h3>
                <div class="card-column">
                    <div class="card" draggable="true">
                        <h4>Testing</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio odio, accusantium sunt
                            nostrum ea perferendis reiciendis maiores! Accusantium est voluptate numquam eaque nemo
                            cupiditate porro rem fugiat architecto doloremque, ipsum aut exercitationem voluptatem quas
                            ex.</p>
                    </div>
                    <p class="reviewCol addTask" draggable="true">+ ADD A TASK</p>
                </div>
            </div>
            <div class="completed">
                <h3>Completed</h3>
                <div class="card-column">
                    <div class="card" draggable="true">
                        <h4>Review</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio odio, accusantium sunt
                            nostrum ea perferendis reiciendis maiores! Accusantium est voluptate numquam eaque nemo
                            cupiditate porro rem fugiat architecto doloremque, ipsum aut exercitationem voluptatem quas
                            ex.</p>
                    </div>
                    <p class="completedCol addTask" draggable="true">+ ADD A TASK</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>