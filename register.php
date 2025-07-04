<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "email" => $_POST["email"],
        "pays" => $_POST["pays"],
        "telephone" => $_POST["telephone"],
        "date" => date("Y-m-d H:i:s")
    ];

    $file = "admin-data.json";
    if (!file_exists($file)) {
        file_put_contents($file, json_encode([$data], JSON_PRETTY_PRINT));
    } else {
        $content = json_decode(file_get_contents($file), true);
        $content[] = $data;
        file_put_contents($file, json_encode($content, JSON_PRETTY_PRINT));
    }

    header("Location: merci.html");
    exit();
}
?>
