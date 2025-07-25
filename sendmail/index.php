<?php
// Налаштування відправки
require 'config.php';

// Отримання даних
$name = isset($_POST['name']) ? trim($_POST['name']) : '';

$lastname  = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';

$position  = isset($_POST['position']) ? trim($_POST['position']) : '';

$tel  = isset($_POST['tel']) ? trim($_POST['tel']) : '';

$email  = isset($_POST['email']) ? trim($_POST['email']) : '';

$nameCompany = isset($_POST['name-company']) ? trim($_POST['name-company']) : '';

$idea = isset($_POST['idea']) ? trim($_POST['idea']) : '';

$descrBrand = isset($_POST['descr-brand']) ? trim($_POST['descr-brand']) : '';

$linkBrand = isset($_POST['link']) ? trim($_POST['link']) : '';

$videoType = isset($_POST['video-type']) ? $_POST['video-type'] : [];

$otherType = isset($_POST['other']) ? trim($_POST['other']) : '';

$countVideo = isset($_POST['count-video']) ? trim($_POST['count-video']) : '';

$videoPurpose = isset($_POST['video-purpose']) ? trim($_POST['video-purpose']) : '';

$targetAudience = isset($_POST['target-audience']) ? trim($_POST['target-audience']) : '';

$referencesIdea = isset($_POST['references-idea']) ? $_POST['references-idea'] : [];

$references = isset($_POST['references']) ? trim($_POST['references']) : '';

$durationVideo = isset($_POST['duration']) ? trim($_POST['duration']) : '';

$formatVideo = isset($_POST['format']) ? $_POST['format'] : [];

$parametersVideo = isset($_POST['parameters']) ? $_POST['parameters'] : [];

$animationsVideo = isset($_POST['animations']) ? trim($_POST['animations']) : '';

$locationVideo = isset($_POST['location']) ? trim($_POST['location']) : '';

$actorsVideo = isset($_POST['actors']) ? trim($_POST['actors']) : '';

$filmingDays = isset($_POST['filming-days']) ? trim($_POST['filming-days']) : '';

$guidesVideo = isset($_POST['guides']) ? trim($_POST['guides']) : '';

$musicVideo = isset($_POST['music']) ? trim($_POST['music']) : '';

$styleVideo = isset($_POST['style']) ? trim($_POST['style']) : '';

$budgetVideo = isset($_POST['budget']) ? trim($_POST['budget']) : '';

$dateVideo = isset($_POST['date']) ? trim($_POST['date']) : '';

$commentsBrif = isset($_POST['comments']) ? trim($_POST['comments']) : '';

// Від кого лист
$mail->setFrom('some@gmail.com', 'Лист з сайту');
// Кому
$mail->addAddress('some@gmail.com');
// Тема
$mail->Subject = 'Лист з сайту';

// Тіло листа
$body = '<h1>Поділіться своїм задумом</h1>';

if ($name !== '') {
    $body .= '<p><strong>Ім’я:</strong> '.htmlspecialchars($name, ENT_QUOTES).'</p>';
}

if ($idea !== '') {
    $body .= '<p><strong>Ідея:</strong><br>'.nl2br(htmlspecialchars($idea, ENT_QUOTES)).'</p>';
}

if ($lastname !== '') {
    $body .= '<p><strong>Прізвище:</strong> '.htmlspecialchars($lastname, ENT_QUOTES).'</p>';
}

if ($position !== '') {
    $body .= '<p><strong>Посада:</strong> '.htmlspecialchars($position, ENT_QUOTES).'</p>';
}

if ($tel !== '') {
    $body .= '<p><strong>Телефон:</strong> '.htmlspecialchars($tel, ENT_QUOTES).'</p>';
}

if ($email !== '') {
    $body .= '<p><strong>Email:</strong> '.htmlspecialchars($email, ENT_QUOTES).'</p>';
}

if ($nameCompany !== '') {
    $body .= '<p><strong>Назва компанії:</strong> '.htmlspecialchars($nameCompany, ENT_QUOTES).'</p>';
}

if ($descrBrand !== '') {
    $body .= '<p><strong>Короткий опис діяльності:</strong><br>'.htmlspecialchars($descrBrand, ENT_QUOTES).'</p>';
}

if ($linkBrand !== '') {
    $body .= '<p><strong>Сайт / соцмережі:</strong><br>'.htmlspecialchars($linkBrand, ENT_QUOTES).'</p>';
}

