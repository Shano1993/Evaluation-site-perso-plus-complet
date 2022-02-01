<?php
    require __DIR__ . '/../lib/message.php';
?>

<section>
    <h1>Contact</h1>
    <form action="/save.php" method="post" name="form">
        <div>
            <label for="id-name"></label>
            <input type="text" id="id-name" name="name" placeholder="Name" minlength="3" maxlength="20" required>
        </div>
        <div>
            <label for="id-firstname"></label>
            <input type="text" id="id-firstname" name="firstname" placeholder="First Name" minlength="3" maxlength="20" required>
        </div>
        <div>
            <label for="id-mail"></label>
            <input type="email" id="id-mail" name="mail" placeholder="Mail" minlength="6" maxlength="100" required>
        </div>
        <div>
            <label for="id-message"></label>
            <textarea name="message" id="id-message" cols="30" rows="5" placeholder="Enter your message" minlength="10" maxlength="300" required></textarea>
        </div>
        <input type="submit" id="id-submit" name="submit">
    </form>
</section>

