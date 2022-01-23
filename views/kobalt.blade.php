

<p>hello world</p>
@csrf

@php


    $collection = collect(["arne", "brenda", "carly", "desley","esther", "huub", "kylian", "kylian", "mick"]);

$b = 0;
       $i = 0;
$antwoord = 1;

  // foreach ( $collection as $namen)
   //{
        foreach ($collection as $namen)//voor elke naam in de collectie doe dit
            {
       $naam = chunk_split($collection, 1, ' ');//haal de namen uit elkaar (doe een spatie tussen elk letter)


                $i++;

          $antwoord = $antwoord * $i; //keer op welke plek het staat



                }
echo $i;

echo $naam;

echo "Het antwoord is  $antwoord";


     //  }













    @endphp

