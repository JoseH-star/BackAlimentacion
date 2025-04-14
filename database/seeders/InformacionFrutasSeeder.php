<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformacionFrutasSeeder extends Seeder
{
    public function run()
    {
        DB::table('informacion_frutas')->insert([
            [
                'fruta' => 'Manzana',
                'imagen' => 'manzana.jpg',
                'descripcion' => 'Fruta dulce y crujiente, popular en muchas culturas.',
                'clasificacion' => 'Poma',
                'peso_promedio' => '150g',
                'color' => 'Rojo, Verde, Amarillo',
                'usos' => 'Comer cruda, postres, jugos, sidra',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Banana',
                'imagen' => 'banana.jpg',
                'descripcion' => 'Fruta tropical dulce, rica en potasio.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '120g',
                'color' => 'Amarillo',
                'usos' => 'Batidos, snacks, repostería',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Naranja',
                'imagen' => 'naranja.jpg',
                'descripcion' => 'Cítrico jugoso y refrescante, fuente de vitamina C.',
                'clasificacion' => 'Cítrico',
                'peso_promedio' => '130g',
                'color' => 'Naranja',
                'usos' => 'Jugos, comer fresca, mermeladas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Fresa',
                'imagen' => 'fresa.jpg',
                'descripcion' => 'Fruta pequeña y dulce, de sabor intenso.',
                'clasificacion' => 'Falso fruto',
                'peso_promedio' => '15g',
                'color' => 'Rojo con semillas exteriores',
                'usos' => 'Postres, batidos, ensaladas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Piña',
                'imagen' => 'pina.jpg',
                'descripcion' => 'Fruta tropical con sabor ácido y dulce.',
                'clasificacion' => 'Múltiple',
                'peso_promedio' => '900g - 2kg',
                'color' => 'Amarillo (interior), marrón/verde (exterior)',
                'usos' => 'Jugos, cocina, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Sandía',
                'imagen' => 'sandia.jpg',
                'descripcion' => 'Fruta grande y refrescante, ideal para el verano.',
                'clasificacion' => 'Pepónide',
                'peso_promedio' => '4kg - 10kg',
                'color' => 'Verde (exterior), rojo (interior)',
                'usos' => 'Comer fresca, jugos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Uva',
                'imagen' => 'uva.jpg',
                'descripcion' => 'Fruta pequeña que crece en racimos.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '5g por uva',
                'color' => 'Verde, morado, negro',
                'usos' => 'Vino, jugos, pasas, comer fresca',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Mango',
                'imagen' => 'mango.jpg',
                'descripcion' => 'Fruta tropical jugosa con aroma y sabor intensos.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '200g - 500g',
                'color' => 'Amarillo, naranja, rojo',
                'usos' => 'Jugos, salsas, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Papaya',
                'imagen' => 'papaya.jpg',
                'descripcion' => 'Fruta tropical con textura suave y sabor dulce.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '500g - 2kg',
                'color' => 'Naranja',
                'usos' => 'Jugos, desayunos, remedios digestivos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Kiwi',
                'imagen' => 'kiwi.jpg',
                'descripcion' => 'Fruta pequeña con pulpa verde y sabor ácido-dulce.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '75g',
                'color' => 'Verde (interior), marrón (exterior)',
                'usos' => 'Jugos, ensaladas, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Granada',
                'imagen' => 'granada.jpg',
                'descripcion' => 'Fruta con numerosas semillas jugosas y dulces en su interior.',
                'clasificacion' => 'Balausta',
                'peso_promedio' => '200g - 300g',
                'color' => 'Rojo intenso',
                'usos' => 'Jugos, ensaladas, decoración de platos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Guayaba',
                'imagen' => 'guayaba.jpg',
                'descripcion' => 'Fruta tropical aromática con pulpa rosa o blanca.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '150g',
                'color' => 'Verde o amarilla por fuera, rosa o blanca por dentro',
                'usos' => 'Jugos, dulces, mermeladas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Coco',
                'imagen' => 'coco.jpg',
                'descripcion' => 'Fruto tropical duro con agua y pulpa blanca comestible.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '1kg - 2kg',
                'color' => 'Marrón (exterior), blanco (interior)',
                'usos' => 'Agua de coco, repostería, aceite',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Tamarindo',
                'imagen' => 'tamarindo.jpg',
                'descripcion' => 'Fruta agridulce usada en bebidas y salsas.',
                'clasificacion' => 'Legumbre',
                'peso_promedio' => '20g por vaina',
                'color' => 'Marrón',
                'usos' => 'Salsas, bebidas, dulces',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Maracuyá',
                'imagen' => 'maracuya.jpg',
                'descripcion' => 'Fruta tropical con pulpa aromática y sabor ácido.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '80g - 100g',
                'color' => 'Amarillo o morado',
                'usos' => 'Jugos, postres, salsas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Carambola',
                'imagen' => 'carambola.jpg',
                'descripcion' => 'Fruta amarilla en forma de estrella al cortarla.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '70g - 130g',
                'color' => 'Amarillo',
                'usos' => 'Jugos, decoración, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Litchi',
                'imagen' => 'litchi.jpg',
                'descripcion' => 'Fruta pequeña con pulpa blanca dulce y jugosa.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '20g',
                'color' => 'Rojo por fuera, blanco por dentro',
                'usos' => 'Postres, cócteles, fresca',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Higo',
                'imagen' => 'higo.jpg',
                'descripcion' => 'Fruta suave y dulce con muchas semillas pequeñas.',
                'clasificacion' => 'Sicono',
                'peso_promedio' => '50g',
                'color' => 'Violeta, verde',
                'usos' => 'Frescos, secos, en repostería',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Chirimoya',
                'imagen' => 'chirimoya.jpg',
                'descripcion' => 'Fruta cremosa con sabor entre piña y plátano.',
                'clasificacion' => 'Compuesta',
                'peso_promedio' => '300g - 500g',
                'color' => 'Verde con escamas',
                'usos' => 'Postres, jugos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Durazno',
                'imagen' => 'durazno.jpg',
                'descripcion' => 'Fruta suave y dulce con piel aterciopelada.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '150g',
                'color' => 'Amarillo, naranja con rojo',
                'usos' => 'Jugos, mermeladas, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Pera',
                'imagen' => 'pera.jpg',
                'descripcion' => 'Fruta jugosa de forma característica.',
                'clasificacion' => 'Poma',
                'peso_promedio' => '160g',
                'color' => 'Verde, amarilla',
                'usos' => 'Fresca, cocida, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Ciruela',
                'imagen' => 'ciruela.jpg',
                'descripcion' => 'Fruta pequeña y jugosa, dulce o ácida.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '60g',
                'color' => 'Rojo, morado, amarillo',
                'usos' => 'Fresca, en compotas, deshidratada',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Frambuesa',
                'imagen' => 'frambuesa.jpg',
                'descripcion' => 'Fruta pequeña y ácida compuesta por muchas drupas.',
                'clasificacion' => 'Agregado de drupas',
                'peso_promedio' => '4g',
                'color' => 'Rojo, negro',
                'usos' => 'Postres, jugos, repostería',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Mora',
                'imagen' => 'mora.jpg',
                'descripcion' => 'Fruta oscura, dulce y jugosa.',
                'clasificacion' => 'Agregado de drupas',
                'peso_promedio' => '5g',
                'color' => 'Negro, morado',
                'usos' => 'Jugos, postres, mermeladas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Mandarina',
                'imagen' => 'mandarina.jpg',
                'descripcion' => 'Fruta cítrica pequeña, fácil de pelar.',
                'clasificacion' => 'Cítrico',
                'peso_promedio' => '100g',
                'color' => 'Naranja',
                'usos' => 'Jugos, fresca, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Arándano',
                'imagen' => 'arandano.jpg',
                'descripcion' => 'Fruta pequeña azul con alto contenido antioxidante.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '2g',
                'color' => 'Azul oscuro',
                'usos' => 'Jugos, postres, salud',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Melón',
                'imagen' => 'melon.jpg',
                'descripcion' => 'Fruta refrescante y dulce con pulpa jugosa.',
                'clasificacion' => 'Pepónide',
                'peso_promedio' => '1.5kg - 3kg',
                'color' => 'Amarillo o verde (exterior), naranja o verde (interior)',
                'usos' => 'Jugos, fresca, ensaladas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Zapote',
                'imagen' => 'zapote.jpg',
                'descripcion' => 'Fruta tropical dulce con pulpa anaranjada o marrón.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '300g',
                'color' => 'Marrón exterior, naranja interior',
                'usos' => 'Jugos, fresca, dulces',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Pitahaya',
                'imagen' => 'pitahaya.jpg',
                'descripcion' => 'Fruta del cactus con apariencia exótica.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '300g',
                'color' => 'Rosa, rojo o amarillo por fuera; blanco o rojo por dentro',
                'usos' => 'Jugos, smoothies, fresca',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Cereza',
                'imagen' => 'cereza.jpg',
                'descripcion' => 'Fruta pequeña, dulce o ácida, muy usada en postres.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '5g',
                'color' => 'Rojo oscuro',
                'usos' => 'Postres, decoración, cócteles',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Acerola',
                'imagen' => 'acerola.jpg',
                'descripcion' => 'Fruta rica en vitamina C, similar a una cereza.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '5g',
                'color' => 'Rojo brillante',
                'usos' => 'Jugos, suplementos, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Camu camu',
                'imagen' => 'camu_camu.jpg',
                'descripcion' => 'Fruta amazónica con uno de los mayores contenidos de vitamina C.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '2g - 5g',
                'color' => 'Rojo oscuro o púrpura',
                'usos' => 'Jugos, suplementos, smoothies',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Jaca',
                'imagen' => 'jaca.jpg',
                'descripcion' => 'Fruta tropical gigante, con sabor dulce y textura fibrosa.',
                'clasificacion' => 'Fruta compuesta',
                'peso_promedio' => '5kg - 15kg',
                'color' => 'Verde por fuera, amarillo por dentro',
                'usos' => 'Cocina vegana, jugos, fresca',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Mangostán',
                'imagen' => 'mangostan.jpg',
                'descripcion' => 'Fruta exótica con sabor dulce y ligeramente ácido.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '150g',
                'color' => 'Morado por fuera, blanco por dentro',
                'usos' => 'Postres, fresca, jugos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Feijoa',
                'imagen' => 'feijoa.jpg',
                'descripcion' => 'Fruta verde con sabor entre piña y guayaba.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '80g',
                'color' => 'Verde',
                'usos' => 'Jugos, mermeladas, ensaladas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Níspero',
                'imagen' => 'nispero.jpg',
                'descripcion' => 'Fruta dulce con sabor suave, parecida al albaricoque.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '40g',
                'color' => 'Naranja o amarillo',
                'usos' => 'Mermeladas, jugos, fresca',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Pomelo',
                'imagen' => 'pomelo.jpg',
                'descripcion' => 'Cítrico grande con sabor ácido y amargo.',
                'clasificacion' => 'Cítrico',
                'peso_promedio' => '200g - 500g',
                'color' => 'Rosa, amarillo',
                'usos' => 'Jugos, ensaladas, desayuno',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Longan',
                'imagen' => 'longan.jpg',
                'descripcion' => 'Fruta tropical parecida al litchi, dulce y jugosa.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '10g',
                'color' => 'Marrón claro por fuera, blanco por dentro',
                'usos' => 'Postres, fresca, infusiones',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Salak (fruta de serpiente)',
                'imagen' => 'salak.jpg',
                'descripcion' => 'Fruta con cáscara escamosa y pulpa agridulce.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '100g',
                'color' => 'Marrón escamoso',
                'usos' => 'Postres, snacks, fresca',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Pepino dulce',
                'imagen' => 'pepino_dulce.jpg',
                'descripcion' => 'Fruta jugosa con sabor suave, similar al melón.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '200g',
                'color' => 'Amarillo con rayas moradas',
                'usos' => 'Fresca, ensaladas, jugos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Dátil',
                'imagen' => 'datil.jpg',
                'descripcion' => 'Fruta dulce del desierto rica en energía.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '7g',
                'color' => 'Marrón oscuro',
                'usos' => 'Snacks, postres, rellenos',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Oliva',
                'imagen' => 'oliva.jpg',
                'descripcion' => 'Fruta rica en grasas saludables, base del aceite de oliva.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '5g',
                'color' => 'Verde o negra',
                'usos' => 'Aceite, ensaladas, cocina',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Azufaifa',
                'imagen' => 'azufaifa.jpg',
                'descripcion' => 'Fruta dulce de Asia, también conocida como jujube.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '10g - 20g',
                'color' => 'Rojo, marrón al madurar',
                'usos' => 'Té, deshidratada, medicina tradicional',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Mirtilo (blueberry europeo)',
                'imagen' => 'mirtilo.jpg',
                'descripcion' => 'Fruta pequeña azul, antioxidante y sabrosa.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '1g',
                'color' => 'Azul oscuro',
                'usos' => 'Jugos, muffins, mermeladas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Calabaza',
                'imagen' => 'calabaza.jpg',
                'descripcion' => 'Fruta grande usada comúnmente como vegetal.',
                'clasificacion' => 'Pepónide',
                'peso_promedio' => '2kg - 10kg',
                'color' => 'Naranja',
                'usos' => 'Sopas, dulces, repostería',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Rambután',
                'imagen' => 'rambutan.jpg',
                'descripcion' => 'Fruta asiática peluda con pulpa jugosa y dulce.',
                'clasificacion' => 'Drupa',
                'peso_promedio' => '50g - 80g',
                'color' => 'Rojo con "pelos" verdes',
                'usos' => 'Fresca, postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Bael',
                'imagen' => 'bael.jpg',
                'descripcion' => 'Fruta dura con interior dulce, usada en medicina ayurvédica.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '300g - 1kg',
                'color' => 'Verde o marrón',
                'usos' => 'Infusiones, jugos medicinales',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Tuna',
                'imagen' => 'tuna.jpg',
                'descripcion' => 'Fruta del nopal, dulce y refrescante.',
                'clasificacion' => 'Baya',
                'peso_promedio' => '150g',
                'color' => 'Verde, rojo, púrpura',
                'usos' => 'Jugos, nieves, fresca',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Guanábana',
                'imagen' => 'guanabana.jpg',
                'descripcion' => 'Fruta tropical de gran tamaño y sabor ácido-dulce.',
                'clasificacion' => 'Compuesta',
                'peso_promedio' => '1kg - 3kg',
                'color' => 'Verde con espinas suaves',
                'usos' => 'Jugos, helados, medicinal',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'fruta' => 'Sapote negro',
                'imagen' => 'sapote_negro.jpg',
                'descripcion' => 'Fruta de pulpa negra, también conocida como "pudín de chocolate".',
                'clasificacion' => 'Baya',
                'peso_promedio' => '250g - 500g',
                'color' => 'Verde por fuera, negro por dentro',
                'usos' => 'Postres, helados, smoothies',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
