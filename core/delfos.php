<?php
/** 
 * Dada la fecha de nacimiento de una persona, esta clase permite obtener
 * aspectos de su personalidad y alma, asi como su don y propósito.
 * 
 * @author  Gustavo Torres
 * @version 1.0
 * @licence GNU GPL V3
 */
class delfos {
    
    private $dia;
    private $mes;
    private $ano;
    
    private $misiones=array();
    private $almas=array();
    private $regalos=array();
    private $personalidades=array();
    
   /** 
    * Este método carga en la variable privada $misiones los textos
    * correspondientes a la mision.
    * Esta información puede ser extraida de una fuente externa
    */ 
    
    public function loadMisiones()
    {
    $this->misiones['1']="Sentirte realizado, deberás enseñar al mundo, con tu ejemplo, la humildad y creatividad.
Es posible que la vida te dé el espacio para abrir nuevos caminos, ser innovador, creador y pionero.";
    $this->misiones['2']="Ser muy abierto.
A tener varios Maestros en una misma vida para que guien tu camino.
";
    $this->misiones['3']="Lograr ser independiente, amoroso y justo";
    $this->misiones['4']="Desarrollar una mente clara, objetiva, organizada y práctica.
Además ser amorosamente servicial.";
    $this->misiones['5']="Alcanzar el equilibrio entre el cielo y la tierra, entre lo interno y lo externo.
Debes enseñar a los demás con tu ejemplo .
Debes lograr ser perseverante, leal y paciente.
Tienes que aprender a adaptarte a nuevas circunstancias.
Tienes que aprender el uso correcto de la libertad.
";
    $this->misiones['6']="Permanecer focalizado en un centro y concentrarse sólo en él: la Mística, porque tienes una gran profundidad para percibir la vida.
Pero cuando el numero de misión se manifiesta en su aspecto negativo:
no querrás ser un ser de oración, incluso creerás que no lo necesitas.
En general,  no considerarás tu camino hasta que no te reencuentres  con tu alma.
";
    $this->misiones['7']="Debes elevarte a tí mismo y a los que te rodean.
Si eres una persona dura, entonces tu misión será aprender a tener misericordia.
Si eres una persona blanda, tu misión será aprender a guiar.
Debes aprender a trabajar  tu ego, porque es muy fuerte.
Además, debes ser muy fuerte y positivo, de manera que siempre puedas influenciar positivamente a los demás.
";
    $this->misiones['8']="Lograr la purificación de tu cuerpo. Vencer la melancolía y el temor.Controlar la mente.
Lograr una conciencia infinita. Alcanzar grados de conciencia iluminada a través de la fusión con el infinito.
Lograr la Maestría de lo etérico . 
";
    $this->misiones['9']="Alcanzar la virtud de la constancia.
Lograr la Maestría de tí mismo, mostrando una calma total en todo lo que realices.
Ser capaz de tranquilizar a los que te rodean.
Alcanzar el don de la bondad y la comprensión.";
    $this->misiones['10']=$this->misiones['1'];
    $this->misiones['11']="Transmutar, elevando la conciencia de los demás.
Deberás ser un constante ejemplo de vida espiritual.
Deberás expandirte hasta el infinito.
Deberás desarrollar talentos.
Deberás buscar nuevos principios.
Deberás confiar en tu intuición. 
";
    
    }

