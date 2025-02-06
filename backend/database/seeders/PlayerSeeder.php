<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("players")->insert(
            [
                ['id' => '1','name' => 'Ancsin Gábor','number' => '27','position' => 'átlövő','nationality' => 'magyar','date_of_birth' => '1990-11-27','height' => '202'],
                ['id' => '2','name' => 'Bali Richárd','number' => '30','position' => 'átlövő','nationality' => 'magyar','date_of_birth' => '1989-03-30','height' => '194'],
                ['id' => '3','name' => 'Benis Bence','number' => '10','position' => 'szélső','nationality' => 'magyar','date_of_birth' => '1989-02-22','height' => '189'],
                ['id' => '4','name' => 'Benmiloud Yassine','number' => '13','position' => 'beálló','nationality' => 'magyar','date_of_birth' => '1990-03-04','height' => '202'],
                ['id' => '5','name' => 'Bozo Andjelic','number' => '32','position' => 'irányító','nationality' => 'montenegrói','date_of_birth' => '1992-03-16','height' => '187'],
                ['id' => '6','name' => 'Bujdosó Bendegúz','number' => '94','position' => 'szélső','nationality' => 'magyar','date_of_birth' => '1994-12-10','height' => '185'],
                ['id' => '7','name' => 'Debreczeni Dávid','number' => '23','position' => 'beálló','nationality' => 'magyar','date_of_birth' => '1992-09-23','height' => '198'],
                ['id' => '8','name' => 'Grebenár Gábor','number' => '8','position' => 'irányító,átlövő','nationality' => 'magyar','date_of_birth' => '1984-08-17','height' => '194'],
                ['id' => '9','name' => 'Holdosi Bence','number' => '3','position' => 'szélső','nationality' => 'magyar','date_of_birth' => '2000-12-17','height' => '174'],
                ['id' => '10','name' => 'Kovacsics Péter','number' => '99','position' => 'szélső','nationality' => 'magyar','date_of_birth' => '1994-06-13','height' => '190'],
                ['id' => '11','name' => 'Marczinkó Máté','number' => '23','position' => 'átlövő','nationality' => 'magyar','date_of_birth' => '1991-01-23','height' => '195'],
                ['id' => '12','name' => 'Marián Zernovic','number' => '67','position' => 'kapus','nationality' => 'szlovák','date_of_birth' => '1991-07-01','height' => '186'],
                ['id' => '13','name' => 'Merkovszki Pál','number' => '12','position' => 'kapus','nationality' => 'magyar','date_of_birth' => '2000-05-05','height' => '198'],
                ['id' => '14','name' => 'Mikita Bence','number' => '97','position' => 'irányító','nationality' => 'magyar','date_of_birth' => '1997-12-13','height' => '184'],
                ['id' => '15','name' => 'Nagy Máté','number' => '66','position' => 'szélső','nationality' => 'magyar','date_of_birth' => '1986-03-13','height' => '175'],
                ['id' => '16','name' => 'Oláh Tamás','number' => '9','position' => 'átlövő','nationality' => 'magar','date_of_birth' => '1993-02-14','height' => '195'],
                ['id' => '17','name' => 'Pálos Gábor','number' => '14','position' => 'szélső','nationality' => 'magyar','date_of_birth' => '1985-06-21','height' => '185'],
                ['id' => '18','name' => 'Pordán Bálint','number' => '22','position' => 'beálló','nationality' => 'magyar','date_of_birth' => '1988-10-12','height' => '185'],
                ['id' => '19','name' => 'Rade Mijatovic','number' => '1','position' => 'kapus','nationality' => 'montenegrói','date_of_birth' => '1981-06-30','height' => '191'],
                ['id' => '20','name' => 'Rédai Krisztián','number' => '24','position' => 'átlövő','nationality' => 'magyar','date_of_birth' => '1995-07-29','height' => '206'],
                ['id' => '21','name' => 'Schuch Timuzsin','number' => '5','position' => 'beálló','nationality' => 'magyar','date_of_birth' => '1985-06-05','height' => '197'],
                ['id' => '22','name' => 'Szakály Benedek','number' => '8','position' => 'szélső','nationality' => 'magyar','date_of_birth' => '1997-09-07','height' => '178'],
                ['id' => '23','name' => 'Teimuraz Orjonikidze','number' => '19','position' => 'átlövő','nationality' => 'grúz','date_of_birth' => '1996-02-07','height' => '198'],
                ['id' => '24','name' => 'Alen Blazevic','number' => '21','position' => 'balátlövő','nationality' => 'horvát','date_of_birth' => '1986-03-26','height' => '200'],
                ['id' => '25','name' => 'Alilovic Mirko','number' => '32','position' => 'kapus','nationality' => 'horvát','date_of_birth' => '1985-09-15','height' => '200'],
                ['id' => '26','name' => 'Balogh Zsolt','number' => '19','position' => 'jobbátlövő','nationality' => 'magyar','date_of_birth' => '1989-03-29','height' => '189'],
                ['id' => '27','name' => 'Bánhidi Bence','number' => '27','position' => 'beálló','nationality' => 'magyar','date_of_birth' => '1995-05-09','height' => '204'],
                ['id' => '28','name' => 'Bodó Richárd','number' => '9','position' => 'balátlövő','nationality' => 'magyar','date_of_birth' => '1994-03-13','height' => '203'],
                ['id' => '29','name' => 'Dean Bombac','number' => '44','position' => 'irányító','nationality' => 'szlovén','date_of_birth' => '1989-04-04','height' => '195'],
                ['id' => '30','name' => 'Dmitrij Zhitnikov','number' => '89','position' => 'irányító','nationality' => 'orosz','date_of_birth' => '1989-11-20','height' => '193'],
                ['id' => '31','name' => 'Joan Canellas','number' => '14','position' => 'irányító','nationality' => 'spanyol','date_of_birth' => '1986-09-30','height' => '198'],
                ['id' => '32','name' => 'Jonas Källman','number' => '8','position' => 'balszélső','nationality' => 'svéd','date_of_birth' => '1981-07-17','height' => '200'],
                ['id' => '33','name' => 'Jorge Maqueda','number' => '5','position' => 'jobbátlövő','nationality' => 'spanyol','date_of_birth' => '1988-02-06','height' => '197'],
                ['id' => '34','name' => 'Marin Sego','number' => '16','position' => 'kapus','nationality' => 'horvát','date_of_birth' => '1984-08-02','height' => '194'],
                ['id' => '35','name' => 'Mario Sostaric','number' => '24','position' => 'jobbszélső','nationality' => 'szlovén','date_of_birth' => '1992-11-24','height' => '193'],
                ['id' => '36','name' => 'Matej Gaber','number' => '22','position' => 'beálló','nationality' => 'szlovén','date_of_birth' => '1991-07-22','height' => '198'],
                ['id' => '37','name' => 'Nagy Martin','number' => '52','position' => 'kapus','nationality' => 'magyar','date_of_birth' => '2000-01-09','height' => '202'],
                ['id' => '38','name' => 'Nik Henigman','number' => '15','position' => 'balátlövő','nationality' => 'szlovén','date_of_birth' => '1995-12-04','height' => '200'],
                ['id' => '39','name' => 'Rodríguez Pedro','number' => '26','position' => 'jobbszélső','nationality' => 'spanyol','date_of_birth' => '1990-08-22','height' => '192'],
                ['id' => '40','name' => 'Stanislav Kasparek','number' => '37','position' => 'jobbátlövő','nationality' => 'cseh','date_of_birth' => '1996-06-11','height' => '200'],
                ['id' => '41','name' => 'Stefan Ráfn Sigurmannsson','number' => '10','position' => 'balszélső','nationality' => 'magyar','date_of_birth' => '1990-05-19','height' => '197'],
                ['id' => '42','name' => 'Bartuc lászló','number' => '16','position' => 'kapus','nationality' => NULL,'date_of_birth' => '1991-10-05','height' => '194'],
                ['id' => '43','name' => 'Bozovic Milos','number' => '2','position' => 'balátlövő','nationality' => 'montenegrói','date_of_birth' => '1994-12-10','height' => '199'],
                ['id' => '44','name' => 'Dénes János','number' => '24','position' => 'beálló/balszélső','nationality' => 'magyar','date_of_birth' => '1984-11-15','height' => '195'],
                ['id' => '45','name' => 'Fekete Dániel','number' => '51','position' => 'balátlövő','nationality' => 'román','date_of_birth' => '1999-06-14','height' => '194'],
                ['id' => '46','name' => 'Grigoras Demis Cosmin','number' => '23','position' => 'jobbátlövő','nationality' => 'román','date_of_birth' => '1993-06-30','height' => '194'],
                ['id' => '47','name' => 'Győri Mátyás','number' => '22','position' => 'irányító','nationality' => 'magyar','date_of_birth' => '1997-02-02','height' => '192'],
                ['id' => '48','name' => 'Iancu Ionut-Ciprian','number' => '1','position' => 'kapus','nationality' => 'román','date_of_birth' => '1994-02-18','height' => '194'],
                ['id' => '49','name' => 'Ilyés Ferenc','number' => '18','position' => 'balátlövő','nationality' => 'magyar','date_of_birth' => '1981-12-20','height' => '198'],
                ['id' => '50','name' => 'Juhász Ádám','number' => '7','position' => 'irányító','nationality' => 'magyar','date_of_birth' => '1996-06-06','height' => '188'],
                ['id' => '51','name' => 'Pásztor Ákos','number' => '4','position' => 'jobbszélső','nationality' => 'magyar','date_of_birth' => '1991-06-24','height' => '189'],
                ['id' => '52','name' => 'Rosta Miklós','number' => '19','position' => 'beálló','nationality' => 'magyar','date_of_birth' => '1999-02-14','height' => '203'],
                ['id' => '53','name' => 'Sipos Adrián','number' => '8','position' => 'beálló','nationality' => 'magyar/román','date_of_birth' => '1990-03-08','height' => '198'],
                ['id' => '54','name' => 'Székely Márton','number' => '12','position' => 'kapus','nationality' => 'magyar','date_of_birth' => '1990-01-02','height' => '194'],
                ['id' => '55','name' => 'Szöllősi Balázs','number' => '14','position' => 'irányító','nationality' => 'magyar','date_of_birth' => '1992-10-24','height' => '193'],
                ['id' => '56','name' => 'Vranjes Vladimir','number' => '77','position' => 'beálló','nationality' => 'bosnyák','date_of_birth' => '1988-12-14','height' => '200'],
                ['id' => '57','name' => 'Vrankovic Jakov','number' => '93','position' => 'jobblövő','nationality' => 'horvát','date_of_birth' => '1993-06-12','height' => '200'],
                ['id' => '58','name' => 'Vujovic Milos','number' => '6','position' => 'balszélső','nationality' => 'motenegrói','date_of_birth' => '1993-09-05','height' => '181'],
                ['id' => '59','name' => 'Accambray William','number' => '20','position' => 'ballövő','nationality' => 'francia','date_of_birth' => '1988-04-08','height' => '194'],
                ['id' => '60','name' => 'Blagotinsek Blaz','number' => '31','position' => 'beálló','nationality' => 'szlovén','date_of_birth' => '1994-01-17','height' => '202'],
                ['id' => '61','name' => 'Borut Mackovsek','number' => '51','position' => 'balátlövő','nationality' => 'szlovén','date_of_birth' => '1992-09-11','height' => '203'],
                ['id' => '62','name' => 'Gajic Dragan','number' => '17','position' => 'jobbszélső','nationality' => 'szlovén','date_of_birth' => '1984-07-21','height' => '188'],
                ['id' => '63','name' => 'Ilic Momir','number' => '13','position' => 'ballövő','nationality' => 'szerb/magyar','date_of_birth' => '1981-12-22','height' => '198'],
                ['id' => '64','name' => 'Jamali Moorchegani Iman','number' => '44','position' => 'ballövő','nationality' => 'iráni/magyar','date_of_birth' => '1991-10-11','height' => '200'],
                ['id' => '65','name' => 'Kentin Mahé','number' => '35','position' => 'irányító,balszélső','nationality' => 'francia','date_of_birth' => '1991-05-22','height' => '186'],
                ['id' => '66','name' => 'Lékai Máté','number' => '66','position' => 'irányító','nationality' => 'magyar','date_of_birth' => '1988-06-16','height' => '190'],
                ['id' => '67','name' => 'Ligetvári Patrik','number' => '96','position' => 'ballövő','nationality' => 'magyar','date_of_birth' => '1996-02-13','height' => '200'],
                ['id' => '68','name' => 'Manaskov Dejan','number' => '2','position' => 'balszélső','nationality' => 'macedón','date_of_birth' => '1992-08-26','height' => '180'],
                ['id' => '69','name' => 'Manuel Štrlek','number' => '26','position' => 'balszélső','nationality' => 'horvát','date_of_birth' => '1988-12-01','height' => '181'],
                ['id' => '70','name' => 'Marguč Gašper','number' => '24','position' => 'jobbszélső','nationality' => 'szlovén','date_of_birth' => '1990-08-20','height' => '180'],
                ['id' => '71','name' => 'Mikler Roland','number' => '16','position' => 'kapus','nationality' => 'magyar','date_of_birth' => '1984-09-20','height' => '190'],
                ['id' => '72','name' => 'Nagy László','number' => '19','position' => 'jobblövő','nationality' => 'magyar','date_of_birth' => '1981-03-03','height' => '207'],
                ['id' => '73','name' => 'Nilsson Andreas','number' => '18','position' => 'beálló','nationality' => 'svéd','date_of_birth' => '1990-04-12','height' => '196'],
                ['id' => '74','name' => 'Petar Nenadić','number' => '34','position' => 'irányító','nationality' => 'szerb','date_of_birth' => '1986-06-28','height' => '198'],
                ['id' => '75','name' => 'René Toft Hansen','number' => '7','position' => 'beálló','nationality' => 'dán','date_of_birth' => '1984-11-01','height' => '200'],
                ['id' => '76','name' => 'Sterbik Árpád','number' => '1','position' => 'kapus','nationality' => 'szerb/spanyol','date_of_birth' => '1979-11-22','height' => NULL],
                ['id' => '77','name' => 'Terzic Mirsad','number' => '30','position' => 'ballövő','nationality' => 'bosnyák','date_of_birth' => '1983-07-12','height' => '196'],
                ['id' => '78','name' => 'Tønnesen Kent Robin','number' => '15','position' => 'jobblövő','nationality' => 'norvég','date_of_birth' => '1991-06-05','height' => '195']
              ]
        );
    }
}
