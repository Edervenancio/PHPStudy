<article style="padding: 5px 20px;
background: skyblue;
border-radius: 4px;">
<h1><?= $profile->name ?></h1>
<p>Trabalha na <?= $profile->company ?><br>
    <a title= "Enviar Email" href="mailto: <?= $profile->email; ?>"> Enviar email </a></p>
</article>