  /** 
    * Este método carga en la variable privada $almas los textos
    * correspondientes al alma.
    * Esta información puede ser extraida de una fuente externa
    */ 
    public function loadAlmas()
    {
        $this->almas['1']="Debes permanecer enfocado en tu interior para estar centrado; por lo tanto, debes conocerte.
Como vives desde el corazón, puedes alcanzar tu paz interna y externa a través de la humildad. 
En general, eres muy creativo, y te guías más por lo que sientes que por lo que piensas.
Claro que cuando el uno se manifiesta en su aspecto negativo, te transformas y eres:
Analítico y cuadrado, te metes en problemas en cuanto sales de su corazón.
Al centrar tu energía en la mente, el temor y la rabia bloquean el flujo del alma.
Tu número de alma es 1";
        $this->almas['2']="Deberás tener la capacidad de calcular las consecuencias de tus actos, para no dañar a tu alma.
Tu alma siempre está buscando el crecimiento espiritual, ya sea consciente o inconscientemente. 
Deberás ser muy selectivo con el mundo que te rodea porque eres muy influenciable. 
Obedecerás a tu conciencia para ser feliz.
Necesitas mucho amor y compañía.
No te importa pasar inadvertido.
No te interesa brillar ni destacarte.Tu número de alma es 2";
        $this->almas['3']="Eres idealista y compasivo con los hombres y animales.
Tienes la capacidad para detectar la mentira.
Eres independiente.
Eres optimista, siempre le ves el lado bueno de las cosas.
Te molesta cualquier tipo de insensibilidad.
Tu actitud nunca es neutra frente a lo místico.
Amas al  prójimo como a tí mismo.
Eres caritativo, participas en toda obra de servicio.
No te dejas impresionar por lo externo, por ejemplo, dinero y abolengo.
Necesitas ver la igualdad dentro de tí mismo y con los demás.
Eres buena persona. Cuando haces algo indebido te sientes culpable.
No permites que la depresión te domine.
Eres emocional afectivamente.
Eres expresivo.
No te preocupas mucho por la cosas.Tu número de alma es 3";

        $this->almas['4']="Te caracterizas porque nunca te autoengañas.
Tu mente tiene una gran capacidad para entender problem½ticas filosóficas y sicológicas.
Para que tu alma esté en paz, necesitas servir a tu prójimo.Tu número de alma es 4";
        $this->almas['5']="Eres equilibrado y disciplinado, lo que te permite entrar en contacto con tu alma con mucha facilidad.
Debes sentirte y verte bien físicamente, para estar bien internamente. Cualquier daño en tu cuerpo afecta a tu alma y a tu paz interior.
Tiendes a entregarte de lleno al trabajo equilibrado.
En general necesitas mantener tu equilibrio, de lo contrario pierdes el dominio en el plano físico. 
Tu número de alma es 5";
        $this->almas['6']="Te caracterizas porque eres: Introvertido,profundo e interno.
Pero cuando el seis se manifiesta en su aspecto negativo eres: superficial, egoísta y sólo subsistes. Tu número de alma es 6";
        $this->almas['7']="Tienes la capacidad de guiarte.
Te caracterizas porque tu presencia es poderosa. Siempre estás al frente de las cosas.Tu número de alma es 7";
        $this->almas['8']="Te caracterizas por poseer un alma pura. Tienes  capacidad de auto sanación.
No temes y persistes hasta alcanzar tus objetivos internos.
Eres expansivo, siempre vas más allá y más lejos.
Nunca terminas de cuestionar el conocimiento de tí mismo.
Te expandes con profundidad.
Una vez que te encuentras con tu alma, percibirás cómo esta expansión te permite relacionarse con lo divino.
Tu número de alma es 8";
        $this->almas['9']="Estarás en paz contigo , en el momento en que logres profundizar con tu  interior.
Tu arte consistirá en ser constante con aquello que decidas emprender, logrando así la maestría de tí mismo, la sutileza, y la calma.
Fluyes en armonía. Claro que cuando el nueve se manifiesta en el aspecto negativo, eres:
Duro contigo.
Tu alma será un misterio.
No te conocerán mientras sigan siendo superficial.Tu número de alma es 9";
        $this->almas['10']=$this->almas['1']." Tu número de alma es 10";
        $this->almas['11']="Te caracterizas porque fluyes, tienes gran conexión con lo divino. Estás seguro de que todo proviene de Dios y todo vuelve a él.
Sabes que tu alma es grande, y que esto se debe a la conexión permanente con la divinidad.
Claro que a veces el once se manifiesta en su aspecto negativo, y entonces eres:
Conflictivo y con una gran frustración interna.
Conoces tus cualidades, pero no puedes plasmarlas ni proyectarlas.
Tu número de alma es 11";
        $this->almas['12']=$this->almas['3']."Tu número de alma es 12";
        $this->almas['13']=$this->almas['4']."Tu número de alma es 13";
        $this->almas['14']=$this->almas['5']."Tu número de alma es 14";
        $this->almas['15']=$this->almas['6']."Tu número de alma es 15";
        $this->almas['16']=$this->almas['7']."Tu número de alma es 16";
        $this->almas['17']=$this->almas['8']."Tu número de alma es 17";
        $this->almas['18']=$this->almas['9']."Tu número de alma es 18";
        
        $this->almas['19']=$this->almas['1']."Tu número de alma es 19";
        $this->almas['20']=$this->almas['2']."Tu número de alma es 20";
        $this->almas['21']=$this->almas['3']."Tu número de alma es 21";
        $this->almas['22']=$this->almas['4']."Tu número de alma es 22";
        $this->almas['23']=$this->almas['5']."Tu número de alma es 23";
        $this->almas['24']=$this->almas['6']."Tu número de alma es 24";
        $this->almas['25']=$this->almas['7']."Tu número de alma es 25";
        $this->almas['26']=$this->almas['8']."Tu número de alma es 26";
        $this->almas['27']=$this->almas['9']."Tu número de alma es 27";
        $this->almas['28']=$this->almas['1']."Tu número de alma es 28";
        $this->almas['29']=$this->almas['11']."Tu número de alma es 29";
        $this->almas['30']=$this->almas['3']."Tu número de alma es 30";
        $this->almas['31']=$this->almas['4']."Tu número de alma es 31";


    }
    
