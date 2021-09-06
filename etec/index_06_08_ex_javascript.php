<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com JavaScript</title>
    <script>
function contador() {
let msg = document.getElementById('msg');
msg.innerHTML = '';
for (i=0; i<12; i++) {
switch (i) {
case 10: msg.innerHTML += `<img src="img/1.png" alt="">
<img src="img/0.png" alt=""><br>`; break;
case 11: msg.innerHTML += `<img src="img/1.png" alt="">
<img src="img/1.png" alt=""><br>`; break;
default: msg.innerHTML += `<img src="img/${i}.png" alt=""><br>`; break;
}
}
}
</script>

</head>
<body>
    <div id="msg"></div>

    <button onclick="contador()">Exibir contagem</button>
</body>
</html>