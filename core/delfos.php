<?php
/** 
 * Dada la fecha de nacimiento de una persona, esta clase permite obtener
 * aspectos de su personalidad y alma, asi como su don y prop�sito.
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
    * Este m�todo carga en la variable privada $misiones los textos
    * correspondientes a la mision.
    * Esta informaci�n puede ser extraida de una fuente externa
    */ 
    
    public function loadMisiones()
    {
    $this->misiones['1']="Sentirte realizado, deber�s ense�ar al mundo, con tu ejemplo, la humildad y creatividad.
Es posible que la vida te d� el espacio para abrir nuevos caminos, ser innovador, creador y pionero.";
    $this->misiones['2']="Ser muy abierto.
A tener varios Maestros en una misma vida para que guien tu camino.
";
    $this->misiones['3']="Lograr ser independiente, amoroso y justo";
    $this->misiones['4']="Desarrollar una mente clara, objetiva, organizada y pr�ctica.
Adem�s ser amorosamente servicial.";
    $this->misiones['5']="Alcanzar el equilibrio entre el cielo y la tierra, entre lo interno y lo externo.
Debes ense�ar a los dem�s con tu ejemplo .
Debes lograr ser perseverante, leal y paciente.
Tienes que aprender a adaptarte a nuevas circunstancias.
Tienes que aprender el uso correcto de la libertad.
";
    $this->misiones['6']="Permanecer focalizado en un centro y concentrarse s�lo en �l: la M�stica, porque tienes una gran profundidad para percibir la vida.
Pero cuando el numero de misi�n se manifiesta en su aspecto negativo:
no querr�s ser un ser de oraci�n, incluso creer�s que no lo necesitas.
En general,  no considerar�s tu camino hasta que no te reencuentres  con tu alma.
";
    $this->misiones['7']="Debes elevarte a t� mismo y a los que te rodean.
Si eres una persona dura, entonces tu misi�n ser� aprender a tener misericordia.
Si eres una persona blanda, tu misi�n ser� aprender a guiar.
Debes aprender a trabajar  tu ego, porque es muy fuerte.
Adem�s, debes ser muy fuerte y positivo, de manera que siempre puedas influenciar positivamente a los dem�s.
";
    $this->misiones['8']="Lograr la purificaci�n de tu cuerpo. Vencer la melancol�a y el temor.Controlar la mente.
Lograr una conciencia infinita. Alcanzar grados de conciencia iluminada a trav�s de la fusi�n con el infinito.
Lograr la Maestr�a de lo et�rico . 
";
    $this->misiones['9']="Alcanzar la virtud de la constancia.
Lograr la Maestr�a de t� mismo, mostrando una calma total en todo lo que realices.
Ser capaz de tranquilizar a los que te rodean.
Alcanzar el don de la bondad y la comprensi�n.";
    $this->misiones['10']=$this->misiones['1'];
    $this->misiones['11']="Transmutar, elevando la conciencia de los dem�s.
Deber�s ser un constante ejemplo de vida espiritual.
Deber�s expandirte hasta el infinito.
Deber�s desarrollar talentos.
Deber�s buscar nuevos principios.
Deber�s confiar en tu intuici�n. 
";
    
    }

  /** 
    * Este m�todo carga en la variable privada $almas los textos
    * correspondientes al alma.
    * Esta informaci�n puede ser extraida de una fuente externa
    */ 
    public function loadAlmas()
    {
        $this->almas['1']="Debes permanecer enfocado en tu interior para estar centrado; por lo tanto, debes conocerte.
Como vives desde el coraz�n, puedes alcanzar tu paz interna y externa a trav�s de la humildad. 
En general, eres muy creativo, y te gu�as m�s por lo que sientes que por lo que piensas.
Claro que cuando el uno se manifiesta en su aspecto negativo, te transformas y eres:
Anal�tico y cuadrado, te metes en problemas en cuanto sales de su coraz�n.
Al centrar tu energ�a en la mente, el temor y la rabia bloquean el flujo del alma.
Tu n�mero de alma es 1";
        $this->almas['2']="Deber�s tener la capacidad de calcular las consecuencias de tus actos, para no da�ar a tu alma.
Tu alma siempre est� buscando el crecimiento espiritual, ya sea consciente o inconscientemente. 
Deber�s ser muy selectivo con el mundo que te rodea porque eres muy influenciable. 
Obedecer�s a tu conciencia para ser feliz.
Necesitas mucho amor y compa��a.
No te importa pasar inadvertido.
No te interesa brillar ni destacarte.Tu n�mero de alma es 2";
        $this->almas['3']="Eres idealista y compasivo con los hombres y animales.
Tienes la capacidad para detectar la mentira.
Eres independiente.
Eres optimista, siempre le ves el lado bueno de las cosas.
Te molesta cualquier tipo de insensibilidad.
Tu actitud nunca es neutra frente a lo m�stico.
Amas al  pr�jimo como a t� mismo.
Eres caritativo, participas en toda obra de servicio.
No te dejas impresionar por lo externo, por ejemplo, dinero y abolengo.
Necesitas ver la igualdad dentro de t� mismo y con los dem�s.
Eres buena persona. Cuando haces algo indebido te sientes culpable.
No permites que la depresi�n te domine.
Eres emocional afectivamente.
Eres expresivo.
No te preocupas mucho por la cosas.Tu n�mero de alma es 3";

        $this->almas['4']="Te caracterizas porque nunca te autoenga�as.
Tu mente tiene una gran capacidad para entender problem�ticas filos�ficas y sicol�gicas.
Para que tu alma est� en paz, necesitas servir a tu pr�jimo.Tu n�mero de alma es 4";
        $this->almas['5']="Eres equilibrado y disciplinado, lo que te permite entrar en contacto con tu alma con mucha facilidad.
Debes sentirte y verte bien f�sicamente, para estar bien internamente. Cualquier da�o en tu cuerpo afecta a tu alma y a tu paz interior.
Tiendes a entregarte de lleno al trabajo equilibrado.
En general necesitas mantener tu equilibrio, de lo contrario pierdes el dominio en el plano f�sico. 
Tu n�mero de alma es 5";
        $this->almas['6']="Te caracterizas porque eres: Introvertido,profundo e interno.
Pero cuando el seis se manifiesta en su aspecto negativo eres: superficial, ego�sta y s�lo subsistes. Tu n�mero de alma es 6";
        $this->almas['7']="Tienes la capacidad de guiarte.
Te caracterizas porque tu presencia es poderosa. Siempre est�s al frente de las cosas.Tu n�mero de alma es 7";
        $this->almas['8']="Te caracterizas por poseer un alma pura. Tienes  capacidad de auto sanaci�n.
No temes y persistes hasta alcanzar tus objetivos internos.
Eres expansivo, siempre vas m�s all� y m�s lejos.
Nunca terminas de cuestionar el conocimiento de t� mismo.
Te expandes con profundidad.
Una vez que te encuentras con tu alma, percibir�s c�mo esta expansi�n te permite relacionarse con lo divino.
Tu n�mero de alma es 8";
        $this->almas['9']="Estar�s en paz contigo , en el momento en que logres profundizar con tu  interior.
Tu arte consistir� en ser constante con aquello que decidas emprender, logrando as� la maestr�a de t� mismo, la sutileza, y la calma.
Fluyes en armon�a. Claro que cuando el nueve se manifiesta en el aspecto negativo, eres:
Duro contigo.
Tu alma ser� un misterio.
No te conocer�n mientras sigan siendo superficial.Tu n�mero de alma es 9";
        $this->almas['10']=$this->almas['1']." Tu n�mero de alma es 10";
        $this->almas['11']="Te caracterizas porque fluyes, tienes gran conexi�n con lo divino. Est�s seguro de que todo proviene de Dios y todo vuelve a �l.
Sabes que tu alma es grande, y que esto se debe a la conexi�n permanente con la divinidad.
Claro que a veces el once se manifiesta en su aspecto negativo, y entonces eres:
Conflictivo y con una gran frustraci�n interna.
Conoces tus cualidades, pero no puedes plasmarlas ni proyectarlas.
Tu n�mero de alma es 11";
        $this->almas['12']=$this->almas['3']."Tu n�mero de alma es 12";
        $this->almas['13']=$this->almas['4']."Tu n�mero de alma es 13";
        $this->almas['14']=$this->almas['5']."Tu n�mero de alma es 14";
        $this->almas['15']=$this->almas['6']."Tu n�mero de alma es 15";
        $this->almas['16']=$this->almas['7']."Tu n�mero de alma es 16";
        $this->almas['17']=$this->almas['8']."Tu n�mero de alma es 17";
        $this->almas['18']=$this->almas['9']."Tu n�mero de alma es 18";
        
        $this->almas['19']=$this->almas['1']."Tu n�mero de alma es 19";
        $this->almas['20']=$this->almas['2']."Tu n�mero de alma es 20";
        $this->almas['21']=$this->almas['3']."Tu n�mero de alma es 21";
        $this->almas['22']=$this->almas['4']."Tu n�mero de alma es 22";
        $this->almas['23']=$this->almas['5']."Tu n�mero de alma es 23";
        $this->almas['24']=$this->almas['6']."Tu n�mero de alma es 24";
        $this->almas['25']=$this->almas['7']."Tu n�mero de alma es 25";
        $this->almas['26']=$this->almas['8']."Tu n�mero de alma es 26";
        $this->almas['27']=$this->almas['9']."Tu n�mero de alma es 27";
        $this->almas['28']=$this->almas['1']."Tu n�mero de alma es 28";
        $this->almas['29']=$this->almas['11']."Tu n�mero de alma es 29";
        $this->almas['30']=$this->almas['3']."Tu n�mero de alma es 30";
        $this->almas['31']=$this->almas['4']."Tu n�mero de alma es 31";


    }
    
  /** 
    * Este m�todo carga en la variable privada $personalidades los textos
    * correspondientes a la personalidad.
    * Esta informaci�n puede ser extraida de una fuente externa
    */ 
    public function loadPersonalidades()
    {
        $this->personalidades['1']="Te caracterizas porque eres silencios@ y transparente.
Pasas casi inadvertido en lugares p�blicos.
No molestas.
Tu relaci�n de pareja ocupa un lugar muy importante en tu vida porque  vives desde el sentimiento.
Tu l�nea de trabajo tiene relaci�n con lo creativo.
Pero cuando el uno se manifiesta en su aspecto negativo eres:
Lento, dormilon, flojo, poco creativo  y te relacionas con los dem�s desde la cabeza.Tu n�mero de personalidad es 1";

        $this->personalidades['2']="Te caracterizas porque tienes una relaci�n de amistad con el mundo.
Las personas se sienten atra�das por ti, ya que inspiras confianza y est�n abiertos a las relaciones.
Tu mente deber� funcionar bien para que pueda calcular los peligros del mundo.
Eres buen comerciante, calculas con precisi�n el resultado econ�mico de cualquier situaci�n.
Pero cuando el dos se manifiesta en su aspecto negativo, eres:
F�cilmente utilizado por los dem�s.
Eres capaz de perder el dinero con tal de ganar a un amigo.
Te manipulan en tus relaciones laborales y emocionales.
Eres muy complaciente.Tu n�mero de personalidad es 2";

        $this->personalidades['3']="Te caracterizas porque eres simp�tico y creativo.
Te gusta ser popular. Eres buen anfitrion.
Amas a los ni�os y a los animales.
Tienes problemas con la jerarqu�a, por lo tanto, no eres buen jefe o profesor (te cuesta distinguir rangos).
Siempre ver�s el lado positivo de todo, a�n cuando las cosas est�n mal.
Tu n�mero de personalidad es 3";

        $this->personalidades['4']="Te caracterizas porque eres servicial.
Eres buen consejero, atraes y tranquilizas a los dem�s.
Tu virtud consiste en ver dos lados o aspectos de la mente, lo que te permite tener una visi�n objetiva.
Ahora, cuando el cuatro se manifiesta en su aspecto negativo, eres: 
Inquieto, terco, impaciente,  no eres  neutral, no eres perseverante, tienes pocos amigos y eres adicto al trabajo.Tu n�mero de personalidad es 4";

        $this->personalidades['5']="Quieres experimentar la vida en toda posibilidad que se  presente.
Eres poco convencional.
Eres una persona atractiva para los dem�s. Fino, amable y simp�tico.
Eres buen actor.
Cambias de amor, o puedes tener 2 o 3 amores a la vez.
A menudo te ahogas en tantas actividades sociales.Tu n�mero de personalidad es 5";

        $this->personalidades['6']="Eres idealista, espiritual y justo.
Ans�as amor, amigos y compa��a.
Eres agradable para la mayor�a, ben�volo y tolerante.
Te deleitas decorando art�sticamente tu casa.
Necesitas que te alaben y estimulen.
Cuando el seis se manifiesta en su aspecto negativo, tus cualidades cambian, entonces:
Tu palabra no tiene poder. No cumples con los compromisos. Pierdes toda consecuencia.Tu n�mero de personalidad es 6";

        $this->personalidades['7']="Tienes mucha capacidad para enfrentar nuevas situaciones.
Eres perfeccionista. Pensador y sabio. Ejecutivo y l�der.
La negatividad del mundo externo no te afecta, porque tu aura es tan fuerte que nada la toca, ni penetra.
Eres  m�s idealista que materialista.
Te desagrada la labor manual.
Te disgustan las sugerencias ajenas.
Cuando el siete se manifiesta en su aspecto negativo eres: 
Incapaz de hablar frente a la gente.
Dudas de tu propia capacidad.
Tu aura es permeable, por lo tanto, influyen las energ�as circundantes y esto te confunde.Tu n�mero de personalidad es 7";

        $this->personalidades['8']="Saben c�mo ser uno con la energ�a vital.
Al saber conectarte con la energ�a vital, podr�s tener una visi�n infinita. Por lo tanto, ser�s planificador a largo plazo, cumpliendo cada uno de tus objetivos.
Puedes trabajar 20 horas al d�a sin cansarte.
Puedes ser doctor o buen sanador, porque es la energ�a vital, tanto del paciente como del terapeuta, la que ayuda en el proceso de sanaci�n.
Pero cuando el ocho se manifiesta en su aspecto negativo, eres:
Temeroso.
Nunca posees la suficiente energ�a para cumplir con lo que te propones.
No posees la visi�n del �guila para ver aquello que debes o puedes realizar.
Tu n�mero de personalidad es 8";

        $this->personalidades['9']="Eres constante en tu trabajo y en tus relaciones.
Eres Delicado.
Dominas todas las situaciones sin que nadie te altere. Es tanto, que a veces la gente cree que eres duro e insensible, pero no lo eres, simplemente sabes mantener la calma.
Cuidas mucho lo que dices para no herir a quienes te rodean.
Cuando el nueve se manifiesta en su aspecto negativo, eres:
Mediocre, sabes de todo un poco, pero nada bien en realidad.
Cambias de actividad a cada rato.
Hieres a las personas.Tu n�mero de personalidad es 9";

        $this->personalidades['10']=$this->personalidades['1']."Tu n�mero de personalidad es 10";
        $this->personalidades['11']="Inspiras y elevas la conciencia de los dem�s.
Puedes alcanzar la maestr�a en la realidad f�sica.
Pero cuando el once se manifiesta en su aspecto negativo:
Si no logras la maestr�a en el plano f�sico, siempre estar�s preocupado por el dinero, de la apariencia ilusoria, de los sentidos.
Quieres tener la mejor casa, autos, etc. Siempre est�s preocupados de lo que otros opinan de ti.
Sientes una gran frustraci�n, aunque logres bastantes cosas, nunca est�s satisfecho.
Tu n�mero de personalidad es 11";
        $this->personalidades['12']=$this->personalidades['3']."Tu n�mero de personalidad es 12";
       

    }
    
  /** 
    * Este m�todo carga en la variable privada $regalos los textos
    * correspondientes al regalo.
    * Esta informaci�n puede ser extraida de una fuente externa
    */ 
    public function loadRegalos()
    {
        $this->regalos['1']="La creatividad.
Adem�s, ser�s amoroso.";
        $this->regalos['2']="Podr�s calcular bien las cosas, por ejemplo: el peligro.
Ser�s amistoso con todo el mundo.
Ser�s bondadoso.
Tendr�s la habilidad de conectarte con cualquier persona, permitiendo que junto a ellos se sientan c�modos y relajados.
";
        $this->regalos['3']="Amar a tu pr�jimo.
Ver a la Humanidad como un todo.
No importa lo que te pase,  siempre mantendr�s una actitud mental positiva.
Podr�s escuchar y ayudar al ser m�s negativo, sin que esto te afecte.
";
        $this->regalos['4']="Tienes una mente muy espiritual.
Eres neutral, humilde y amas servir.
Tienes la capacidad de ver el origen, o ir al origen de cada circunstancia.
";
        $this->regalos['5']="Dominas tu cuerpo f�sico.
Tienes habilidad para ense�ar.";
        $this->regalos['6']="Tienes fe en Dios
Eres m�stico.
Concentrado. 
Pones todas tus energ�as en un centro.";
        $this->regalos['7']="Todo lo elevas en vibraci�n.
Generas buenas energ�as con facilidad.
Eres un l�der que brilla.";

        $this->regalos['8']="Nunca temes.
Siempre te resultan tus proyectos. Eres una persona que va hacia adelante, ayudando a otros seres a que pueden  plasmar sus proyectos.
";
        $this->regalos['9']="Puedes obtener la Maestr�a de una manera r�pida y con mayor facilidad que el resto de las personas.
Captas r�pidamente lo que ocurre a tu alrededor.";
        $this->regalos['10']=$this->regalos['1'];
        $this->regalos['11']="Cuando tomes conciencia de lo que tienes, ser�s un puente para los hombres, entre �ste y otros planos.
Ser�s capaz de expresar la energ�a de cualquiera de tus cuerpos espirituales cuando necesiten hacerlo.
Nunca te faltar� el dinero.";
        

    }
    
    /** 
    * Este m�todo es el constructor y carga en sus variables privadas el dia,
    * mes y a�o dadas. Estas tres variables son necesarias.
    * Tambi�n carga textos en los arreglos.
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