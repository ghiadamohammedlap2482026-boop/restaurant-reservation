<?php
declare(strict_types=1);
session_start();

function fail(string $message, int $status = 400): never {
    http_response_code($status);
    echo '<!doctype html><html lang="en"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Reservation</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><body class="bg-light"><main class="container py-5"><div class="card p-4 mx-auto" style="max-width:650px"><h1 class="h3">Reservation not submitted</h1><p>' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</p><a class="btn btn-primary align-self-start" href="index.php#reservation">Go back</a></div></main></body></html>';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}
$token = $_POST['csrf_token'] ?? '';
if (!is_string($token) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
    fail('The form expired or could not be verified. Please try again.');
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$phone = trim((string)($_POST['phone'] ?? ''));
$date = trim((string)($_POST['reservation_date'] ?? ''));
$time = trim((string)($_POST['reservation_time'] ?? ''));
$guestsRaw = (string)($_POST['guests'] ?? '');
$notes = trim((string)($_POST['notes'] ?? ''));

if ($name === '' || mb_strlen($name) > 100) fail('Enter a name no longer than 100 characters.');
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 254) fail('Enter a valid email address.');
if (strlen($phone) > 30 || mb_strlen($notes) > 500) fail('Phone or notes exceed the allowed length.');
$dateObject = DateTimeImmutable::createFromFormat('!Y-m-d', $date);
if (!$dateObject || $dateObject->format('Y-m-d') !== $date || $date < date('Y-m-d')) fail('Choose a valid date that is today or later.');
if (!preg_match('/^(?:[01]\d|2[0-3]):[0-5]\d$/', $time) || $time < '11:00' || $time > '22:00') fail('Choose a time between 11:00 and 22:00.');
$guests = filter_var($guestsRaw, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 10]]);
if ($guests === false) fail('Choose between 1 and 10 guests.');

require __DIR__ . '/config.php';
try {
    $statement = $pdo->prepare(
        'INSERT INTO reservations (name, email, phone, reservation_date, reservation_time, guests, notes)
         VALUES (:name, :email, :phone, :reservation_date, :reservation_time, :guests, :notes)'
    );
    $statement->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone !== '' ? $phone : null,
        ':reservation_date' => $date,
        ':reservation_time' => $time,
        ':guests' => $guests,
        ':notes' => $notes !== '' ? $notes : null,
    ]);
} catch (PDOException $exception) {
    fail('The reservation could not be saved. Check the database setup and try again.', 500);
}
unset($_SESSION['csrf_token']);
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Reservation received</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light"><main class="container py-5"><div class="card p-4 p-md-5 mx-auto shadow-sm" style="max-width:650px"><div class="display-5 mb-3">✓</div><h1 class="h2">Reservation saved!</h1><p>Your demo reservation has been saved to the database.</p><p><strong>Name:</strong> <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?><br><strong>Date:</strong> <?= htmlspecialchars($date, ENT_QUOTES, 'UTF-8') ?><br><strong>Time:</strong> <?= htmlspecialchars($time, ENT_QUOTES, 'UTF-8') ?><br><strong>Guests:</strong> <?= (int)$guests ?></p><a class="btn btn-primary align-self-start" href="index.php">Back to home</a></div></main></body></html>
