<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = Client::create([
            'ruc' => '20114915026',
            'razon_social' => 'COMPAÑIA MINERA ANTAPACCAY S.A.',
            'direccion' => 'CAMPAMENTO MINERO TINTAYA NRO. SN CAMPAMENTO MINERO TINTAYA (KM.5 YAURI CARRETERA CUSCO AREQUIPA) CUSCO - ESPINAR - ESPINAR',
        ]);

        Contact::factory(2)->create([
           'client_id' => $client->id
        ]);

        $client = Client::create([
            'ruc' => '20100017572',
            'razon_social' => 'SOCIEDAD MINERA EL BROCAL S.A.A.',
            'direccion' => 'CAL.LAS BEGONIAS NRO. 415 INT. P-19 (RECEPCION PISO 19) LIMA - LIMA - SAN ISIDRO',
        ]);

        Contact::factory(2)->create([
            'client_id' => $client->id
        ]);

        $client = Client::create([
            'ruc' => '20506675457',
            'razon_social' => 'MINERA CHINALCO PERÚ S.A.',
            'direccion' => 'AV. EL DERBY NRO. 250 URB. EL DERBY (PISO 20) LIMA - LIMA - SANTIAGO DE SURCO',
        ]);

        Contact::factory(2)->create([
            'client_id' => $client->id
        ]);

    }
}