  /** 
    * Este método carga en la variable privada $personalidades los textos
    * correspondientes a la personalidad.
    * Esta información puede ser extraida de una fuente externa
    */ 
    public function loadPersonalidades()
    {
        $this->personalidades['1']="Te caracterizas porque eres silencios@ y transparente.
Pasas casi inadvertido en lugares públicos.
No molestas.
Tu relación de pareja ocupa un lugar muy importante en tu vida porque  vives desde el sentimiento.
Tu línea de trabajo tiene relación con lo creativo.
Pero cuando el uno se manifiesta en su aspecto negativo eres:
Lento, dormilon, flojo, poco creativo  y te relacionas con los demás desde la cabeza.Tu número de personalidad es 1";

        $this->personalidades['2']="Te caracterizas porque tienes una relación de amistad con el mundo.
Las personas se sienten atraídas por ti, ya que inspiras confianza y están abiertos a las relaciones.
Tu mente deberá funcionar bien para que pueda calcular los peligros del mundo.
Eres buen comerciante, calculas con precisión el resultado económico de cualquier situación.
Pero cuando el dos se manifiesta en su aspecto negativo, eres:
Fácilmente utilizado por los demás.
Eres capaz de perder el dinero con tal de ganar a un amigo.
Te manipulan en tus relaciones laborales y emocionales.
Eres muy complaciente.Tu número de personalidad es 2";

        $this->personalidades['3']="Te caracterizas porque eres simpático y creativo.
Te gusta ser popular. Eres buen anfitrion.
Amas a los niños y a los animales.
Tienes problemas con la jerarquía, por lo tanto, no eres buen jefe o profesor (te cuesta distinguir rangos).
Siempre verás el lado positivo de todo, aún cuando las cosas estén mal.
Tu número de personalidad es 3";

        $this->personalidades['4']="Te caracterizas porque eres servicial.
Eres buen consejero, atraes y tranquilizas a los demás.
Tu virtud consiste en ver dos lados o aspectos de la mente, lo que te permite tener una visión objetiva.
Ahora, cuando el cuatro se manifiesta en su aspecto negativo, eres: 
Inquieto, terco, impaciente,  no eres  neutral, no eres perseverante, tienes pocos amigos y eres adicto al trabajo.Tu número de personalidad es 4";

        $this->personalidades['5']="Quieres experimentar la vida en toda posibilidad que se  presente.
Eres poco convencional.
Eres una persona atractiva para los demás. Fino, amable y simpático.
Eres buen actor.
Cambias de amor, o puedes tener 2 o 3 amores a la vez.
A menudo te ahogas en tantas actividades sociales.Tu número de personalidad es 5";

        $this->personalidades['6']="Eres idealista, espiritual y justo.
Ansías amor, amigos y compañía.
Eres agradable para la mayoría, benévolo y tolerante.
Te deleitas decorando artísticamente tu casa.
Necesitas que te alaben y estimulen.
Cuando el seis se manifiesta en su aspecto negativo, tus cualidades cambian, entonces:
Tu palabra no tiene poder. No cumples con los compromisos. Pierdes toda consecuencia.Tu número de personalidad es 6";

        $this->personalidades['7']="Tienes mucha capacidad para enfrentar nuevas situaciones.
Eres perfeccionista. Pensador y sabio. Ejecutivo y líder.
La negatividad del mundo externo no te afecta, porque tu aura es tan fuerte que nada la toca, ni penetra.
Eres  más idealista que materialista.
Te desagrada la labor manual.
Te disgustan las sugerencias ajenas.
Cuando el siete se manifiesta en su aspecto negativo eres: 
Incapaz de hablar frente a la gente.
Dudas de tu propia capacidad.
Tu aura es permeable, por lo tanto, influyen las energías circundantes y esto te confunde.Tu número de personalidad es 7";

        $this->personalidades['8']="Saben cómo ser uno con la energía vital.
Al saber conectarte con la energía vital, podrás tener una visión infinita. Por lo tanto, serás planificador a largo plazo, cumpliendo cada uno de tus objetivos.
Puedes trabajar 20 horas al día sin cansarte.
Puedes ser doctor o buen sanador, porque es la energía vital, tanto del paciente como del terapeuta, la que ayuda en el proceso de sanación.
Pero cuando el ocho se manifiesta en su aspecto negativo, eres:
Temeroso.
Nunca posees la suficiente energía para cumplir con lo que te propones.
No posees la visión del águila para ver aquello que debes o puedes realizar.
Tu número de personalidad es 8";

        $this->personalidades['9']="Eres constante en tu trabajo y en tus relaciones.
Eres Delicado.
Dominas todas las situaciones sin que nadie te altere. Es tanto, que a veces la gente cree que eres duro e insensible, pero no lo eres, simplemente sabes mantener la calma.
Cuidas mucho lo que dices para no herir a quienes te rodean.
Cuando el nueve se manifiesta en su aspecto negativo, eres:
Mediocre, sabes de todo un poco, pero nada bien en realidad.
Cambias de actividad a cada rato.
Hieres a las personas.Tu número de personalidad es 9";

        $this->personalidades['10']=$this->personalidades['1']."Tu número de personalidad es 10";
        $this->personalidades['11']="Inspiras y elevas la conciencia de los demás.
Puedes alcanzar la maestría en la realidad física.
Pero cuando el once se manifiesta en su aspecto negativo:
Si no logras la maestría en el plano físico, siempre estarás preocupado por el dinero, de la apariencia ilusoria, de los sentidos.
Quieres tener la mejor casa, autos, etc. Siempre estás preocupados de lo que otros opinan de ti.
Sientes una gran frustración, aunque logres bastantes cosas, nunca estás satisfecho.
Tu número de personalidad es 11";
        $this->personalidades['12']=$this->personalidades['3']."Tu número de personalidad es 12";
       

    }
    
