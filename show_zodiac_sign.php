<?php
/*// Carrega o XML de signos
$xml = simplexml_load_file('signos.xml');

// Pega a data de nascimento do formulário
if (isset($_POST['birthdate'])) {
    $birthDate = date('d/m', strtotime($_POST['birthdate']));
    $signo = null;

    // Procura pelo signo correspondente
    foreach ($xml->signo as $signoData) {
        $dataInicio = (string) $signoData->dataInicio;
        $dataFim = (string) $signoData->dataFim;

        if (($birthDate >= $dataInicio && $birthDate <= '31/12') || ($birthDate >= '01/01' && $birthDate <= $dataFim)) {
            $signo = $signoData;
            break;
        }
    }
}
?>

<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <?php if ($signo): ?>
        <h2 class="text-center">Seu signo é <?= $signo->signoNome; ?></h2>
        <div class="imagem-tam">
            <img src="<?= $signo->imagem; ?>" alt="<?= $signo->signoNome; ?>">
        </div>
        <p><strong>Elemento:</strong> <?= $signo->elemento; ?></p>
        <p><strong>Planeta Regente:</strong> <?= $signo->regente; ?></p>
        <p><strong>Descrição:</strong> <?= $signo->descricao; ?></p>
    <?php else: ?>
        <p class="text-center">Não foi possível identificar seu signo. Tente novamente.</p>
    <?php endif; ?>
</div>*/


// Carrega o XML de signos
$xml = simplexml_load_file('signos.xml');

// Pega a data de nascimento do formulário
if (isset($_POST['birthdate'])) {
    // Extrai o dia e o mês da data de nascimento
    $birthDate = date('d/m', strtotime($_POST['birthdate']));
    $birthDayMonth = DateTime::createFromFormat('d/m', $birthDate);
    $signo = null;

    // Procura pelo signo correspondente
    foreach ($xml->signo as $signoData) {
        $dataInicio = DateTime::createFromFormat('d/m', (string)$signoData->dataInicio);
        $dataFim = DateTime::createFromFormat('d/m', (string)$signoData->dataFim);

        // Verifica se a data está no intervalo, considerando os períodos que passam pelo final do ano
        if (($birthDayMonth >= $dataInicio && $birthDayMonth <= $dataFim) ||
            ($dataInicio > $dataFim && ($birthDayMonth >= $dataInicio || $birthDayMonth <= $dataFim))
        ) {
            $signo = $signoData;
            break;
        }
    }
}
?>

<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <?php if ($signo): ?>
        <h2 class="text-center">Seu signo é <?= $signo->signoNome; ?></h2>
        <div class="imagem-tam">
            <img src="<?= $signo->imagem; ?>" alt="<?= $signo->signoNome; ?>">
        </div>
        <p><strong>Elemento:</strong> <?= $signo->elemento; ?></p>
        <p><strong>Planeta Regente:</strong> <?= $signo->regente; ?></p>
        <p><strong>Descrição:</strong> <?= $signo->descricao; ?></p>
    <?php else: ?>
        <p class="text-center">Não foi possível identificar seu signo. Tente novamente.</p>
    <?php endif; ?>
</div>