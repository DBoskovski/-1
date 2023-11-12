<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(['Skopje',
            'Tetovo',
            'Bitola',
            'Kumanovo',
            'Prilep',
            'Ohrid',
            'Veles',
            'Štip',
            'Gostivar',
            'Kočani',
            'Dračevo',
            'Struga',
            'Debar',
            'Strumica',
            'Vinica',
            'Probištip',
            'Aračinovo',
            'Kičevo',
            'Kavadarci',
            'Gevgelija',
            'Vrapčište',
            'Radoviš',
            'Berovo',
            'Kruševo',
            'Sveti Nikole',
            'Demir Kapija',
            'Kučevište',
            'Delčevo',
            'Bogdanci',
            'Rašče',
            'Negotino',
            'Vevčani',
            'Debrešte',
            'Labuništa',
            'Gradsko',
            'Valandovo',
            'Kriva Palanka',
            'Kratovo',
            'Krivogaštani',
            'Zrnovci',
            'Pehčevo',
            'Plasnica',
            'Mogila',
            'Tearce',
            'Novaci',
            'Rosoman',
            'Novo Selo',
            'Bosilovo',
            'Konče',
            'Rostuša',
            'Jegunovce',
            'Rankovce',
            'Sopište',
            'Obleševo',
            'Karbinci',
            'Vasilevo',
            'Petrovec',
            'Makedonski Brod',
            'Staro Nagoričane',
            'Demir Hisar',
            'Lozovo',
            'Centar Župa',
            'Brvenica',
            'Belčišta',
            'Dolneni',
            'Čučer-Sandevo',
            'Zelenikovo',
            'Želino',
            'Star Dojran',
            'Studeničani',
            'Bogovinje',
            'Ilinden',
            'Lipkovo',
            'Makedonska Kamenica',
            'Resen'])->each(fn($city) => City::query()->create(['name' => $city]));
    }
}
