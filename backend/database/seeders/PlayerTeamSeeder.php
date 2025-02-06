<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("player_team")->insert(
            [
                ['team_id' => '2','player_id' => '59','from' => '2017','to' => NULL],
                ['team_id' => '10','player_id' => '59','from' => '2005','to' => '2014'],
                ['team_id' => '11','player_id' => '59','from' => '2014','to' => '2017'],
                ['team_id' => '2','player_id' => '60','from' => '2016','to' => NULL],
                ['team_id' => '12','player_id' => '60','from' => '2012','to' => '2016'],
                ['team_id' => '2','player_id' => '61','from' => '2018','to' => NULL],
                ['team_id' => '10','player_id' => '61','from' => '2014','to' => '2015'],
                ['team_id' => '12','player_id' => '61','from' => '2009','to' => '2010'],
                ['team_id' => '13','player_id' => '61','from' => '2010','to' => '2011'],
                ['team_id' => '14','player_id' => '61','from' => '2013','to' => '2013'],
                ['team_id' => '15','player_id' => '61','from' => '2013','to' => '2014'],
                ['team_id' => '16','player_id' => '61','from' => '2014','to' => '2014'],
                ['team_id' => '17','player_id' => '61','from' => '2015','to' => '2016'],
                ['team_id' => '2','player_id' => '62','from' => '2016','to' => NULL],
                ['team_id' => '10','player_id' => '62','from' => '2011','to' => '2016'],
                ['team_id' => '12','player_id' => '62','from' => '2004','to' => '2009'],
                ['team_id' => '18','player_id' => '62','from' => NULL,'to' => '2004'],
                ['team_id' => '19','player_id' => '62','from' => '2009','to' => '2010'],
                ['team_id' => '2','player_id' => '63','from' => '2013','to' => NULL],
                ['team_id' => '20','player_id' => '63','from' => NULL,'to' => '2001'],
                ['team_id' => '21','player_id' => '63','from' => '2001','to' => '2002'],
                ['team_id' => '22','player_id' => '63','from' => '2002','to' => '2004'],
                ['team_id' => '23','player_id' => '63','from' => '2004','to' => '2006'],
                ['team_id' => '24','player_id' => '63','from' => '2006','to' => '2009'],
                ['team_id' => '25','player_id' => '63','from' => '2009','to' => '2013'],
                ['team_id' => '2','player_id' => '64','from' => '2012','to' => '2015'],
                ['team_id' => '26','player_id' => '64','from' => '2009','to' => '2012'],
                ['team_id' => '27','player_id' => '64','from' => '2015','to' => '2016'],
                ['team_id' => '28','player_id' => '64','from' => '2016','to' => '2017'],
                ['team_id' => '2','player_id' => '65','from' => '2018','to' => NULL],
                ['team_id' => '24','player_id' => '65','from' => '2011','to' => '2013'],
                ['team_id' => '29','player_id' => '65','from' => '2008','to' => '2011'],
                ['team_id' => '30','player_id' => '65','from' => '2015','to' => '2018'],
                ['team_id' => '1','player_id' => '66','from' => '2010','to' => '2012'],
                ['team_id' => '2','player_id' => '66','from' => '2014','to' => NULL],
                ['team_id' => '12','player_id' => '66','from' => '2012','to' => '2014'],
                ['team_id' => '32','player_id' => '66','from' => '2004','to' => '2010'],
                ['team_id' => '2','player_id' => '67','from' => '2012','to' => '2014'],
                ['team_id' => '8','player_id' => '67','from' => '2014','to' => '2016'],
                ['team_id' => '2','player_id' => '68','from' => '2017','to' => NULL],
                ['team_id' => '33','player_id' => '68','from' => '2008','to' => '2014'],
                ['team_id' => '34','player_id' => '68','from' => '2015','to' => '2015'],
                ['team_id' => '35','player_id' => '68','from' => '2016','to' => '2017'],
                ['team_id' => '2','player_id' => '69','from' => '2018','to' => NULL],
                ['team_id' => '19','player_id' => '69','from' => '2016','to' => '2012'],
                ['team_id' => '36','player_id' => '69','from' => '2012','to' => '2018'],
                ['team_id' => '12','player_id' => '70','from' => '2009','to' => '2014'],
                ['team_id' => '1','player_id' => '71','from' => '2010','to' => '2014'],
                ['team_id' => '2','player_id' => '71','from' => '2014','to' => NULL],
                ['team_id' => '37','player_id' => '71','from' => '2001','to' => '2010'],
                ['team_id' => '38','player_id' => '71','from' => '2005','to' => '2006'],
                ['team_id' => '1','player_id' => '72','from' => '1997','to' => '2000'],
                ['team_id' => '2','player_id' => '72','from' => '2012','to' => NULL],
                ['team_id' => '39','player_id' => '72','from' => '2000','to' => '2012'],
                ['team_id' => '2','player_id' => '73','from' => '2014','to' => NULL],
                ['team_id' => '30','player_id' => '73','from' => '2012','to' => '2014'],
                ['team_id' => '40','player_id' => '73','from' => '2007','to' => '2009'],
                ['team_id' => '41','player_id' => '73','from' => '2009','to' => '2012'],
                ['team_id' => '1','player_id' => '74','from' => '2008','to' => '2010'],
                ['team_id' => '2','player_id' => '74','from' => '2018','to' => NULL],
                ['team_id' => '4','player_id' => '74','from' => '2012','to' => '2014'],
                ['team_id' => '39','player_id' => '74','from' => '2007','to' => '2008'],
                ['team_id' => '42','player_id' => '74','from' => NULL,'to' => '2007'],
                ['team_id' => '43','player_id' => '74','from' => '2007','to' => '2007'],
                ['team_id' => '44','player_id' => '74','from' => '2010','to' => '2012'],
                ['team_id' => '45','player_id' => '74','from' => '2014','to' => '2017'],
                ['team_id' => '2','player_id' => '75','from' => '2018','to' => NULL],
                ['team_id' => '46','player_id' => '75','from' => NULL,'to' => '2003'],
                ['team_id' => '47','player_id' => '75','from' => '2003','to' => '2007'],
                ['team_id' => '48','player_id' => '75','from' => '2007','to' => '2010'],
                ['team_id' => '49','player_id' => '75','from' => '2010','to' => '2012'],
                ['team_id' => '50','player_id' => '75','from' => '2012','to' => '2018'],
                ['team_id' => '2','player_id' => '76','from' => '2001','to' => '2004'],
                ['team_id' => '39','player_id' => '76','from' => '2012','to' => '2014'],
                ['team_id' => '51','player_id' => '76','from' => NULL,'to' => '2001'],
                ['team_id' => '52','player_id' => '76','from' => '2004','to' => '2011'],
                ['team_id' => '53','player_id' => '76','from' => '2011','to' => '2012'],
                ['team_id' => '2','player_id' => '77','from' => '2009','to' => NULL],
                ['team_id' => '12','player_id' => '77','from' => '2007','to' => '2009'],
                ['team_id' => '19','player_id' => '77','from' => '2005','to' => '2007'],
                ['team_id' => '55','player_id' => '77','from' => '1999','to' => '2002'],
                ['team_id' => '56','player_id' => '77','from' => '2002','to' => '2005'],
                ['team_id' => '2','player_id' => '78','from' => '2017','to' => NULL],
                ['team_id' => '34','player_id' => '78','from' => '2013','to' => '2015'],
                ['team_id' => '45','player_id' => '78','from' => '2015','to' => '2017'],
                ['team_id' => '57','player_id' => '78','from' => NULL,'to' => NULL],
                ['team_id' => '58','player_id' => '78','from' => NULL,'to' => '2012'],
            ]);
    }
}
