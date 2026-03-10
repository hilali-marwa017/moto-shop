<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Moto;

class MotoSeeder extends Seeder
{
    public function run()
    {
        Moto::create([
            'titre'=> 'BMW S1000 RR',
            'marque'=> 'BMW',
            'type' => 'Sportive',
            'ville' => 'Casablanca',
            'annee' => 2022,
            'kilometrage'=> 8000,
            'prix' => 185000,
            'description'=> 'La superbike BMW par excellence, puissance extrême.',
            'photo'=> 'motos/bmw s1000 RR.jpg',
            'statut'=> 'disponible',
        ]);

        Moto::create([
            'titre'=> 'Ducati Panigale',
            'marque'=> 'Ducati',
            'type'=> 'Sportive',
            'ville'=> 'Rabat',
            'annee'=> 2021,
            'kilometrage'=> 12000,
            'prix' => 210000,
            'description' => 'Italienne pure race, son moteur est légendaire.',
            'photo' => 'motos/ducati.jpg',
            'statut'=> 'disponible',
        ]);

        Moto::create([
            'titre'=> 'BMW R1250 GS',
            'marque'=> 'BMW',
            'type'=> 'Routiere',
            'ville'=> 'Marrakech',
            'annee'=> 2020,
            'kilometrage'=> 25000,
            'prix'=> 175000,
            'description'=> 'La référence des trails, équipée GPS.',
            'photo'=> 'motos/gs1250.jpg',
            'statut'=> 'disponible',
        ]);

        Moto::create([
            'titre'=> 'Kawasaki H2R',
            'marque'=> 'Kawasaki',
            'type'=> 'Sportive',
            'ville'=> 'Tanger',
            'annee'=> 2021,
            'kilometrage' => 3000,
            'prix'=> 350000,
            'description'=> 'La moto la plus puissante au monde, compresseur intégré.',
            'photo'=> 'motos/h2r.jpg',
            'statut'=> 'disponible',
        ]);

        Moto::create([
            'titre'=> 'Suzuki Hayabusa',
            'marque'=> 'Suzuki',
            'type'=> 'Sportive',
            'ville'=> 'Fès',
            'annee'=> 2022,
            'kilometrage'=> 6000,
            'prix'=> 160000,
            'description'=> 'Le faucon pèlerin, icône de la vitesse.',
            'photo' => 'motos/hayabusa.jpg',
            'statut' => 'disponible',
        ]);

        Moto::create([
            'titre'=> 'Honda CBR 1000',
            'marque'=> 'Honda',
            'type'=> 'Sportive',
            'ville'=> 'Agadir',
            'annee'=> 2020,
            'kilometrage'=> 15000,
            'prix'=> 130000,
            'description'=> 'Fiabilité Honda, performances exceptionnelles.',
            'photo'=> 'motos/honda.jpg',
            'statut'=> 'vendue',
        ]);

        Moto::create([
            'titre'=> 'Yamaha MT-07',
            'marque'=> 'Yamaha',
            'type'=> 'Routiere',
            'ville'=> 'Casablanca',
            'annee'=> 2021,
            'kilometrage'=> 9000,
            'prix'=> 95000,
            'description'=> 'Moto naked puissante et légère, parfait état.',
            'photo'=> 'motos/mt07.jpg',
            'statut'=> 'disponible',
        ]);

        Moto::create([
            'titre'=> 'Yamaha R1',
            'marque'=> 'Yamaha',
            'type'=> 'Sportive',
            'ville'=> 'Rabat',
            'annee'=> 2021,
            'kilometrage'=> 10000,
            'prix'=> 195000,
            'description'=> 'La superbike Yamaha, ADN MotoGP.',
            'photo'=> 'motos/r1.jpg',
            'statut'=> 'disponible',
        ]);

        Moto::create([
            'titre'=> 'Suzuki GSX-R 750',
            'marque'=> 'Suzuki',
            'type'=> 'Sportive',
            'ville'=> 'Tanger',
            'annee'=> 2019,
            'kilometrage'=> 22000,
            'prix'=> 88000,
            'description'=> 'Sportive légère et maniable.',
            'photo'=> 'motos/suzuki.jpg',
            'statut'=> 'vendue',
        ]);

        Moto::create([
            'titre'=> 'Yamaha Tracer 900',
            'marque'=> 'Yamaha',
            'type'=> 'Routiere',
            'ville'=> 'Marrakech',
            'annee'=> 2020,
            'kilometrage'=> 18000,
            'prix'=> 105000,
            'description'=> 'Parfaite pour les longs voyages.',
            'photo'=> 'motos/tracer.jpg',
            'statut'=> 'disponible',
        ]);
    }
}