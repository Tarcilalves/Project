<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consulte seu Signo</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="/public/favicon.jpg" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo dirname(__FILE__); ?>/../assets/css/style.css">

    <style>
        body {

            background: #00ae96;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        button,
        input {
            font-family: 'Inter', sans-serif;
        }

        h1 {
            color: #FFF;
            font-size: 3rem;
        }

        h3 {
            font-size: 3rem;
        }

        h4 {
            font-size: 3rem;
            font-weight: 900;
        }

        h3,
        h4 {
            color: #8257E5;
        }

        p {
            text-align: justify;
        }


        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            padding: 1rem 2rem;
            border-radius: 0.625rem;
        }

        input {
            display: block;
            margin: 0.8rem 0;
            padding: 0.5rem 1rem;
            outline: none;
            color: #A1A1AA;
            background: #52525B;
            border: none;
            border-radius: 0.25rem;
        }

        input[type="date"] {
            margin-bottom: 1rem;
            padding: 0.5rem;
            width: 50%;
        }

        button {
            display: block;
            width: 150px;
            padding: 0.75rem;
            margin: 1rem 0.5rem;

            color: #fff;
            background-color: #8257E5;
            border: none;
            border-radius: 0.25rem;

            cursor: pointer;
            transition: filter 0.5s ease;
        }

        button:hover {
            filter: brightness(0.9);
        }

        .container {
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 1rem auto;
            padding: 2rem;

            color: #A1A1AA;
            background: #00204f;
            border-radius: 1rem;

            box-shadow: 0px 0px 16px 2px rgba(0, 0, 0, 0.71);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 315px;
        }

        .group-button {
            display: flex;
        }

        .html_content {
            width: 650px;
            margin: 1rem auto;
            padding: 1rem;
            border-radius: 1rem;

            color: #C9CBCA;
            background: #232323;
            box-shadow: 0px 4px 8px 4px rgba(0, 0, 0, 0.54);
        }
    </style>
</head>

<body>

</body>

</html>>