  /** 
    * Este método carga en la variable privada $regalos los textos
    * correspondientes al regalo.
    * Esta información puede ser extraida de una fuente externa
    */ 
    public function loadRegalos()
    {
        $this->regalos['1']="La creatividad.
Además, serás amoroso.";
        $this->regalos['2']="Podrás calcular bien las cosas, por ejemplo: el peligro.
Serás amistoso con todo el mundo.
Serás bondadoso.
Tendrás la habilidad de conectarte con cualquier persona, permitiendo que junto a ellos se sientan cómodos y relajados.
";
        $this->regalos['3']="Amar a tu prójimo.
Ver a la Humanidad como un todo.
No importa lo que te pase,  siempre mantendrás una actitud mental positiva.
Podrás escuchar y ayudar al ser más negativo, sin que esto te afecte.
";
        $this->regalos['4']="Tienes una mente muy espiritual.
Eres neutral, humilde y amas servir.
Tienes la capacidad de ver el origen, o ir al origen de cada circunstancia.
";
        $this->regalos['5']="Dominas tu cuerpo físico.
Tienes habilidad para enseñar.";
        $this->regalos['6']="Tienes fe en Dios
Eres místico.
Concentrado. 
Pones todas tus energías en un centro.";
        $this->regalos['7']="Todo lo elevas en vibración.
Generas buenas energías con facilidad.
Eres un líder que brilla.";

        $this->regalos['8']="Nunca temes.
Siempre te resultan tus proyectos. Eres una persona que va hacia adelante, ayudando a otros seres a que pueden  plasmar sus proyectos.
";
        $this->regalos['9']="Puedes obtener la Maestría de una manera rápida y con mayor facilidad que el resto de las personas.
Captas rápidamente lo que ocurre a tu alrededor.";
        $this->regalos['10']=$this->regalos['1'];
        $this->regalos['11']="Cuando tomes conciencia de lo que tienes, serás un puente para los hombres, entre éste y otros planos.
Serás capaz de expresar la energía de cualquiera de tus cuerpos espirituales cuando necesiten hacerlo.
Nunca te faltará el dinero.";
        

    }
    
