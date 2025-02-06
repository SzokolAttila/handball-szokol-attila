<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("teams")->insert(
            [
                ['id' => '1', 'name' => 'MOL-Pick Szeged', 'country' => 'Magyarország', 'city' => 'Szeged', 'stadium' => 'Városi Sportcsarnok', 'stadium_size' => '3200'],
                ['id' => '2', 'name' => 'Telekom Veszprém', 'country' => 'Magyarország', 'city' => 'Veszprém', 'stadium' => 'Veszprém Aréna', 'stadium_size' => '5096'],
                ['id' => '3', 'name' => 'Kadetten Schaffhausen', 'country' => 'Svájc', 'city' => 'Schaffhausen', 'stadium' => 'BBC-Arena', 'stadium_size' => '3500'],
                ['id' => '4', 'name' => 'Wisła Płock', 'country' => 'Lengyelország', 'city' => 'Płock', 'stadium' => 'Kazimierz Górski Stadium', 'stadium_size' => '10978'],
                ['id' => '5', 'name' => 'TBV Lemgo', 'country' => 'Németország', 'city' => 'Lemgo', 'stadium' => 'Gerry-Weber-Stadion', 'stadium_size' => '11000'],
                ['id' => '6', 'name' => 'Székelyudvarhelyi KC', 'country' => 'Románia', 'city' => 'Székelyudvarhely', 'stadium' => 'Városi Sportcsarnok', 'stadium_size' => '1300'],
                ['id' => '7', 'name' => 'Grundfos Tatabánya', 'country' => 'Magyarország', 'city' => 'Tatabánya', 'stadium' => 'Földi imre Sportcsarnok', 'stadium_size' => '1000'],
                ['id' => '8', 'name' => 'Balatonfüredi KSE', 'country' => 'Magyarország', 'city' => 'Balatonfüred', 'stadium' => 'Észak- Balatoni Regionális Konferencia Közpon', 'stadium_size' => '712'],
                ['id' => '9', 'name' => 'Fradi', 'country' => 'Magyarország', 'city' => NULL, 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '10', 'name' => 'Montpellier HB', 'country' => 'Franciaország', 'city' => 'Montpellier', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '11', 'name' => 'Paris Saint-Germain', 'country' => 'Franciaország', 'city' => 'Párizs', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '12', 'name' => 'Rk Celje', 'country' => 'Szlovénia', 'city' => 'Celje', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '13', 'name' => 'RK Maribor Branik', 'country' => 'Szlovénia', 'city' => 'Maribor', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '14', 'name' => 'Asz-Szadd', 'country' => 'Katar', 'city' => 'Doha', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '15', 'name' => 'TSV Hannover-Burgdorf', 'country' => 'Németország', 'city' => 'Hannover', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '16', 'name' => 'Dinama Minszk', 'country' => 'Fehéroroszország', 'city' => 'Minszk', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '17', 'name' => 'ThSV Eisenach', 'country' => 'Németország', 'city' => 'Eisenach', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '18', 'name' => 'RK Rudar Evj Trbovlije', 'country' => 'Szlovénia', 'city' => 'Trbovlije', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '19', 'name' => 'RK Zagreb', 'country' => 'Horvátorszáh', 'city' => 'Zágráb', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '20', 'name' => 'Samot Aranđelovac', 'country' => 'Szerbia', 'city' => 'Aranđelovac', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '21', 'name' => 'HC Kolubara-Lazarevac', 'country' => 'Szerbia', 'city' => 'Lazarevac', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '22', 'name' => 'RK Fidelinka Subotica', 'country' => 'Szerbia', 'city' => 'Subotica', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '23', 'name' => 'RK Gorenje Velenje', 'country' => 'Szlovénia', 'city' => 'Velenje', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '24', 'name' => 'VfL Gummersbach', 'country' => 'Németország', 'city' => 'Gummersbach', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '25', 'name' => 'THW Kiel', 'country' => 'Németország', 'city' => 'Kiel', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '26', 'name' => 'Fulád Szepáhán', 'country' => 'Irán', 'city' => 'Iszfahán', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '27', 'name' => 'IFK Kristianstad', 'country' => 'Svédország', 'city' => 'Kristianstad', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '28', 'name' => 'Meskov Breszt', 'country' => 'Fehéroroszország', 'city' => 'Breszt', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '29', 'name' => 'DHC Rheinland', 'country' => 'Németország', 'city' => 'Dormagen', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '30', 'name' => 'HSV Hamburg', 'country' => 'Németország', 'city' => 'Hamburg', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '31', 'name' => 'SG Flensburg-Handewitt', 'country' => 'Németország', 'city' => 'Flensburg', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '32', 'name' => 'PLER KC', 'country' => 'Magyarország', 'city' => 'Budapest', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '33', 'name' => 'Metalurg Szkopje', 'country' => 'Macedónia', 'city' => 'Skopje', 'stadium' => 'Boris Trajkovski', 'stadium_size' => '7000'],
                ['id' => '34', 'name' => 'HSG Wetzlar', 'country' => 'Németország', 'city' => 'Wetzlar', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '35', 'name' => 'Rhein-Neckar Löwen', 'country' => 'Németország', 'city' => 'Mannheim', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '36', 'name' => 'Vive Kielce', 'country' => 'Lengyelország', 'city' => 'Kielce', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '37', 'name' => 'Dunaferr KC', 'country' => 'Magyarország', 'city' => 'Dunaújváros', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '38', 'name' => 'Kalocsai KC', 'country' => 'Magyarország', 'city' => 'Kalocsa', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '39', 'name' => 'FC Barcelona', 'country' => 'Spanyolország', 'city' => 'Barcelona', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '40', 'name' => 'IFK Trelleborg', 'country' => 'Svédország', 'city' => 'Trelleborg', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '41', 'name' => 'IFK Skövde', 'country' => 'Svédország', 'city' => 'Skövde', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '42', 'name' => 'Crvena Zvezda', 'country' => 'Szerbia', 'city' => 'Belgrád', 'stadium' => 'Rajko Mitić Stadion', 'stadium_size' => NULL],
                ['id' => '43', 'name' => 'Algeciras BM', 'country' => 'Spanyolország', 'city' => 'Algeciras', 'stadium' => 'Ciudad de Algeciras', 'stadium_size' => '2300'],
                ['id' => '44', 'name' => 'TTH Holstebro', 'country' => 'Dánia', 'city' => 'Holstebro', 'stadium' => 'Gråkjær Arena', 'stadium_size' => '3250'],
                ['id' => '45', 'name' => 'Füchse Berlin', 'country' => 'Németország', 'city' => 'Berlin', 'stadium' => 'Max-Schmeling-Halle', 'stadium_size' => '9000'],
                ['id' => '46', 'name' => 'HF Mors', 'country' => 'Dánia', 'city' => 'Mors', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '47', 'name' => 'Viborg HK', 'country' => 'Dánia', 'city' => 'Viborg', 'stadium' => 'Vibocold Arena Viborg', 'stadium_size' => '3000'],
                ['id' => '48', 'name' => 'KIF Kolding', 'country' => 'Dánia', 'city' => 'Koppenhága', 'stadium' => 'Sydbank Arena', 'stadium_size' => NULL],
                ['id' => '49', 'name' => 'AG København', 'country' => 'Dánia', 'city' => 'Koppenhága', 'stadium' => 'Ballerup Super Arena', 'stadium_size' => '7500'],
                ['id' => '50', 'name' => 'THW Kiel', 'country' => 'Németország', 'city' => 'Kiel', 'stadium' => 'Sparkassen-Arena', 'stadium_size' => '13500'],
                ['id' => '51', 'name' => 'RK Jugović', 'country' => 'Szerbia', 'city' => 'Kać', 'stadium' => 'Hram Sport Hall', 'stadium_size' => '2000'],
                ['id' => '52', 'name' => 'BM Ciudad Real', 'country' => 'Spanyolország', 'city' => 'Ciudad Real', 'stadium' => 'Quijote Arena', 'stadium_size' => NULL],
                ['id' => '53', 'name' => 'BM Atlético Madrid', 'country' => 'Spanyolország', 'city' => 'Madrid', 'stadium' => 'Antonio Magariños', 'stadium_size' => '3000'],
                ['id' => '55', 'name' => 'RK Željezničar', 'country' => 'Bosznia-Hercegovina', 'city' => 'Szarajevó', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '56', 'name' => 'HRK Izviđač', 'country' => 'Bosznia-Hercegovina', 'city' => 'Ljubuški', 'stadium' => NULL, 'stadium_size' => '4000'],
                ['id' => '57', 'name' => 'Fjellhammer IL', 'country' => 'Norvégia', 'city' => 'Lørenskog', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '58', 'name' => 'Haslum HK', 'country' => 'Norvégia', 'city' => 'Haslum', 'stadium' => NULL, 'stadium_size' => NULL],
                ['id' => '59', 'name' => 'IK Sävehof', 'country' => 'Svédország', 'city' => 'Partille', 'stadium' => 'Partille Arena', 'stadium_size' => '2000']
            ]
        );
    }
}
