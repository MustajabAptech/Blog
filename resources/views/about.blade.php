<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
       {{--  <h1>Bhai kia hal hain {{ "Ji Han" }}</h1> --}}
        <?php// echo "Koi mana nh hai";?>
    <br>
        {{-- @php
            //echo "chacha Ji";
            $a='Hiiiii';
        @endphp
        @for ($i=1;$i<=10;$i++)
        <h1>hello Bhai {{ $a }}</h1>
        @endfor --}}

       {{--  @if ($a=='Hi')
                {{ $a }}
        @else
            {{ "Not matched" }}
        
        @endif
 --}}

        
        @php
            $students = array("Ali");
            //$test ='danish';
           // dd($students);
        @endphp


        {{-- @foreach ($students as $student)
                {{ $student }}
                <br>
        @else
                {{ "No recors were found" }}
        @endforeach --}}

        @forelse ($studentsss as $student)
            {{ $student }}
        @empty
            {{ "No records were found" }}
        @endforelse
        {{-- <p>pakistan</p>
        
        <a href="{{ url('contact') }}"> Link @{{ $test }}</a>
        <br> --}}
        {{-- <a href="contact"> please click here to contact</a> --}}
</body>
</html>