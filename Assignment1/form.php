<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1</title>
</head>
<body>
    <header>
        <h1>Registration Form</h1>
    </header>


    <p> Use tab keys to move from one input field to next </p>
    <form method="POST" action="form.php">
       <label for="userid"></label>User ID:</label>
        <input type="text" id="userid" name="userid" required><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br>

        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br><br>

        <label for="address">Address:</label>
        <input type="address" id="address" name="address" required><br><br>


        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>

        <Zip for="zip">Zip Code:</label>
        <input type="text" id="zip" name="zip" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="Gender">Sex:</label>
        <label for="Gender">Male</label>
        <input type="radio" name="Gender">
        <label for="Gender">Female</label>
        <input type="radio" name="Gender">
        <br><br>


        <label for="language">Language</label>
        <input type="checkbox" name="language" value="English">English
        <input type="checkbox" name="language" value="French">Non English
        <br><br>


        <About: for="About:">About:</label>
        <textarea id="About:" name="About:" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Submit</button>
    
</body>
</html>