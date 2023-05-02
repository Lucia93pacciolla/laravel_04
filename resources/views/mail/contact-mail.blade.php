<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Grazie per averci contattato, {{ $name }}</h1>
    <h2>Risponderemo il prima possibile</h2>
    <p>ecco i tuoi dati</p>
    <ul>
        <li>nome a cognome: {{ $name }}</li>
        <li>email: {{ $email }}</li>
        <li>il tuo messaggio: {{ $user_message }}</li>
    </ul>
    <small>se non hai mai fatto richiesta, ignora questa email</small>

</body>
</html>