<div class="container">
<div class="box">

<p>O Exterminador do Futuro</p>
<audio id="myAudio">
  <source src="horse.ogg" type="audio/ogg">
  <source src="Conteudo\PodCast\001NikolaTesla\001NikolaTesla.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>


<div>
<button type="button" class="btn btn-outline-primary" onclick="playAudio()"><span class="glyphicon glyphicon-play"></span> Play</button>
<button type="button" class="btn btn-outline-primary" onclick="pauseAudio()"><span class="glyphicon glyphicon-pause"></span> Pause</button>
<button type="button" class="btn btn-outline-primary" onclick="stopAudio()"><span class="glyphicon glyphicon-stop"></span> Stop</button>
<button type="button" class="btn btn-outline-primary" ><span class="glyphicon glyphicon-download"></span><a href="Conteudo\PodCast\MP3\Apresentacao\Apresentacao.mp3" download> Download</a></button>
<!--<a href="PodCast\MP3\Apresentacao\Apresentacao.mp3" download>-->
</div>
<progress id="barra_progresso" max="0" value="0"></progress>
<span id="tempo_atual">00:00:00</span>
<span id="tempo_total">00:00:00</span>




<script>
var x = document.getElementById("myAudio");
x.addEventListener('play', play_evento , false);
x.addEventListener('timeupdate', atualizar , false);


function playAudio() {
  x.play();
}

function pauseAudio() {
  x.pause();
}
function stopAudio() {
  x.pause();
  x.currentTime = 0;
}


function play_evento(){
        document.getElementById('tempo_atual').innerHTML = secToStr( x.currentTime) ;
        document.getElementById('tempo_total').innerHTML = secToStr( x.duration );

        document.getElementById('barra_progresso').max = x.duration;
        document.getElementById('barra_progresso').value = x.currentTime;
    }

    function atualizar(){
        document.getElementById('tempo_atual').innerHTML = secToStr( x.currentTime);
        document.getElementById('barra_progresso').value = x.currentTime;
    }

    function secToStr( sec_num ) {
        sec_num = Math.floor( sec_num );
        var horas   = Math.floor(sec_num / 3600);
        var minutos = Math.floor((sec_num - (horas * 3600)) / 60);
        var segundos = sec_num - (horas * 3600) - (minutos * 60);

        if (horas   < 10)  horas    = "0"+horas;
        if (minutos < 10)  minutos  = "0"+minutos;
        if (segundos < 10) segundos = "0"+segundos;

        var tempo    = horas+':'+minutos+':'+segundos;

        return tempo;
    }

</script>
</div>
</div>


<div class="cor container">
<br>
De um ponto de vista comum, quero falar um pouco sobre os filmes do exterminador do Futuro: <br>
O Exterminador do Futuro 1<br>

O Exterminador do Futuro 2 - O Julgamento Final<br>

O Exterminador do Futuro 3 - A Rebelição das Máquinas<br>

O Exterminador do Futuro 4 - A Salvação<br>

O Exterminador do Futuro 5 - Genesis<br>

O Exterminador do Futuro 6 - Destino Sombrio<br>
<br>
Espero que gostem.
</div>