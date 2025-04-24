<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darline's Resume</title>
    <link rel="stylesheet" type="text/css" href="resume-styles.css">
</head>
<body>
    <div class="profile-info-container">
        <img src="profile.png" class="profile-photo" alt="Darline Biwott's profile photo">
        <div class="profile-info">
            <h1>Darline Biwott</h1>
            <p><strong>Profession:</strong> Interior Designer</p>
            <p><strong>Email:</strong> <a href="mailto:darline@gmail.com">darline@gmail.com</a></p>
            <p><strong>Phone:</strong> <a href="tel:+254725130640">+254 725 130 640</a></p>
        </div>
    </div>

    <h2>Education and Skills</h2>
    <table>
        <tr>
            <th>Education</th>
            <th>Skills</th>
        </tr>
        <tr>
            <td>Interior Designing</td>
            <td>Drawing</td>
        </tr>
        <tr>
            <td>Art and Design</td>
            <td>Painting</td>
        </tr>
        <tr>
            <td>Fashion and Design</td>
            <td>Sketching</td>
        </tr>
    </table>

    <form action="send message.php" method="post">
        <label>Your Name</label>
        <input type="text" name="sender" required>

        <label>Message</label>
        <textarea name="message" required></textarea>

        <button type="submit">Send</button>
    </form>

    <?php
    echo "Hello, world!";
    ?>
</body>
</html>
