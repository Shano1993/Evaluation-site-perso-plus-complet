<?php
$messagesError = [
    "Error: an input is empty or non-existent !",
    "Error: the input name must be between 3 and 20 characters !",
    "Error: the input firstname must be between 3 and 20 characters !",
    "Error: the input mail must be between 6 and 100 characters !",
    "Error: your message must be between 10 and 300 characters !",
    "Error: user Name or password is incorrect",
];

if(isset($_GET['error'])) {
    $feedback = (int)$_GET['error'];
    if(in_array($feedback, array_keys($messagesError))) {
        $backgroundClass = strpos($messagesError[$feedback], 'Error: ') === 0 ? 'feedback-error' : 'feedback-success'; ?>
        <div class="feedback-message <?= $backgroundClass ?>"><?= $messagesError[$feedback] ?></div> <?php
    }
}
?>
