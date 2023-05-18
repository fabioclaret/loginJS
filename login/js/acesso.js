function acesso() {
    var data  = new Date()
    var dias  = data.getDay()
    var mes  = data.getMonth()
    var ano   = data.getFullYear()
    var meses = new Array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho',
                      'Agosto','Setembro','Outubro','Novembro','Dezembro');
    var diaSemana = new Array(
            'Domingo','Segunda Feira','Terça Feira','Quarta Feira','Quinta Feira',
            'Sexta Feira','Sábado');
    var hoje = data.getDate();
    var hora = data.getHours();
    var min  = data.getMinutes();
    var sec  = data.getSeconds(); 
    var strHora = hora + ':' + min + ':' + sec;
    var strData  = diaSemana[dias] + ", " + hoje		 + " de "
     + meses[mes] + " de " + ano + ", " + strHora
    document.write(strData);
}
