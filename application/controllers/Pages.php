<?php
class Pages extends CI_Controller {

    public function view($page = 'home')
{

    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
    {
        // Whoops, we don't have a page for that!
        show_404();
    }

    if($page=="traduccionsimultanea"){

      $datos = array('description' => 'Servicio de Interprete y traducción simultánea para eventos',
               'keywords' => 'Traducción Simultánea, translate, interpretes, equipos de traducción',
               'image' => 'public/img/portada/traduccion.jpg' );
     }

     if($page=="home"){
       $datos = array('description' => 'Empresa especializada en la prestación de 
                servicios tecnológicos para la realización de eventos.',
               'keywords' => 'producción de eventos, equipos de iluminación, luces,
               sonido, tarimas, amplificación, streaming, live events, traducción', 
               'image' => 'public/img/0/asesor1.jpg', 'title' => 'PLATAFORMA');
     }
     if($page=="iluminacion"){
       $datos = array('description' => 'Contamos una gran variedad de equipos dispuestos a resolver
        los requerimientos técnicos de iluminación para cualquier escenario',
               'keywords' => 'equipos de iluminacion, luces, par leds, par 64, seguidoras,
               cabezas roboticas, barras leds, strober',
                'image'=>'public/img/0/luces-225.jpg');
     }
     if($page=="proyeccion"){
       $datos = array('description' => 'Le ofrecemos múltiples herramientas para la proyección
                de sus contenidos',
               'keywords' => 'pantallas led, proyectores, video beam, televisores',
                'image'=>'public/img/proyeccion-plataforma.gif');
     }
     if($page=="servicioderegistro"){
       $datos = array('description' => 'Servicio de registro y acreditación de participantes en eventos',
           'keywords' => 'producción de eventos, equipos de iluminación, luces,
           sonido, tarimas, amplificación, streaming, live events, traducción',
           'image'=>'public/img/0/pantalla_t.jpg' );
 }
     if($page=="sonido"){
       $datos = array('description' => 'Sistemas de amplificación de sonido para todo tipo de eventos',
               'keywords' => 'sonido,amplificación de sonido, eventos, servicio dj, microfoneria, parlantes, bose eventos',
               'image'=>'public/img/sonido.jpg'  );
     }
     if($page=="streaming"){
       $datos = array('description' => 'Transmita sus eventos a través de internet',
               'keywords' => 'streaming, eventos, transmisión de eventos',
                'image'=>'public/img/streaming-1.jpg');
     }
     if($page=="videoconferenciaweb"){
       $datos = array('description' => 'Sistema de videoconferencia para 100 puntos de conexión',
               'keywords' => 'videoconferencia web, reunión web, webex evento',
               'image'=>'public/img/videoconferenciaweb.jpg' );
     }
     if($page=="producciondevideo"){
       $datos = array('description' => 'servicio tecnico profesional para la grabación de eventos',
               'keywords' => 'producción de eventos, filmación, grabación de video, edición de video',
               'image'=>'public/img/portada/ProduccionDeVideo.jpg',

                );
   }
     if($page=="contactos"){
       $datos = array('description' => 'Empresa especializada en la prestación de 
                servicios tecnológicos para la realización de eventos.',
               'keywords' => 'contáctos telefónicos, plataforma eventos,',
               'image'=>'public/img/portada/contactenos.jpg',

                );
     }
     if($page=="unase"){
       $datos = array('description' => 'Intégrese al equipo de trabajo PLATAFORMA.',
               'keywords' => 'Plataforma, eventos, asesoria comercial,planeación, iluminación, amplificación sonido, streaming, videoconferencia, protocolo, traducción simultánea',
               'image'=>'public/img/portada/img-comp-1.jpg',

                );
     }
     if($page=="asistenciayprotocolo"){
       $datos = array('description' => 'Planes de asistencia para el éxito de sus eventos,',
               'keywords' => 'Plataforma, eventos, asesoria comercial,planeación, iluminación, amplificación sonido, streaming, videoconferencia, protocolo, traducción simultánea',
               'image'=>'public/img/portada/img-comp-1.jpg',

                );
     }
      if($page=="plataformaav"){
       $datos = array('description' => 'Planes de asistencia para el éxito de sus eventos,',
               'keywords' => 'Plataforma, eventos, asesoria comercial,planeación, iluminación, amplificación sonido, streaming, videoconferencia, protocolo, traducción simultánea',
               'image'=>'public/img/portada/img-comp-1.jpg',

                );

     }
     if($page=="dlp"){
       $datos = array('description' => 'Planes de asistencia para el éxito de sus eventos,',
               'keywords' => 'Plataforma, eventos, asesoria comercial,planeación, iluminación, amplificación sonido, streaming, videoconferencia, protocolo, traducción simultánea',
               'image'=>'public/img/portada/img-comp-1.jpg',

                );
     }


$data = $datos;
    
    $this->load->helper('url');
    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);


   

   

}

}