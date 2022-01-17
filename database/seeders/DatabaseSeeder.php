<?php

namespace Database\Seeders;

use App\Models\Registroempresa;
use App\Models\Alumnosporcarrera;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Registroempresa::factory(10)->create();
        //Alumnosporcarreras::factory(20)->create();

        $estado = new Estado();
        $estado->nombre = "Aguascalientes";
        $estado->save();

        $ciudad = new Municipio();
        $ciudad->nombre ="Aguascalientes";
        $ciudad->estado_id = "1";
        $ciudad->save();

        $ciudad2 = new Municipio();
        $ciudad2->nombre ="Ciudad de Asientos";
        $ciudad2->estado_id = "1";
        $ciudad2->save();

        $ciudad3 = new Municipio();
        $ciudad3->nombre ="Ciudad de Calvillo";
        $ciudad3->estado_id = "1";
        $ciudad3->save();

        $ciudad4 = new Municipio();
        $ciudad4->nombre ="Ciudad de Cosío";
        $ciudad4->estado_id = "1";
        $ciudad4->save();

        $ciudad5 = new Municipio();
        $ciudad5->nombre ="Ciudad de Jesús María";
        $ciudad5->estado_id = "1";
        $ciudad5->save();

        $ciudad6 = new Municipio();
        $ciudad6->nombre ="Ciudad de Pabellón de Arteaga";
        $ciudad6->estado_id = "1";
        $ciudad6->save();

        $estado2 = new Estado();
        $estado2->nombre = "Baja California";
        $estado2->save();

        $ciudad7 = new Municipio();
        $ciudad7->nombre ="Ensenada";
        $ciudad7->estado_id = "2";
        $ciudad7->save();

        $ciudad8 = new Municipio();
        $ciudad8->nombre ="Mexicali";
        $ciudad8->estado_id = "2";
        $ciudad8->save();

        $ciudad9 = new Municipio();
        $ciudad9->nombre ="Tijuana";
        $ciudad9->estado_id = "2";
        $ciudad9->save();

        $estado3 = new Estado();
        $estado3->nombre = "Baja California Sur";
        $estado3->save();

        $ciudad10 = new Municipio();
        $ciudad10->nombre ="La Paz";
        $ciudad10->estado_id = "3";
        $ciudad10->save();

        $ciudad11 = new Municipio();
        $ciudad11->nombre ="Loreto";
        $ciudad11->estado_id = "3";
        $ciudad11->save();

        $ciudad12 = new Municipio();
        $ciudad12->nombre ="Los Cabos";
        $ciudad12->estado_id = "3";
        $ciudad12->save();

        $ciudad13 = new Municipio();
        $ciudad13->nombre ="Mulegé";
        $ciudad13->estado_id = "3";
        $ciudad13->save();


        $estado4 = new Estado();
        $estado4->nombre = "Campeche";
        $estado4->save();

        $ciuda = new Municipio();
        $ciuda->nombre ="Calkini";
        $ciuda->estado_id = "4";
        $ciuda->save();

        $ciuda2 = new Municipio();
        $ciuda2->nombre ="Candelaria";
        $ciuda2->estado_id = "4";
        $ciuda2->save();

        $ciuda3 = new Municipio();
        $ciuda3->nombre ="Ciudad del Carmen";
        $ciuda3->estado_id = "4";
        $ciuda3->save();

        $ciuda4 = new Municipio();
        $ciuda4->nombre ="San Francisco de Campeche";
        $ciuda4->estado_id = "4";
        $ciuda4->save();


        $estado5 = new Estado();
        $estado5->nombre = "Chiapas";
        $estado5->save();

        $ciuda6 = new Municipio();
        $ciuda6->nombre ="Acala";
        $ciuda6->estado_id = "5";
        $ciuda6->save();

        $ciuda7 = new Municipio();
        $ciuda7->nombre ="Arriaga";
        $ciuda7->estado_id = "5";
        $ciuda7->save();

        $ciuda8 = new Municipio();
        $ciuda8->nombre ="Huixtla";
        $ciuda8->estado_id = "5";
        $ciuda8->save();

        $ciuda9 = new Municipio();
        $ciuda9->nombre ="Ciudad de Las Margaritas";
        $ciuda9->estado_id = "5";
        $ciuda9->save();

        $ciudad10 = new Municipio();
        $ciudad10->nombre ="Ciudad de Las Rosas";
        $ciudad10->estado_id = "5";
        $ciudad10->save();


        $estado6 = new Estado();
        $estado6->nombre = "Chihuahua";
        $estado6->save();

        $ciud = new Municipio();
        $ciud->nombre ="Chihuahua";
        $ciud->estado_id = "6";
        $ciud->save();

        $ciud2 = new Municipio();
        $ciud2->nombre ="Ciudad de Cuauhtémoc";
        $ciud2->estado_id = "6";
        $ciud2->save();

        $ciud3 = new Municipio();
        $ciud3->nombre ="Jiménez";
        $ciud3->estado_id = "6";
        $ciud3->save();

        $ciud4 = new Municipio();
        $ciud4->nombre ="Juárez";
        $ciud4->estado_id = "6";
        $ciud4->save();

        $ciud5 = new Municipio();
        $ciud5->nombre ="Nuevo Casas Grandes";
        $ciud5->estado_id = "6";
        $ciud5->save();

        $estado7 = new Estado();
        $estado7->nombre = "Coahuila";
        $estado7->save();

        $ciud6 = new Municipio();
        $ciud6->nombre ="Acuña";
        $ciud6->estado_id = "7";
        $ciud6->save();

        $ciud7 = new Municipio();
        $ciud7->nombre ="Allende";
        $ciud7->estado_id = "7";
        $ciud7->save();

        $ciud8 = new Municipio();
        $ciud8->nombre ="Escobedo";
        $ciud8->estado_id = "7";
        $ciud8->save();

        $ciud9 = new Municipio();
        $ciud9->nombre ="Hidalgo";
        $ciud9->estado_id = "7";
        $ciud9->save();

        $ciud10 = new Municipio();
        $ciud10->nombre ="Matamoros";
        $ciud10->estado_id = "7";
        $ciud10->save();


        $estado8 = new Estado();
        $estado8->nombre = "Colima";
        $estado8->save();

        $ciu = new Municipio();
        $ciu->nombre ="Armería";
        $ciu->estado_id = "8";
        $ciu->save();

        $ciu2 = new Municipio();
        $ciu2->nombre ="Colima";
        $ciu2->estado_id = "8";
        $ciu2->save();

        $ciu3 = new Municipio();
        $ciu3->nombre ="Manzanillo";
        $ciu3->estado_id = "8";
        $ciu3->save();

        $ciu4 = new Municipio();
        $ciu4->nombre ="Tecomán";
        $ciu4->estado_id = "8";
        $ciu4->save();

        $ciu5 = new Municipio();
        $ciu5->nombre ="Villa De Álvarez";
        $ciu5->estado_id = "8";
        $ciu5->save();


        $estado9 = new Estado();
        $estado9->nombre = "Ciudad de México";
        $estado9->save();

        $ciu6 = new Municipio();
        $ciu6->nombre ="Ciudad De México";
        $ciu6->estado_id = "9";
        $ciu6->save();

        $ciu7 = new Municipio();
        $ciu7->nombre ="";
        $ciu7->estado_id = "9";
        $ciu7->save();

        $ciu8 = new Municipio();
        $ciu8->nombre ="";
        $ciu8->estado_id = "9";
        $ciu8->save();

        $ciu9 = new Municipio();
        $ciu9->nombre ="";
        $ciu9->estado_id = "9";
        $ciu9->save();

        $ciu10 = new Municipio();
        $ciu10->nombre ="";
        $ciu10->estado_id = "9";
        $ciu10->save();


        $estado10 = new Estado();
        $estado10->nombre = "Durango";
        $estado10->save();

        $ciu11 = new Municipio();
        $ciu11->nombre ="Lerdo";
        $ciu11->estado_id = "10";
        $ciu11->save();

        $ciu12 = new Municipio();
        $ciu12->nombre ="Peñón Blanco";
        $ciu12->estado_id = "10";
        $ciu12->save();

        $ciu13 = new Municipio();
        $ciu13->nombre ="Pueblo Nuevo";
        $ciu13->estado_id = "10";
        $ciu13->save();

        $ciu14 = new Municipio();
        $ciu14->nombre ="San Juan Del Río";
        $ciu14->estado_id = "10";
        $ciu14->save();

        $ciu15 = new Municipio();
        $ciu15->nombre ="Vicente Guerrero";
        $ciu15->estado_id = "10";
        $ciu15->save();

        $estado11 = new Estado();
        $estado11->nombre = "Estado de México";
        $estado11->save();

        $ciu16 = new Municipio();
        $ciu16->nombre ="Ciudad Adolfo López Mateos";
        $ciu16->estado_id = "11";
        $ciu16->save();

        $ciu17 = new Municipio();
        $ciu17->nombre ="Ciudad Nezahualcoyotl";
        $ciu17->estado_id = "11";
        $ciu17->save();

        $ciu18 = new Municipio();
        $ciu18->nombre ="Cuautitlán";
        $ciu18->estado_id = "11";
        $ciu18->save();

        $ciu19 = new Municipio();
        $ciu19->nombre ="Ixtapaluca";
        $ciu19->estado_id = "11";
        $ciu19->save();

        $ciu20 = new Municipio();
        $ciu20->nombre ="Metepec";
        $ciu20->estado_id = "11";
        $ciu20->save();

        $estado12 = new Estado();
        $estado12->nombre = "Guanajuato";
        $estado12->save();
  
        $ci = new Municipio();
        $ci->nombre ="Apaseo El Alto";
        $ci->estado_id = "12";
        $ci->save();

        $ci2 = new Municipio();
        $ci2->nombre ="Apaseo El Grande";
        $ci2->estado_id = "12";
        $ci2->save();

        $ci3 = new Municipio();
        $ci3->nombre ="Celaya";
        $ci3->estado_id = "12";
        $ci3->save();

        $ci4 = new Municipio();
        $ci4->nombre ="Guanajuato";
        $ci4->estado_id = "12";
        $ci4->save();

        $ci5 = new Municipio();
        $ci5->nombre ="León";
        $ci5->estado_id = "12";
        $ci5->save();

        $estado13 = new Estado();
        $estado13->nombre = "Guerrero";
        $estado13->save();

        $ci6 = new Municipio();
        $ci6->nombre ="Acapulco De Juárez";
        $ci6->estado_id = "13";
        $ci6->save();

        $ci7 = new Municipio();
        $ci7->nombre ="Acatepec";
        $ci7->estado_id = "13";
        $ci7->save();

        $ci8 = new Municipio();
        $ci8->nombre ="Apaxtla";
        $ci8->estado_id = "13";
        $ci8->save();

        $ci9 = new Municipio();
        $ci9->nombre ="Benito Juárez";
        $ci9->estado_id = "13";
        $ci9->save();

        $ci10 = new Municipio();
        $ci10->nombre ="San Marcos";
        $ci10->estado_id = "13";
        $ci10->save();

        $estado14 = new Estado();
        $estado14->nombre = "Hidalgo";
        $estado14->save();

        $ci11 = new Municipio();
        $ci11->nombre ="Pachuca De Soto";
        $ci11->estado_id = "14";
        $ci11->save();

        $ci12 = new Municipio();
        $ci12->nombre ="Guerrero";
        $ci12->estado_id = "14";
        $ci12->save();

        $ci13 = new Municipio();
        $ci13->nombre ="Tizayuca";
        $ci13->estado_id = "14";
        $ci13->save();

        $ci14 = new Municipio();
        $ci14->nombre ="Tula De Allende";
        $ci14->estado_id = "14";
        $ci14->save();

        $ci15 = new Municipio();
        $ci15->nombre ="Zimapán";
        $ci15->estado_id = "14";
        $ci15->save();

        $estado15 = new Estado();
        $estado15->nombre = "Jalisco";
        $estado15->save();

        $ci16 = new Municipio();
        $ci16->nombre ="Ameca";
        $ci16->estado_id = "15";
        $ci16->save();

        $ci17 = new Municipio();
        $ci17->nombre ="Cihuatlán";
        $ci17->estado_id = "15";
        $ci17->save();

        $ci18 = new Municipio();
        $ci18->nombre ="Guadalajara";
        $ci18->estado_id = "15";
        $ci18->save();

        $ci19 = new Municipio();
        $ci19->nombre ="Lagos De Moreno";
        $ci19->estado_id = "15";
        $ci19->save();

        $ci20 = new Municipio();
        $ci20->nombre ="Tequila";
        $ci20->estado_id = "15";
        $ci20->save();

        $estado16 = new Estado();
        $estado16->nombre = "Michoacán";
        $estado16->save();

        $c = new Municipio();
        $c->nombre ="Apatzingán";
        $c->estado_id = "16";
        $c->save();

        $c2 = new Municipio();
        $c2->nombre ="Hidalgo";
        $c2->estado_id = "16";
        $c2->save();

        $c3 = new Municipio();
        $c3->nombre ="Morelia";
        $c3->estado_id = "16";
        $c3->save();

        $c4 = new Municipio();
        $c4->nombre ="Pátzcuaro";
        $c4->estado_id = "16";
        $c4->save();

        $c5 = new Municipio();
        $c5->nombre ="Zitácuaro";
        $c5->estado_id = "16";
        $c5->save();

        $estado17 = new Estado();
        $estado17->nombre = "Morelos";
        $estado17->save();

        $c6 = new Municipio();
        $c6->nombre ="Cuernavaca";
        $c6->estado_id = "17";
        $c6->save();

        $c7 = new Municipio();
        $c7->nombre ="Puente De Ixtla";
        $c7->estado_id = "17";
        $c7->save();

        $c8 = new Municipio();
        $c8->nombre ="Tepoztlán";
        $c8->estado_id = "17";
        $c8->save();

        $c9 = new Municipio();
        $c9->nombre ="Tlaquiltenango";
        $c9->estado_id = "17";
        $c9->save();

        $c10 = new Municipio();
        $c10->nombre ="Zacatepec";
        $c10->estado_id = "17";
        $c10->save();

        $estado18 = new Estado();
        $estado18->nombre = "Nayarit";
        $estado18->save();

        $c11 = new Municipio();
        $c11->nombre ="Acaponeta";
        $c11->estado_id = "18";
        $c11->save();

        $c12 = new Municipio();
        $c12->nombre ="San Blas";
        $c12->estado_id = "18";
        $c12->save();

        $c13 = new Municipio();
        $c13->nombre ="San Pedro Lagunillas";
        $c13->estado_id = "18";
        $c13->save();

        $c14 = new Municipio();
        $c14->nombre ="Tecuala";
        $c14->estado_id = "18";
        $c14->save();

        $c15 = new Municipio();
        $c15->nombre ="Xalisco";
        $c15->estado_id = "18";
        $c15->save();

        $estado19 = new Estado();
        $estado19->nombre = "Nuevo León";
        $estado19->save();

        $c16 = new Municipio();
        $c16->nombre ="Ciénega De Flores";
        $c16->estado_id = "19";
        $c16->save();

        $c17 = new Municipio();
        $c17->nombre ="García";
        $c17->estado_id = "19";
        $c17->save();

        $c18 = new Municipio();
        $c18->nombre ="Juárez";
        $c18->estado_id = "19";
        $c18->save();

        $c19 = new Municipio();
        $c19->nombre ="Montemorelos";
        $c19->estado_id = "19";
        $c19->save();

        $c20 = new Municipio();
        $c20->nombre ="Monterrey";
        $c20->estado_id = "19";
        $c20->save();

        $estado20 = new Estado();
        $estado20->nombre = "Oaxaca";
        $estado20->save();

        $c21 = new Municipio();
        $c21->nombre ="Ciudad Ixtepec";
        $c21->estado_id = "20";
        $c21->save();

        $c22 = new Municipio();
        $c22->nombre ="Natividad";
        $c22->estado_id = "20";
        $c22->save();

        $c23 = new Municipio();
        $c23->nombre ="Oaxaca De Juárez";
        $c23->estado_id = "20";
        $c23->save();

        $c24 = new Municipio();
        $c24->nombre ="Unión Hidalgo";
        $c24->estado_id = "20";
        $c24->save();

        $c25 = new Municipio();
        $c25->nombre ="Zimatlán De Álvarez";
        $c25->estado_id = "20";
        $c25->save();

        $estado21 = new Estado();
        $estado21->nombre = "Puebla";
        $estado21->save();

        $c26 = new Municipio();
        $c26->nombre ="Puebla";
        $c26->estado_id = "21";
        $c26->save();

        $c27 = new Municipio();
        $c27->nombre ="San Andrés Cholula";
        $c27->estado_id = "21";
        $c27->save();

        $c28 = new Municipio();
        $c28->nombre ="San Pedro Cholula";
        $c28->estado_id = "21";
        $c28->save();

        $c29 = new Municipio();
        $c29->nombre ="Tehuacán";
        $c29->estado_id = "21";
        $c29->save();

        $c30 = new Municipio();
        $c30->nombre ="Zacatlán";
        $c30->estado_id = "21";
        $c30->save();

        $estado22 = new Estado();
        $estado22->nombre = "Querétaro";
        $estado22->save();

        $c31 = new Municipio();
        $c31->nombre ="Ciudad de El Pueblito";
        $c31->estado_id = "22";
        $c31->save();

        $c32 = new Municipio();
        $c32->nombre ="Ciudad de Peña de Bernal";
        $c32->estado_id = "22";
        $c32->save();

        $c33 = new Municipio();
        $c33->nombre ="Querétaro";
        $c33->estado_id = "22";
        $c33->save();

        $c34 = new Municipio();
        $c34->nombre ="Ciudad de San Juan del Rio";
        $c34->estado_id = "22";
        $c34->save();

        $c35 = new Municipio();
        $c35->nombre ="Ciudad de Tequisquiapan";
        $c35->estado_id = "22";
        $c35->save();


        $estado23 = new Estado();
        $estado23->nombre = "Quintana Roo";
        $estado23->save();

        $lugar = new Municipio();
        $lugar->nombre ="Ciudad de Bacalar";
        $lugar->estado_id = "23";
        $lugar->save();

        $lugar2 = new Municipio();
        $lugar2->nombre ="Ciudad de Cancún";
        $lugar2->estado_id = "23";
        $lugar2->save();

        $lugar3 = new Municipio();
        $lugar3->nombre ="Ciudad de Chetumal";
        $lugar3->estado_id = "23";
        $lugar3->save();

        $lugar4 = new Municipio();
        $lugar4->nombre ="Ciudad de Cozumel";
        $lugar4->estado_id = "23";
        $lugar4->save();

        $lugar5 = new Municipio();
        $lugar5->nombre ="Ciudad de Playa del Carmen";
        $lugar5->estado_id = "23";
        $lugar5->save();

        $estado24 = new Estado();
        $estado24->nombre = "San Luis Potosí";
        $estado24->save();

        $lugar6 = new Municipio();
        $lugar6->nombre ="Ciudad de Cárdenas";
        $lugar6->estado_id = "24";
        $lugar6->save();

        $lugar7 = new Municipio();
        $lugar7->nombre ="Ciudad de Cedral";
        $lugar7->estado_id = "24";
        $lugar7->save();

        $lugar8 = new Municipio();
        $lugar8->nombre ="Ciudad de Rioverde";
        $lugar8->estado_id = "24";
        $lugar8->save();

        $lugar9 = new Municipio();
        $lugar9->nombre ="Ciudad de Salinas de Hidalgo";
        $lugar9->estado_id = "24";
        $lugar9->save();

        $lugar10 = new Municipio();
        $lugar10->nombre ="San Luis Potosí";
        $lugar10->estado_id = "24";
        $lugar10->save();


        $estado25 = new Estado();
        $estado25->nombre = "Sinaloa";
        $estado25->save();

        $luga = new Municipio();
        $luga->nombre ="Ciudad de Culiacán Rosales";
        $luga->estado_id = "25";
        $luga->save();

        $luga2 = new Municipio();
        $luga2->nombre ="Ciudad de El Fuerte";
        $luga2->estado_id = "25";
        $luga2->save();

        $luga3 = new Municipio();
        $luga3->nombre ="Ciudad de El rosario";
        $luga3->estado_id = "25";
        $luga3->save();

        $luga4 = new Municipio();
        $luga4->nombre ="Ciudad de Los Mochis";
        $luga4->estado_id = "25";
        $luga4->save();

        $luga5 = new Municipio();
        $luga5->nombre ="Ciudad de Mazatlán";
        $luga5->estado_id = "25";
        $luga5->save();

        $estado26 = new Estado();
        $estado26->nombre = "Sonora";
        $estado26->save();

        $luga6 = new Municipio();
        $luga6->nombre ="Ciudad de Agua Prieta";
        $luga6->estado_id = "26";
        $luga6->save();

        $luga7 = new Municipio();
        $luga7->nombre ="Ciudad de Ciudad Obregón";
        $luga7->estado_id = "26";
        $luga7->save();

        $luga8 = new Municipio();
        $luga8->nombre ="Ciudad de Hermosillo";
        $luga8->estado_id = "26";
        $luga8->save();

        $luga9 = new Municipio();
        $luga9->nombre ="Ciudad de San Luis Río Colorado";
        $luga9->estado_id = "26";
        $luga9->save();

        $luga10 = new Municipio();
        $luga10->nombre ="Ciudad de Sonoita";
        $luga10->estado_id = "26";
        $luga10->save();

        $estado27 = new Estado();
        $estado27->nombre = "Tabasco";
        $estado27->save();

        $luga11 = new Municipio();
        $luga11->nombre ="Ciudad de Comalcalco";
        $luga11->estado_id = "27";
        $luga11->save();

        $luga12 = new Municipio();
        $luga12->nombre ="Ciudad de Emiliano Zapata";
        $luga12->estado_id = "27";
        $luga12->save();

        $luga13 = new Municipio();
        $luga13->nombre ="Ciudad de Paraíso";
        $luga13->estado_id = "27";
        $luga13->save();

        $luga14 = new Municipio();
        $luga14->nombre ="Ciudad de Villahermosa";
        $luga14->estado_id = "27";
        $luga14->save();


        $estado28 = new Estado();
        $estado28->nombre = "Tamaulipas";
        $estado28->save();

        $luga16 = new Municipio();
        $luga16->nombre ="Ciudad de Altamira";
        $luga16->estado_id = "28";
        $luga16->save();

        $luga17 = new Municipio();
        $luga17->nombre ="Ciudad de Ciudad Camargo";
        $luga17->estado_id = "28";
        $luga17->save();

        $luga18 = new Municipio();
        $luga18->nombre ="Ciudad de Ciudad Madero";
        $luga18->estado_id = "28";
        $luga18->save();

        $luga19 = new Municipio();
        $luga19->nombre ="Ciudad de Ciudad Victoria";
        $luga19->estado_id = "28";
        $luga19->save();

        $luga20 = new Municipio();
        $luga20->nombre ="Ciudad de Reynosa";
        $luga20->estado_id = "28";
        $luga20->save();

        $estado29 = new Estado();
        $estado29->nombre = "Tlaxcala";
        $estado29->save();

        $lug = new Municipio();
        $lug->nombre ="Apizaco";
        $lug->estado_id = "29";
        $lug->save();

        $lug2 = new Municipio();
        $lug2->nombre ="Calpulalpan";
        $lug2->estado_id = "29";
        $lug2->save();

        $lug3 = new Municipio();
        $lug3->nombre ="Huamantla";
        $lug3->estado_id = "29";
        $lug3->save();

        $lug4 = new Municipio();
        $lug4->nombre ="San Pablo Del Monte";
        $lug4->estado_id = "29";
        $lug4->save();

        $lug5 = new Municipio();
        $lug5->nombre ="Tlaxcala";
        $lug5->estado_id = "29";
        $lug5->save();

        $estado30 = new Estado();
        $estado30->nombre = "Veracruz ";
        $estado30->save();

        $lug6 = new Municipio();
        $lug6->nombre ="Coatzacoalcos";
        $lug6->estado_id = "30";
        $lug6->save();

        $lug7 = new Municipio();
        $lug7->nombre ="Córdoba";
        $lug7->estado_id = "30";
        $lug7->save();

        $lug8 = new Municipio();
        $lug8->nombre ="Orizaba";
        $lug8->estado_id = "30";
        $lug8->save();

        $lug9 = new Municipio();
        $lug9->nombre ="San Andrés Tuxtla";
        $lug9->estado_id = "30";
        $lug9->save();

        $lug10 = new Municipio();
        $lug10->nombre ="Veracruz";
        $lug10->estado_id = "30";
        $lug10->save();

        $estado31 = new Estado();
        $estado31->nombre = "Yucatán ";
        $estado31->save();

        $lug11 = new Municipio();
        $lug11->nombre ="Mérida";
        $lug11->estado_id = "31";
        $lug11->save();

        $lug12 = new Municipio();
        $lug12->nombre ="Ticul";
        $lug12->estado_id = "31";
        $lug12->save();

        $lug13 = new Municipio();
        $lug13->nombre ="Tizimín";
        $lug13->estado_id = "31";
        $lug13->save();

        $lug14 = new Municipio();
        $lug14->nombre ="Valladolid";
        $lug14->estado_id = "31";
        $lug14->save();


        $estado32 = new Estado();
        $estado32->nombre = "Zacatecas";
        $estado32->save();

        $lug16 = new Municipio();
        $lug16->nombre ="Ciudad Cuauhtémoc";
        $lug16->estado_id = "32";
        $lug16->save();

        $lug17 = new Municipio();
        $lug17->nombre ="Río Grande";
        $lug17->estado_id = "32";
        $lug17->save();

        $lug18 = new Municipio();
        $lug18->nombre ="Villanueva";
        $lug18->estado_id = "32";
        $lug18->save();

        $lug19 = new Municipio();
        $lug19->nombre ="Zacatecas";
        $lug19->estado_id = "32";
        $lug19->save();
    }
        
    
}

