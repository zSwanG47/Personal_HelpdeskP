<?php
    $apikey = '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'; // Reemplaza con tu clave real

    $data = [
        'model' => 'gpt-3.5-turbo', // O usa 'gpt-3.5-turbo' si prefieres
        'messages' => [
            ['role' => 'system', 'content' => 'Eres un asistente útil.'],
            ['role' => 'user', 'content' => '¿Qué es PHP?']
        ],
        'temperature' => 0.7,
        'max_tokens' => 300
    ];

    $ch = curl_init('https://api.openai.com/v1/chat/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: ' . 'Bearer ' . $apikey
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code !== 200) {
        echo "Error en la solicitud: Código HTTP " . $http_code . "\n";
        echo "Respuesta: " . $response;
        exit;
    }

    $responseArr = json_decode($response, true);

    if (isset($responseArr['choices'][0]['message']['content'])) {
        echo "Respuesta de ChatGPT:\n" . $responseArr['choices'][0]['message']['content'];
    } else {
        echo "Error: No se recibió una respuesta válida de OpenAI.\n";
        echo "Respuesta completa: " . json_encode($responseArr, JSON_PRETTY_PRINT);
    }
?>