    /** 
    * Este método es el constructor y carga en sus variables privadas el dia,
    * mes y año dadas. Estas tres variables son necesarias.
    * También carga textos en los arreglos.
    * @param string $dia
    * @param string $mes
    * @param string $ano
    */ 
    
    public function __construct($dia,$mes,$ano)
    {
        $this->dia=$dia;
        $this->mes=$mes;
        $this->ano=$ano;
        $this->loadAlmas();
        $this->loadRegalos();
        $this->loadMisiones();
        $this->loadPersonalidades();
    }
    
  /** 
    * 
    * Retorna el texto correspondiente al regalo
    * 
    * @return string 
    */
    
    public function getRegalo()
    {
        
        
        $parte1=$this->ano[0].$this->ano[1];
        $parte2=$this->ano[2].$this->ano[3];
        
        $parte2numero=(int)$parte2;
        if($parte2numero<10)
        {
            return utf8_encode($this->regalos[(string)$parte2numero]);
        }
        else
        {
            $number1=$this->ano[2];
            $number2=$this->ano[3];
            $suma=(int)$number1+(int)$number2;
            
            return utf8_encode($this->regalos[(string)$suma]);
        }
    }
    
    /** 
    * 
    * Retorna el numero correspondiente al alma
    * 
    * @return int 
    */
    private function getNumeroAlma()
    {
        
        
      if((int)$this->dia<10)
      {
        return $this->dia;
        
      }
      else
      {
        $number1=$this->dia[0];
        $number2=$this->dia[1];
        $suma=(int)$number1+(int)$number2;
        
        return $suma;
        
      }
    }
    
    /** 
    * 
    * Retorna el texto correspondiente al alma
    * 
    * @return string 
    */
    public function getAlma()
    {

        $numero=(string)$this->getNumeroAlma();
        
        return utf8_encode($this->almas[$numero]);
      
    }
    
    
    /** 
    * 
    * Retorna el numero correspondiente a la personalidad
    * 
    * @return int 
    */
    
    private function getNumeroPersonalidad()
    {
      if((int)$this->mes<10)
      {
        return $this->mes;
        
      }
      else
      {
        $number1=$this->mes[0];
        $number2=$this->mes[1];
        $suma=(int)$number1+(int)$number2;
        return $suma;
        
      }
    }
    
    /** 
     * 
     * Retorna el texto correspondiente a la personalidad
     * 
     * @return string 
     */
    public function getPersonalidad()
    {
        $numero=(string)$this->getNumeroPersonalidad();
        return utf8_encode($this->personalidades[$numero]);
    }
    
    /** 
     * 
     * Retorna el texto correspondiente al proposito
     * 
     * @return string 
     */
    public function getProposito()
    {
        
        $sumaparcial=$this->getNumeroAlma()+$this->getNumeroPersonalidad();
        $parte1ano=$this->ano[0].$this->ano[1];
        $sumatotal=$sumaparcial+(int)$parte1ano;
        $stringsumatotal=(string)$sumatotal;
        

        if($sumatotal<10)
        {
            return utf8_encode($this->misiones[(string)$sumatotal]);
        }
        else
        {
            
            $number1=$stringsumatotal[0];
            $number2=$stringsumatotal[1];
            $sumatotal=(int)$number1+(int)$number2;

            return utf8_encode($this->misiones[(string)$sumatotal]);
        }
        
    }
    
}


?>