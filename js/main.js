(function(){

    "use strict";
    document.addEventListener('DOMContentLoaded', function(){

        //Mapa
        let map = L.map('mapa').setView([-11.9396460940131, -76.9734741998006], 19);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-11.9396460940131, -76.9734741998006]).addTo(map)
        .bindPopup('Ricky Michael Salazar.<br> House.')
        .openPopup();

        //Variables
        /*let nombre = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let email = document.getElementById('email');
        let error = document.getElementById('error');*/

        let pase_dia = document.getElementById('pase_dia');
        let pase_completo = document.getElementById('pase_completo');
        let pase_dosdia = document.getElementById('pase_dosdia');

        let camisa_evento = document.getElementById('camisa_evento');
        let etiquetas = document.getElementById('etiquetas');
        let regalo = document.getElementById('regalo');
        let lista_productos = document.getElementById('lista-productos');
        let suma_total = document.getElementById('suma-total');
        let calcular = document.getElementById('calcular');
        let btnRegistro = document.getElementById('btnRegistro');
        if(document.getElementById('regalo')){
            calcular.addEventListener('click', calcularMontos);
            pase_dia.addEventListener('blur', diasElegidos);
            pase_dosdia.addEventListener('blur', diasElegidos);
            pase_completo.addEventListener('blur', diasElegidos);
            
        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert("Debe de elegir un regalo");
                regalo.focus();
            }else{
                let boletosDia = parseInt(pase_dia.value, 10) || 0;
                let boletosDosDias = parseInt(pase_dosdia.value, 10) || 0;
                let boletosCompletos = parseInt(pase_completo.value, 10) || 0;
                let cantCamisa = parseInt(camisa_evento.value, 10) || 0;
                let cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                let totalPagar = (boletosDia * 30) + (boletosDosDias * 45) + (boletosCompletos * 50) +
                (cantCamisa * 0.93 * 10) + (cantEtiquetas * 2);

                const listaProductos = [];
                
                if(boletosDia >= 1){
                    listaProductos.push(boletosDia + " pases por día.");
                }

                if(boletosDosDias >= 1){
                    listaProductos.push(boletosDosDias + " pases por 2 días.");
                }

                if(boletosCompletos >= 1){
                    listaProductos.push(boletosCompletos + " pases completos.");
                }

                if(cantCamisa >= 1){
                    listaProductos.push(cantCamisa + " camisas.");
                }

                if(cantEtiquetas >= 1){
                    listaProductos.push(cantEtiquetas + " etiquetas.");
                }

                lista_productos.style.display = 'block';
                lista_productos.innerHTML = '';
                for(let i = 0; i < listaProductos.length; i++ ){
                    lista_productos.innerHTML += listaProductos[i] + '<br/>';
                }

                suma_total.innerHTML = "S/" + totalPagar.toFixed(2);
            }
        }

    

        function diasElegidos(event){
            event.preventDefault();
            let boletosDia = parseInt(pase_dia.value, 10) || 0;
            let boletosDosDias = parseInt(pase_dosdia.value, 10) || 0;
            let boletosCompletos = parseInt(pase_completo.value, 10) || 0;

            let mostrarDias = [];

            /*if(boletosDia >= 1){
                mostrarDias.push('viernes')
                console.log(mostrarDias)
            }

            if(boletosDosDias >= 1){
                mostrarDias.push('viernes', 'sabado');
                console.log(mostrarDias)
            }*/

            if(boletosCompletos >= 1 ){
                mostrarDias.push('viernes', 'sabado', 'domingo');
                console.log(mostrarDias)    
            }else if(boletosDosDias >= 1){
                mostrarDias.push('viernes', 'sabado');
                console.log(mostrarDias)     
            }else if(boletosDia >= 1){
                mostrarDias.push('viernes')
                console.log(mostrarDias)
            }

            for( let i = 0; i < mostrarDias.length; i++){  
                document.getElementById(mostrarDias[i]).style.display = 'block';   
            }

            if(boletosCompletos == 0){
                document.getElementById('domingo').style.display = 'none'; 
            }

            if(boletosCompletos == 0 && boletosDosDias == 0){
                document.getElementById('sabado').style.display = 'none'; 
                document.getElementById('domingo').style.display = 'none'; 
            }

            if(boletosCompletos == 0 && boletosDosDias == 0 && boletosDia == 0){
                document.getElementById('viernes').style.display = 'none';
                document.getElementById('sabado').style.display = 'none'; 
                document.getElementById('domingo').style.display = 'none'; 
            }
            
        }
        
    }

    });//DOMContentLoaded
})();

$(function(){

    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle(1000);
    });
    
    /*TALLERES */
    $('nav.menu-programa a:first').addClass('activo');
    $('.programa-evento div:first').show();
    $('nav.menu-programa a').on('click', function(){
        $('nav.menu-programa a').removeClass('activo');
        let enlace = $(this).attr('href');
        $('.ocultar').hide();
        $(enlace).fadeIn(1000);
        $(this).addClass('activo');
        return false;
    });

    /*ANIMACION NUMERICA */
    let listaEvento = jQuery('.resumen-evento');
    if(listaEvento.length > 0){
        $('.resumen-evento').waypoint(function(){
            $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);
            $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1200);
            $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1200);
            $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1200);
        }, {
            offset: '60%'
        });
    }
    

    /*CUENTA REGRESIVA */
    $('.cuenta-regresiva').countdown('2022/12/21 12:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });
    
});