<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrimensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crimens', function (Blueprint $table) {
            $table->id();
            $table->string('delito');
            $table->timestamps();
        });

            DB::table("crimens")->insert([
                'delito' => 'CRIMEN DE LESA HUMANIDAD',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'DESAPARICIÓN FORZADA DE PERSONAS',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'DESAPARICIÓN FORZADA DE PERSONAS AGRAVADA',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'DESAPARICIÓN FORZADA DE PERSONAS ATENUADA',    
            ]);
            DB::table("crimens")->insert([
                'delito' => 'GENOCIDIO',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'INFRACCIONES GRAVES A LOS CONVENIOS DE GINEBRA',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'USO DE ESCUDOS HUMANOS',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'MEDIOS Y MÉTODOS PROHIBIDOS DE GUERRA',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'ATAQUE A POBLACIÓN CIVIL, BIENES E INSTALACIONES PROTEGIDAS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'SIMULACIÓN DE SIGNOS DE PROTECCIÓN',   
            ]);
            DB::table("crimens")->insert([
                'delito' => 'EXPERIMENTOS',     
            ]);
            DB::table("crimens")->insert([
                'delito' => 'ATAQUE Y OBSTRUCCIÓN DE AUXILIO HUMANITARIO',    
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PERSONA CON DERECHO A PROTECCIÓN INTERNACIONAL',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'CRIMEN DE AGRESIÓN.',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'RESPONSABILIDAD DE LOS JEFES Y OTROS SUPERIORES',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'RESPONSABILIDAD POR ACTOS COMETIDOS CON IMPRUDENCIA GRAVE',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PUNICIÓN DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PUNICIÓN DE ACTOS PREPARATORIOS',   
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PROHIBICIÓN DE APLICACIÓN DE CAUSA DE JUSTIFICACIÓN',     
            ]);
            DB::table("crimens")->insert([
                'delito' => 'VIOLACIÓN DE INMUNIDAD DIPLOMÁTICA',     
            ]);
            DB::table("crimens")->insert([
                'delito' => 'MUERTE O LESIONES A PERSONAS NTERNACIONALMENTE PROTEGIDA',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'ARMAS O MEDIOS DE DESTRUCCIÓN MASIVA',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PIRATERÍA',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'RESISTENCIA O DESOBEDIENCIA AL APRESAMIENTO',    
            ]);
            DB::table("crimens")->insert([
                'delito' => 'APODERAMIENTO Y DESVÍO DE NAVES, AERONAVES O MEDIOS DE TRANSPORTE COLECTIVO AÉREO',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'TRÁFICO ILEGAL DE ÓRGANOS HUMANOS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'TRÁFICO ILEGAL DE ÓRGANOS HUMANOS AGRAVADO',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'RESPONSABILIDAD DE FUNCIONARIOS O EMPLEADOS PÚBLICOS',      
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PUNIBILIDAD DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'COLABORACIÓN CON LAS AUTORIDADES',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'RESPONSABILIDAD DE LA PERSONA JURÍDICA',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'JURISDICCIÓN UNVERSAL Y REINCIDENCIA INTERNACIONAL',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'MANIPULACIÓN GENÉTICA',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'MANIPULACIÓN GENÉTICA AGRAVADA',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'CLONACIÓN',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PENALIZACIÓN DE LA IMPRUDENCIA',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'INHABILITACIÓN PARA EL PROFESIONAL DE LA SALUD',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PERTURBACIÓN DE INSTALACIONES CON ALTO RIESGO DE RADIACIÓN',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'CONTAMINACIÓN RADIACTIVA',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'APODERAMIENTO DE MATERIALES NUCLEARES O FUENTES RADIACTIVAS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'OCULTACIÓN DE INFORMACIÓN',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'RESPONSA BILIDAD DEL FUNCIONARIO O EMPLEADO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'INCENDIO',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'INCENDIO CUALIFICADO',       
                ]);
            DB::table("crimens")->insert([
                'delito' => 'ESTRAGOS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'DESTRUCCIÓN O INUTILIZACIÓN DE INSTALACIONES CONTRA DESASTRES',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'OBSTRUCCIÓN DE LAS TAREAS DE DEFENSA',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'INCENDIOS Y ESTRAGOS IMPRUDENTES',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PUESTA EN PELIG RO DEL TRANSPORTE PÚBLICO E INFRAESTRUCTUR',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PUESTA EN PELIGRO IMPRUDENTE DELTRANSPORTE PÚBLICO E INFRAESTRUCTURA',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PUNIBILIDAD DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'HOMICIDIO',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'ASESINATO',       
                ]);
            DB::table("crimens")->insert([
                'delito' => 'PARRICIDIO',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'PUNIBILIDAD DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'ABORTO',       
                ]);
            DB::table("crimens")->insert([
                'delito' => 'INDUCCIÓN Y AUXILIO AL SUICIDIO',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'HOMICIDIO IMPRUDENTE',       
                ]);
            DB::table("crimens")->insert([
                'delito' => 'LESIONES',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'TIPOS AGRAVADOS DE LESIONES',       
                ]);
            DB::table("crimens")->insert([
                'delito' => 'LESIONES GRAVES',       
            ]);
            DB::table("crimens")->insert([
                'delito' => 'LESIONES IMPRUDENTES',       
                ]);
            DB::table("crimens")->insert([
                'delito' => 'LESIONES AL FETO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OMISIÓN DEL DEBER DE SOCORRO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OMISIÓN DEL DEBER DE SOCORRO A PERSONAS ESPECIALMENTE VULNERABLES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OMISIÓN DE PRESTACIÓN DE ASISTENCIA SANITARIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OMISIÓN DE LOS DEBERES DE IMPEDIR DELITOS O DE PROMOVER SU PERSECUCIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FEMICIDIO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'VIOLENCIA CONTRA LA MUJER',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DISPOSICIÓN COMÚN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DENEGACIÓN DE PRESTACIÓN DE UN SERVICIO PÚBLICO POR DISCRIMINACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DENEGACIÓN DE PRESTACIÓN EN EL EJERCICIO DE ACTIVIDADES PROFESIONALES O EMPRESARIALES POR RAZÓN ES DE DISCRIMINACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INCITACIÓN A LA DISCRIMINACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRATO DEGRADANTE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AMENAZA PARA OBTENER CONFESIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TORTURA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRATOS CRUELES, INHUMANOS O DEGRADANTES POR FUNCIONARIO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONCURSOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRATA DE PERSONAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPLOTACIÓN EN CONDICIONES DE ESCLAVITUD O SERVIDUMBRE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPLOTACIÓN DE LA MENDICIDAD',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INSEMINACIÓN ARTIFICIAL Y OTRAS TÉCNICAS DE REPRODUCCIÓN ASISTIDA NO CONSENTIDAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPERIMENTACIÓN SIN CONSENTIMIENTO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONCURSOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'REINCIDENCIA INTERNACIONAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ABANDONO DE MENORES DE EDAD PERSONAS CON DISCAPACIDAD, ANCIANOS O ENFERMOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INJURIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CALUMNIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INJURIAS Y CALUMNIAS SOBRE INSTITUCIÓN SUPERVISADA. INJURIA Y CALUMNIA INDIRECTA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONCEPTO DE PUBLCIDAD. CIRCUNSTANCIAS ESPECIALES DE GRADUACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PRIVACIÓN ILEGAL DE LIBERTAD',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PRIVACIÓN ILEGAL DE LIBERTAD AGRAVADA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PRIVACIÓN ILEGAL DE LIBERTAD ATENUADA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PRIVACIÓN ILEGAL DE LIBERTAD REALIZADA POR FUNCIONARIO O EMPLEADO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SECUESTRO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SECUESTRO AGRAVADO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SECUESTRO ATENUADO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SECUESTRO REALIZADO POR FUNCIONARIO O EMPLEADO PÚBLICO NACIONAL O EXTRANJERO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNIBILIDAD DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COACCIONES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AMENAZAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CHANTAJE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESPLAZAMIENTO FORZADO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'VIOLACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OTRAS AGRESIONES SEXUALES ( CONOCIDO COMO ACTOS DE LUJURIA)',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONSENTIMIENTO DEL SUJETO PASIVO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INCESTO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONTACTO CON FINALIDAD SEXUAL CON MENORES POR MEDIOS ELECTRÓNICOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ESTUPRO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'HOSTIGAMIENTO SEXUAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPLOTACIÓN SEXUAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPLOTACIÓN SEXUAL FORZADA DE MAYORES DE EDAD',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPLOTACIÓN SEXUAL DE MENORES O PERSONAS CON DISCAPACIDAD',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ELABORACIÓN Y UTILIZACIÓN DE PORNOGRAFÍA INFANTIL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXHIBICIONISMO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PROVOCACIÓN SEXUAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ERROR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ALLANAMIENTO DE DOMICILIO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ALLANAMIENTO POR FUNCIONARIO O EMPLEADO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESCUBRIMIENTO Y REVELACIÓN DE SECRETOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DEL FUNCIONARIO O EMPLEADO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'REVELACIÓN DE SECRETO PROFESIONAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DISPOSICIONES COMUNES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'BIGAMIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CELEBRACIÓN DE MATRIMONIO INVÁLIDO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AUTORIZACIÓN DE MATRIMONIO INVÁLIDO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SUPOSICIÓN DE PARTO Y OCULTACIÓN O SUSTITUCIÓN DE MENOR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ADOPCIÓN, ACOGIDA O GUARDA FRAUDULENTA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DISPOSICIONES COMUNES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'NO PRESENTACIÓN O ENTREGA DE MENORES O PERSONAS CON DISCAPACIDAD',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INDUCCIÓN AL ABANDONO DE HOGAR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SUSTRACCIÓN DE MENORES O DISCAPACITADOS NECESITADOS DE ESPECIAL PROTECCIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTE ESPECÍFICA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INCUMPLIMIENTO DEL DEBER DE ASISTENCIA Y SUSTENTO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'MALTRATO FAMILIAR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITO CONTRA LA SEGURIDAD DE LOS TRABAJADORES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPLOTACIÓN LABORAL ILÍCITA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPLOTACIÓN LABORAL INFANTIL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ACOSO LABORAL VERTICAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITO DE DISCRIMINACIÓN LABORAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO ILÍCITO DE PERSONAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ELABORACIÓN Y COMERCIO ILEGAL DE MEDICAMENTOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'IMITACIÓN DE ALIMENTOS, PRODUCTOS O SUSTANCIAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITO DE DOPAJE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ELABORACIÓN NO AUTORIZADA DE SUSTANCIAS NOCIVAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESPACHO O SUMINISTRO ILEGALES DE SUSTANCIAS NOCIVAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSIFICACIÓN DE DOCUMENTACIÓN PRECEPTIVA EN LA COMERCIALIZACIÓN DE MEDICAMENTOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ADULTERACIÓN DE AGUA POTABLE Y ALIMENTOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SUMINISTRACIÓN PELIGROSA DE SUSTANCIAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PROPAGACIÓN DE EPIDEMIAS Y DE ENFERMEDADES INFECTO-CONTAGIOSAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITO IMPRUDENTE CONTRA A SALUD PÚBLICA Y AGRAVANTE ESPECIAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO DE DROGAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS DEL TRÁFICO DE DROGAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS DE TRÁFICO DE DROGAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO DE PRECURSORES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS DEL TRÁFICO DE PRECURSORES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS DEL TRÁFICO DE PRECURSORES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNIBILIDAD DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PENAS PRIVATIVAS DE DERECHOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONDUCCIÓN TEMERARIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONTAMINACIÓN DEL AIRE, LAS AGUAS O LOS SUELOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPLOTACIÓN ILEGAL DE RECURSOS NATURALES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'MANEJO ILEGAL DE DESECHOS PELIGROSOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INCENDIO FORESTAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INTRODUCCIÓN DE ESPECIES EXÓTICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PROPAGACIÓN DE PLAGAS O ENFERMEDADES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DAÑOS A ESPECIES AMENAZADAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CAPTURA ILEGAL DE ESPECÍMENES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS DE LOS DELITOS CONTRA LA DIVERSIDAD BIOLÓGICA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES COMUNES A LOS DELITOS CONTRA EL MEDIO AMBIENTE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PRIVACIONES DE DERECHOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITO AMBIENTAL IMPRUDENTE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE FUNCIONARIO O EMPLEADO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'MALTRATO DE ANIMALES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ABANDONO DE ANIMALES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'URBANIZACIÓN ILEGAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'APROBACIÓN IRREGULAR POR PARTE DE FUNCIONARIO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DEL FUNCIONARIO PÚBLICO POR OMISIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO ILÍCITO DE BIENES DEL PATRIMONIO CULTURAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ALTERACIÓN DE INMUEBLES PERTENECIENTES AL PATRIMONIO CULTURAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXPOLIO DE ZONAS ARQUEOLÓGICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DEL FUNCIONARIO O EMPLEADO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'HURTO SIMPLE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'HURTO DE GANADO O COSECHAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'HURTO DE POSESIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ROBO CON FUERZA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ROBO CON VIOLENCIA O INTIMIDACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ROBO DE GANADO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'HURTO Y ROBO DE USO DE VEHÍCULO AUTOMOTOR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ESTAFA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ESTAFAS IMPROPIAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DEFRAUDACIONES DE ENERGÍA, FLUIDOS Y TELECOMUNICACIONES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ADMINISTRACIÓN FRAUDULENTA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'APROPIACIÓN Y RETENCIÓN INDEBIDAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'APROPIACIÓN IRREGULAR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXTORSIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICIÓN DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USURPACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ALTERACIÓN DE TÉRMINOS O LÍMITES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USURPACIÓN DE AGUAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DAÑOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DAÑOS AGRAVADOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DAÑOS A INFRAESTRUCTURAS O EQUIPAMIENTOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DAÑOS IMPRUDENTES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USURA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LOTERÍAS Y JUEGOS NO AUTORIZADOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITOS CONTRA EL DERECHO DE AUTOR Y LOS DERECHOS CONEXO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DISFRUTE ILÍCITO DE SERVICIOS DE ACCESO CONDICIONAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ELUSIÓN DE MEDIDAS TECNOLÓGICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USO ILEGÍTIMO DE PATENTE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USO ILEGÍTIMO DE DISTINTIVOS O MARCAS REGISTRADAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESCUBRIMIENTO Y REVELACIÓN DE SECRETO INDUSTRIAL O COMERCIAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ACCESO NO AUTORIZADO A SISTEMAS INFORMÁTICOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DAÑOS A DATOS Y SISTEMAS INFORMÁTICOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ABUSO DE DISPOSITIVOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SUPLANTACIÓN DE IDENTIDAD',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CIRCUNSTANCIAS AGRAVANTES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITO DE QUIEBRA FRAUDULENTA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ALZAMIENTO DE BIENES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INSOLVENCIA FRAUDULENTA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LIQUIDACIÓN FORZOSA DE INSTITUCIONES FINANCIERAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DETRACCIÓN DE MATERIAS PRIMAS U OTROS PRODUCTOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DIFUSIÓN DE NOTICIAS O RUMORES FALSOS Y ABUSO DE INFORMACIÓN PRIVILEGIADA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGIOTAJE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ACUERDOS Y PRÁCTICAS RESTRICTIVAS DE LA COMPETENCIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OBSTACULIZACIÓN DE PROCESOS DE LICITACIÓN O SUBASTAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CORRUPCIÓN EN LOS NEGOCIOS ENTRE PARTICULARES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CORRUPCIÓN EN EL DEPORTE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICIÓN DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSEDAD DE CUENTAS, INFORMACIÓN FINANCIERA U OTROS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'GESTIÓN ABUSIVA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OBTENCIÓN DE ACUERDO MEDIANTE MAYORÍA FICTICIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'NEGATIVA O IMPEDIMENTO DEL CONTROL DE ENTIDADES SUPERVISORAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONTRABANDO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PENALIDAD DEL DELITO DE CONTRABANDO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DEFRAUDACIÓN FISCAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FRAUDE DE SUBVENCIONES Y AYUDAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITO CONTABLE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FRAUDE A LA SEGURIDAD SOCIAL O AL SISTEMA DE PENSIONES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'APROPIACIÓN INDEBIDA DE CUOTAS O APORTACIONES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RECEPTACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LAVADO DE ACTIVOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LAVADO DE ACTIVOS IMPRUDENTE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICIÓN DE ACTOS PREPARATORIOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TESTAFERRATO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INFIDENCIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSIFICACIÓN DE MONEDAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO DE MONEDAS FALSAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TENENCIA DE MONEDA FALSA PARA SU PUESTA EN CIRCULACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FABRICACIÓN O TENENCIA DE INSTRUMENTOS PARA LA FALSIFICACIÓN DE MONEDA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPEÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSIFICACIÓN DE SELLOS Y OTROS EFECTOS TIMBRADOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO DE SELLOS Y OTROS EFECTOS TIMBRADOS FALSOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSIFICACIÓN DE DOCUMENTOS PÚBLICOS Y MERCANTILES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE MINISTROS RELIGIOSOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE FUNCIONARIO O EMPLEADO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USO DE DOCUMENTO FALSO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO DE DOCUMENTOS DE IDENTIDAD FALSOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSIFICACIÓN DE DOCUMENTOS PRIVADOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USO DE DOCUMENTOS PRIVADOS FALSOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSIFICACIÓN DE TARJETAS BANCARIAS Y CHEQUES DE VIAJE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO DE TARJETAS BANCARIAS O CHEQUES DE VIAJE FALSOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TENENCIA DE TARJETAS BANCARIAS O CHEQUE DE VIAJE FALSOS PARA SU PUESTA EN CIRCULACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FABRICACIÓN O TENENCIA DE INSTRUMENTOS PARA LA FALSIFICACIÓN DE TARJETAS BANCARIAS Y CHEQUES DE VIAJE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSEDAD EN INSTRUMENTOS FINANCIEROS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USURPACIÓN DE LA PERSONALIDAD DE OTRO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USURPACIÓN DE FUNCIONES PÚBLICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INTRUSISMO PROFESIONAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USO INDEBIDO DE UNIFORME, INSIGNIAS Y EQUIPO POLICIAL O MILITAR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'MALVERSACIÓN POR APROPIACIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'MALVERSACIÓN POR USO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'MALVERSACIÓN POR APLICACIÓN OFICIAL DIFERENTE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ADMINISTRACIÓN DESLEAL DEL PATRIMONIO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'MALVERSACIÓN IMPRUDENTE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FRAUDE',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'EXACCIONES ILEGALES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ENRIQUECIMIENTO ILÍCITO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'NEGOCIACIONES INCOMPATIBLES DE FUNCIONARIO O EMPLEADO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'NEGOCIACIONES INCOMPATIBLES DE PERITO, ÁRBITRO Y CONTADORES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ASESORAMIENTO ILEGAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USO DE INFORMACIÓN PRIVILEGIADA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SOLICITUD DE ACTOS DE CONTENIDO SEXUAL',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO DE INFLUENCIAS COMETIDO POR FUNCIONARIO PÚBLICO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRÁFICO DE INFLUENCIAS COMETIDO POR PARTICULAR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COHECHO PROPIO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COHECHO IMPROPIO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COHECHO POSTERIOR AL ACTO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COHECHO POR CONSIDERACIÓN AL CARGO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COHECHO COMETIDO POR PARTICULAR',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONCUSIÓN',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PREVARICATO ADMINISTRATIVO',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ABUSO DE AUTORIDAD',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ANTICIPACIÓN , PROLONGACIÓN Y ABANDONO DE FUNIONES PÚBLICAS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SUSTRACCIÓN, DESTRUCCIÓN, OCULTACIÓN O INUTILIZACIÓN DE DOCUMENTO EN CUSTODIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FACILITAR DESTRUCCIÓN DE DOCUMENTO EN CUSTODIA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ACCESO A DOCUMENTOS SECRETOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LOS PARTICULARES',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'REVELACIÓN DE SECRETOS',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'APROVECHAMIENTO DE SECRETO O INFORMACIÓN PRIVILEGIADA',       
            ]);
            DB::table("crimens")->insert([
            'delito' => 'USURPACIÓN DE FUNCIONES Y SIMULACIÓN DE CARGO POR PARTICULAR',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PENAS ESPECÍFICAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICIÓN DE ACTOS PREPARATORIOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COLABORACIÓN EFICAZ CON LAS AUTORIDADES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILDAD DE LAS PERSONAS JURÍDICAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ENCUBRIMIENTO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OMISIÓN DEL DEBER DE PERSEGUIR DELITOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PREVARICATO JUDICIAL',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DENEGACIÓN DE JUSTICIA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'REALIZACIÓN ARBITRARIA DEL PROPIO DERECHO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSO TESTIMONIO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INTIMIDACIÓN A TESTIGOS Y OTROS INTERVINIENTES EN EL PROCESO PENAL',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'REVELACIÓN DE IDENTIDAD DE TESTIGO PROTEGIDO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITO DE FALTA DE REGISTRO DE CLIENTES Y SU IDENTIFICACIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COACCIÓN JUDICIAL',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COHECHO A SUJETOS PROCESALES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESOBEDIENCIA A MANDATO FISCAL O JUDICIAL',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'QUEBRANTAMIENTO DE CONDENA O MEDIDA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FAVORECIMIENTO DE LA EVASIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSA DENUNCIA O ACUSACIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SIMULACIÓN DE INFRACCIÓN INEXISTENTE',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESLEALTAD PROFESIONAL',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITOS CONTRA LA ADMINISTRACIÓN DE JUSTICIA DE LA CORTE PENAL INTERNACIONAL',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'REBELIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICÍON DE ACTOS PREPARATORIOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INFRACCIÓN DEL DEBER DE RESISTENCIA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SEDICIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICIÓN DE ACTOS PREPARATORIOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DISPOSICIONES COMUNES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ULTRAJE A LOS SÍMBOLOS NACIONALES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'MUERTE, LESIONES O SECUESTRO DEL PRESIDENTE DE LA REPÚBLICA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICÍON DE ACTOS PREPARATORIOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PERTURBACIÓN ILÍCITA DEL FUNCIONAMIENTO DE LAS INSTITUCIONES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COACCIÓN Y AMENAZA ELECTORAL',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALSIFICACIÓN DE DOCUMENTOS ELECTORALES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OTROS DELITOS ELECTORALES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PENA ADICIONAL A LOS EXTRANJEROS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SUPLANTACIÓN DE IDENTIDAD HONDUREÑA PARA EJERCER SUFRAGIO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESTRUCCIÓN DE PROPAGANDA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LIMITACIÓN O IMPEDIMENTO DE DETERMINADOS DERECHOS FUNDAMENTALES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'IMPEDIMENTO DEL EJERCICIO DE OTROS DERECHOS RECONOCIDOS EN LA CONSTITUCIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OBSTACULIZACIÓN DEL EJERCICIO DE LA LIBERTAD RELIGIOSA Y SUS MANIFESTACIONES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'OFENSAS A LOS SENTIMIENTOS RELIGIOSOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'VIOLACIÓN DE SEPULTURAS Y PROFANACIÓN DE CADÁVERES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'REUNIONES Y MANIFESTACIONES ILÍCITAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ASOCIACIÓN PARA DELINQUIR',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TRAICIÓN A LA PATRIA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INDUCCIÓN A ACTOS DE AGRESIÓN CONTRA LA NACIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATAQUE A SEÑALES FRONTERIZAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LEVANTAMIENTO ILEGAL DE PLANOS DE FORTIFICACIONES U OTRAS OBRAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DECLARATORIA ILEGAL DE GUERRA O DE PAZ',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITOS QUE COMPROMETEN LA NEUTRALIDAD',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICÍON DE ACTOS PREPARATORIOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PENA DE PÉRDIDA DE LA CIUDADANÍA Y NACIONALIDAD',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ESPIONAJE',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INCITACIÓN A LA GUERRA O A LA REPRESALIA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RECLUTAMIENTO DE TROPAS, UTILIZACIÓN DEL TERRITORIO NACIONAL Y RECLUTAMIENTO DE MERCENARIOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'VIOLACIÓN DE TREGUA O PACTO, SALVOCONDUCTO O TRATADO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'INCUMPLIMIENTO DE CONTRATOS RELATIVOS A LA SEGURIDAD DE LA NACIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'SABOTAJE',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENTADO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICIÓN DE ACTOS PREPARATORIOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESOBEDIENCIA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESÓRDENES PÚBLICOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PERTURBACIÓN DEL ORDEN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DISPARO DE ARMA DE FUEGO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'IMPEDIMENTO DE TRÁNSITO A EQUIPOS DE SOCORRO O A CENTROS DE ASISTENCIA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ABUSO DE LLAMADAS DE EMERGENCIA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONSTRUCCIÓN O FACILITACIÓN DE PISTAS DE ATERRIZAJE',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'NTRODUCCIÓN DE OBJETOS PROHIBIDOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'TENENCIA O PORTE ILEGAL DE ARMAS DE FUEGO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DEPÓSITO DE ARMAS DE FUEGO, MUNICIONES O EXPLOSIVOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FABRICACIÓN Y TRÁFICO ILÍCITO DE ARMAS, MUNICIONES O EXPLOSIVOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FACILITACIÓN DE ARMAS A TERCEROS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AGRAVANTES ESPECÍFICAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ASOCIACIÓN TERRORISTA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'COLABORACIÓN SIN PERTENENCIA A LA ASOCIACIÓN TERRORISTA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DELITOS DE TERRORISMO EN PARTICULAR',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ATENUANTES ESPECÍFICAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ASISTENCIA A CAMPOS DE ENTRENAMIENTO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CIBERTERRORISMO O TERRORISMO ELECTRÓNICO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PUNICÍON DE ACTOS PREPARATORIOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'PENAS PRIVATIVAS DE DERECHOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'RESPONSABILIDAD DE LAS PERSONAS JURÍDICAS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LESIONES POR IMPRUDENCIA LEVE',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LESIONES LEVES Y MALTRATO DE OBRA',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'AMENAZAS, COACCIONES, INJURIAS Y VEJACIONES LEVES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALTAS DE APODERAMIENTO, DEFRAUDACIÓN Y APROPIACIÓN',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'FALTA DE DAÑOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ENTRADA EN HEREDAD O CAMPO AJENOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'CONTRABANDO NO CONSTITUTIVO DE DELITO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'QUEMA DE DESECHOS O PRODUCTOS VEGETALES',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'BANDONO DE OBJETOS PELIGROSOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'LIBERACIÓN DE ANIMALES FEROCES O DAÑINOS',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'ALTERACIÓN DEL ORDEN PÚBLICO',
            ]);
            DB::table("crimens")->insert([
            'delito' => 'DESOBEDIENCIA LEVE',
            ]);

    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crimens');
    }
}
