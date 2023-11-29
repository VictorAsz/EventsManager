<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
               <h1>Titulo</h1> 
               <img src="/img/banner.jpg" alt="Banner">
               @if(10 > 15)
               <p>A condição é true</p>
               @endif
               <p>{{$nome}}</p>

               @if ($nome == "Pedro")
               <p> O nome é Pedro</p>
               @ifelse($nome == "Matheus")
               <p>O nome é {{$nome}} e ele tem {{$idade2}} anos, e trabalha como {{$profissao}}</p>
               @else
               <p>O nome Não é Pedro</p>
               @endif

               @for ($i = 0; $i < count($arr); $i++)
                   <p>{{$arr[$i]}} - {{$i}}</p>
                   @if ($i == 2)
                       <p>o i é 2</p>
                   @endif
               @endfor
               @foreach ($nomes as $nome)
                   <p>{{ $nome }}</p>
                   <p>{{$loop->index}}</p>
               @endforeach
    </body>
</html>
