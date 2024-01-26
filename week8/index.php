<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile Page</title>

    
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-image: url('background.jpg');
            background-size: contain;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        h1 {
            color: #ffffff;
        }

        h1 {
            font-family: 'Times New Roman', Times, serif; 
        }

        h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
        }
        #profile-image {
            display: block;
            margin: 0 auto;
            border: 5px solid #333;
            padding: 10px;
            border-radius: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
        }

        #personal-info-box {
            border: 2px solid #333;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: peachpuff; 
            width: 70%;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        #button-container {
            display: flex;
            justify-content: flex-end;
            margin: 10px;
            width: 100%; 
        }

        .button {
            margin-left: 10px;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        

    </style>
</head>
<body>

    <?php
    echo "<p>Welcome to my PHP Page!</p>";
    ?>
    <div id="button-container">

        <a href="index.php">
            <button class="button">Home</button>
        </a>

        <a href="https://www.facebook.com/kyut.ni.mers/" target="_blank">
            <button class="button">Facebook Page</button>
        </a>
        <a href="games.html">
        <button class="button">Games</button>
        </a>
        <a href="server.html">
        <button class="button">Public Server</button>
        </a>
        
        <a href="contact.html">
        <button class="button">About Me</button>
        </a>
        <a href="part3.html">
            <button class="button">JavaScript Course Part 3</button>
        </a>
        <a href="form.php">
            <button class="button">Form</button>
        </a>
    </div>
    
    <h1>Jan Christopher Reyes Francisco</h1>
    <img id="profile-image" src="image.jpg" alt="Profile Image" width="350" height="450">

</body>
</html>