if (!empty($videoType)) {
    $body .= '<p><strong>Вид ролика:</strong><br>';
    foreach ($videoType as $type) {
        $body .= htmlspecialchars($type, ENT_QUOTES) . '<br>';
    }
    $body .= '</p>';
}

if ($otherType !== '') {
    $body .= '<p><strong>Вид ролика інше:</strong><br>'.htmlspecialchars($otherType, ENT_QUOTES).'</p>';
}

if ($countVideo !== '') {
    $body .= '<p><strong>Скільки роликів потрібно створити:</strong><br>'.nl2br(htmlspecialchars($countVideo, ENT_QUOTES)).'</p>';
}

if ($videoPurpose !== '') {
    $body .= '<p><strong>Мета відео:</strong><br>'.htmlspecialchars($videoPurpose, ENT_QUOTES).'</p>';
}

if ($targetAudience !== '') {
    $body .= '<p><strong>Цільова аудиторія:</strong><br>'.htmlspecialchars($targetAudience, ENT_QUOTES).'</p>';
}

if (!empty($referencesIdea)) {
    $body .= '<p><strong>Ідеї та референси:</strong><br>';
    foreach ($referencesIdea as $type) {
        $body .= htmlspecialchars($type, ENT_QUOTES) . '<br>';
    }
    $body .= '</p>';
}

if ($references !== '') {
    $body .= '<p><strong>Ідеї та референси текст:</strong><br>'.htmlspecialchars($references, ENT_QUOTES).'</p>';
}

if ($durationVideo !== '') {
    $body .= '<p><strong>Орієнтовна тривалість кожного ролика:</strong><br>'.htmlspecialchars($durationVideo, ENT_QUOTES).'</p>';
}

if (!empty($formatVideo)) {
    $body .= '<p><strong>Формат відео:</strong><br>';
    foreach ($formatVideo as $type) {
        $body .= htmlspecialchars($type, ENT_QUOTES) . '<br>';
    }
    $body .= '</p>';
}

if (!empty($parametersVideo)) {
    $body .= '<p><strong>Потрібна озвучка/субтитри:</strong><br>';
    foreach ($parametersVideo as $type) {
        $body .= htmlspecialchars($type, ENT_QUOTES) . '<br>';
    }
    $body .= '</p>';
}

if ($animationsVideo !== '') {
    $body .= '<p><strong>Графіка / анімація:</strong><br>'.htmlspecialchars($animationsVideo, ENT_QUOTES).'</p>';
}

if ($locationVideo !== '') {
    $body .= '<p><strong>Локація:</strong><br>'.nl2br(htmlspecialchars($locationVideo, ENT_QUOTES)).'</p>';
}

if ($actorsVideo !== '') {
    $body .= '<p><strong>Aктори / моделі:</strong><br>'.htmlspecialchars($actorsVideo, ENT_QUOTES).'</p>';
}

if ($filmingDays !== '') {
    $body .= '<p><strong>Орієнтовна кількість знімальних днів:</strong><br>'.htmlspecialchars($filmingDays, ENT_QUOTES).'</p>';
}

if ($guidesVideo !== '') {
    $body .= '<p><strong>Монтаж:</strong><br>'.htmlspecialchars($guidesVideo, ENT_QUOTES).'</p>';
}

if ($musicVideo !== '') {
    $body .= '<p><strong>Mузика:</strong><br>'.htmlspecialchars($musicVideo, ENT_QUOTES).'</p>';
}

if ($styleVideo !== '') {
    $body .= '<p><strong>Стиль монтажу:</strong><br>'.htmlspecialchars($styleVideo, ENT_QUOTES).'</p>';
}

if ($budgetVideo !== '') {
    $body .= '<p><strong>Орієнтовний бюджет:</strong><br>'.htmlspecialchars($budgetVideo, ENT_QUOTES).'</p>';
}

if ($dateVideo !== '') {
    $body .= '<p><strong>До якої дати має бути готове відео:</strong><br>'.htmlspecialchars($dateVideo, ENT_QUOTES).'</p>';
}

if ($commentsBrif !== '') {
    $body .= '<p><strong>Коментар:</strong><br>'.htmlspecialchars($commentsBrif, ENT_QUOTES).'</p>';
}

$mail->Body = $body;
// $mail->AltBody = "Ім’я: $name\nТелефон: $tel\nІдея: $idea\n";

// Відправка
try {
    $mail->send();
    $response = ['message' => 'Дані надіслані!'];
} catch (Exception $e) {
    $response = ['message' => 'Помилка: '.$mail->ErrorInfo];
}

header('Content-Type: application/json; charset=UTF-8');
echo json_encode($response);
