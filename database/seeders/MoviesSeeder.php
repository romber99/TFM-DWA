<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'El Señor de los Anillos: La Comunidad del Anillo',
            'synopsis' => 'Frodo Bolsón, un hobbit de la Comarca, hereda un anillo mágico que tiene el poder de controlar el destino de toda la Tierra Media. Junto a un grupo de aliados, incluyendo humanos, elfos y enanos, debe emprender una peligrosa travesía hacia el Monte del Destino para destruir el anillo y detener las fuerzas oscuras de Sauron.',
            'release_year' => 2001,
            'duration_min' => 178,
            'rating' => 8.8,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=3GJp6p_mgPo'
        ]);

        Movie::create([
            'title' => 'El Señor de los Anillos: Las Dos Torres',
            'synopsis' => 'Mientras Frodo y Sam se acercan cada vez más a Mordor con la ayuda de la extraña criatura Gollum, sus amigos se preparan para la gran guerra que se avecina. La comunidad, ahora dividida, debe enfrentar las fuerzas de Saruman en una épica batalla en el Abismo de Helm, mientras el peligro se cierne sobre la Tierra Media.',
            'release_year' => 2002,
            'duration_min' => 179,
            'rating' => 8.7,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=yZLxtW7qq48'
        ]);

        Movie::create([
            'title' => 'El Señor de los Anillos: El Retorno del Rey',
            'synopsis' => 'En la conclusión épica de la trilogía, Frodo y Sam llegan al corazón de Mordor para destruir el anillo mientras que el resto de sus amigos se unen en la gran batalla de los Campos de Pelennor. Aragorn acepta su destino como rey y lidera a los pueblos libres en su lucha final contra las fuerzas de Sauron para salvar la Tierra Media.',
            'release_year' => 2003,
            'duration_min' => 201,
            'rating' => 9.0,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=h-9RYiqyqjk'
        ]);

        Movie::create([
            'title' => 'El Hobbit: Un viaje inesperado',
            'synopsis' => 'Bilbo Bolsón, un hobbit tranquilo y pacífico, es arrastrado por el mago Gandalf a una aventura junto a un grupo de enanos que buscan recuperar su hogar, Erebor, y el tesoro que les fue arrebatado por el dragón Smaug. A lo largo de su viaje, Bilbo descubre su propio valor y encuentra un anillo mágico con poderes inesperados.',
            'release_year' => 2012,
            'duration_min' => 169,
            'rating' => 7.8,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=sI8OQRXhcZE'
        ]);

        Movie::create([
            'title' => 'El Hobbit: La Desolación de Smaug',
            'synopsis' => 'Bilbo y los enanos continúan su viaje hacia la Montaña Solitaria, enfrentando arañas gigantes, elfos y enemigos peligrosos. Al llegar a su destino, Bilbo debe enfrentarse al temible dragón Smaug, quien guarda ferozmente el tesoro que los enanos buscan recuperar, desatando una cadena de eventos que cambiará para siempre el destino de la Tierra Media.',
            'release_year' => 2013,
            'duration_min' => 161,
            'rating' => 7.8,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=4SLBizx05Bo'
        ]);

        Movie::create([
            'title' => 'El Hobbit: La Batalla de los Cinco Ejércitos',
            'synopsis' => 'Tras despertar la ira del dragón Smaug, los enanos, los elfos y los humanos se preparan para la guerra. Bilbo debe decidir entre su lealtad a sus amigos y la necesidad de salvar la Tierra Media, mientras que una oscura amenaza emerge de Mordor y pone en peligro a todos los pueblos libres.',
            'release_year' => 2014,
            'duration_min' => 144,
            'rating' => 7.4,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=BthTLWcZTwg'
        ]);

        Movie::create([
            'title' => 'La decisión de Sophie',
            'synopsis' => 'Sophie, una sobreviviente del Holocausto, vive en Brooklyn y lucha con los traumas de su pasado mientras intenta construir una nueva vida junto a su amante y un joven escritor. A medida que se revelan los detalles de su desgarradora historia, Sophie debe enfrentarse a sus oscuros recuerdos y a las decisiones imposibles que tuvo que tomar.',
            'release_year' => 1982,
            'duration_min' => 150,
            'rating' => 7.6,
            'audience' => '16+',
            'url_trailer' => 'https://www.youtube.com/watch?v=FbWTba9BFRs'
        ]);

        Movie::create([
            'title' => '¡Mamma Mía!',
            'synopsis' => 'Sophie, una joven que vive en una idílica isla griega, invita a tres hombres a la boda de sus sueños con la esperanza de descubrir cuál de ellos es su verdadero padre. A medida que los invitados llegan y los secretos salen a la luz, madre e hija se ven envueltas en una divertida y emocionante búsqueda de identidad, acompañada por las canciones de ABBA.',
            'release_year' => 2008,
            'duration_min' => 108,
            'rating' => 6.4,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=7URVcVXFPmM'
        ]);

        Movie::create([
            'title' => 'Forrest Gump',
            'synopsis' => 'Forrest Gump, un hombre con un corazón puro y una mente inocente, vive una vida increíble, presenciando y participando en algunos de los momentos más significativos de la historia estadounidense. A través de su amor inquebrantable por Jenny y su lealtad a sus amigos, Forrest se convierte en un héroe inesperado y muestra que todos pueden dejar una huella en el mundo.',
            'release_year' => 1994,
            'duration_min' => 142,
            'rating' => 8.8,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=Cyh1LpxnaxI'
        ]);

        Movie::create([
            'title' => 'Náufrago',
            'synopsis' => 'Chuck Noland, un ejecutivo obsesionado con el tiempo, se ve atrapado en una isla desierta tras un accidente aéreo. Aislado de toda civilización, Chuck deberá aprender a sobrevivir y encontrar sentido en su soledad. A lo largo de cuatro años, su viaje de supervivencia lo lleva a enfrentar sus miedos más profundos y descubrir lo que realmente importa en la vida.',
            'release_year' => 2000,
            'duration_min' => 143,
            'rating' => 7.8,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=OF7bO1RUOU8'
        ]);

        Movie::create([
            'title' => 'Lost in Translation',
            'synopsis' => 'En Tokio, dos estadounidenses solitarios, Bob y Charlotte, desarrollan una inesperada amistad. Atrapados en la alienación cultural, encuentran consuelo el uno en el otro y en las conversaciones profundas que comparten en medio de la vibrante vida nocturna de la ciudad, llevándolos a una conexión emocional que los transforma.',
            'release_year' => 2003,
            'duration_min' => 102,
            'rating' => 7.7,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=W6iVPCRflQM'
        ]);

        Movie::create([
            'title' => 'Lucy',
            'synopsis' => 'Lucy, una joven obligada a ejercer de mula de una nueva y potente droga, adquiere de repente enormes poderes sobrenaturales cuando la bolsa de la droga se rompe y los narcóticos entran en contacto con su cuerpo. Entonces, su cerebro comienza a aumentar la capacidad de uso hasta poder ser utilizado al 100%, convirtiéndose en una máquina letal con habilidades extraordinarias.',
            'release_year' => 2014,
            'duration_min' => 89,
            'rating' => 6.4,
            'audience' => '16+',
            'url_trailer' => 'https://www.youtube.com/watch?v=xSkH8oU0oxo'
        ]);

        Movie::create([
            'title' => 'Sueños de libertad',
            'synopsis' => 'Andrew Dufresne es un hombre inocente que es acusado del asesinato de su mujer. Tras ser condenado a cadena perpetua, es enviado a la cárcel de Shawshank, en Maine. Con el paso de los años, Andrew conseguirá ganarse la confianza del director del centro y el respeto de los otros convictos, especialmente de Red, el jefe de la mafia.',
            'release_year' => 1994,
            'duration_min' => 142,
            'rating' => 9.3,
            'audience' => '16+',
            'url_trailer' => 'https://www.youtube.com/watch?v=xB4nJg0fyE0'
        ]);

        Movie::create([
            'title' => 'Invictus',
            'synopsis' => 'Adaptación de un libro de John Carlin (Playing the enemy). En 1990, tras ser puesto en libertad, Nelson Mandela (Morgan Freeman) llega a la Presidencia de su país y decreta la abolición del "Apartheid". Su objetivo era llevar a cabo una política de reconciliación entre la mayoría negra y la minoría blanca. En 1995, la celebración en Sudáfrica de la Copa Mundial de Rugby fue el instrumento utilizado por el líder negro para construir la unidad nacional.',
            'release_year' => 2009,
            'duration_min' => 134,
            'rating' => 7.3,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=VnfWrWg-Rfg'
        ]);

        Movie::create([
            'title' => 'Cisne negro',
            'synopsis' => 'Nina (Natalie Portman), una brillante bailarina que forma parte de una compañía de ballet de Nueva York, vive completamente absorbida por la danza. La presión de su controladora madre (Barbara Hershey), la rivalidad con su compañera Lily (Mila Kunis) y las exigencias del severo director (Vincent Cassel) se irán incrementando a medida que se acerca el día del estreno. Esta tensión provoca en Nina un agotamiento nervioso y una confusión mental que la incapacitan para distinguir entre realidad y ficción.',
            'release_year' => 2010,
            'duration_min' => 108,
            'rating' => 8.0,
            'audience' => '16+',
            'url_trailer' => 'https://www.youtube.com/watch?v=f1el56alYI4'
        ]);

        Movie::create([
            'title' => 'V de Vendetta',
            'synopsis' => 'En un futuro no muy lejano, Gran Bretaña se ha convertido en un país totalitario dirigido con mano de hierro por un tirano (John Hurt). Una tarde, tras el toque de queda, Evey (Natalie Portman) es rescatada en plena calle por un misterioso enmascarado cuyo nombre es "V" (Hugo Weaving). El extraño personaje le explica cuáles son sus planes para recuperar la libertad. En efecto, todas las acciones de V tendrán como objetivo hacer estallar en todo el país una revolución contra el gobierno fascista.',
            'release_year' => 2005,
            'duration_min' => 132,
            'rating' => 8.2,
            'audience' => '16+',
            'url_trailer' => 'https://www.youtube.com/watch?v=5I-mKP2Hz4Q'
        ]);

        Movie::create([
            'title' => 'Iron Man',
            'synopsis' => 'El multimillonario fabricante de armas Tony Stark (Robert Downey Jr.) debe enfrentarse a su turbio pasado después de sufrir un accidente con una de sus armas. Equipado con una armadura de última generación tecnológica, se convierte en "El hombre de hierro", un héroe que se dedica a combatir el mal en todo el mundo.',
            'release_year' => 2008,
            'duration_min' => 126,
            'rating' => 7.9,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=8ugaeA-nMTc',
        ]);

        Movie::create([
            'title' => 'Sherlock Holmes',
            'synopsis' => 'Sherlock Holmes y su incondicional compañero Watson, deberán usar su agudeza intelectual y toda clase de recursos y habilidades para enfrentarse a un nuevo enemigo y desenmarañar un complot que podría destruir el país. Adaptación del cómic de Lionel Wigram, que reinventa los personajes de Arthur Conan Doyle, convirtiendo a Sherlock Holmes (Robert Downey Jr.) y al Doctor John Watson (Jude Law) en detectives con habilidades para el boxeo y la esgrima respectivamente.',
            'release_year' => 2009,
            'duration_min' => 128,
            'rating' => 7.6,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=iKUzhzustok'
        ]);

        Movie::create([
            'title' => 'Amélie',
            'synopsis' => 'Amelie no es una chica como las demás. Ha visto a su pez de colores deslizarse hacia las alcantarillas municipales, a su madre morir en la plaza de Nôtre-Dame y a su padre dedicar todo su afecto a un gnomo de jardín. De repente, a los veintidós años, descubre su objetivo en la vida: arreglar la vida de los demás. A partir de entonces, inventa toda clase de estrategias para intervenir en los asuntos de los demás: su portera, que se pasa los días bebiendo vino de Oporto; Georgette, una estanquera hipocondríaca, o "el hombre de cristal", un vecino que sólo ve el mundo a través de la reproducción de un cuadro de Renoir.',
            'release_year' => 2001,
            'duration_min' => 120,
            'rating' => 7.8,
            'audience' => '13+',
            'url_trailer' => 'https://www.youtube.com/watch?v=JMPOXWSL_PY'
        ]);

        Movie::create([
            'title' => 'El código Da Vinci',
            'synopsis' => 'El catedrático y afamado simbologista Robert Langdon (Tom Hanks) se ve obligado a acudir una noche al Museo del Louvre, cuando el asesinato de un restaurador deja tras de sí un misterioso rastro de símbolos y pistas. Con la ayuda de la criptógrafa de la policía Sophie Neveu (Audrey Tautou) y poniendo en juego su propia vida, Langdon descubre que la obra de Leonardo Da Vinci esconde una serie de misterios que apuntan a una sociedad secreta encargada de custodiar un antiguo secreto que ha permanecido oculto durante dos mil años...',
            'release_year' => 2006,
            'duration_min' => 147,
            'rating' => 7.5,
            'audience' => '16+',
            'url_trailer' => 'https://www.youtube.com/watch?v=_u2_UpWl6jQ'
        ]);

        Movie::create([
            'title' => 'Ángeles y demonios',
            'synopsis' => 'El profesor de simbología religiosa Robert Langdon, absorto en la investigación de una antigua secta satánica, la de los "Illuminati", busca el arma más mortífera de la humanidad (antimateria), que algunos miembros de esta secta han introducido en el Vaticano. Langdon y una científica italiana se lanzan a una carrera contrarreloj para evitar el desastre. Tras "El código da Vinci", Tom Hanks vuelve a interpretar al profesor Langdon.',
            'release_year' => 2009,
            'duration_min' => 138,
            'rating' => 6.7,
            'audience' => '16+',
            'url_trailer' => 'https://www.youtube.com/watch?v=kS3HjPPiofM'
        ]);
    }
}
