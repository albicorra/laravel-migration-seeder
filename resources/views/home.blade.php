<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        @foreach ($trains as $train)
            <li>
                <div>
                    {{$train->azienda}}<br/>
                    {{$train->codice_treno}}<br/>
                    {{$train->data_di_partenza}}<br/>
                    {{$train->stazione_di_partenza}}<br/>
                    {{$train->stazione_di_arrivo}}<br/>
                    {{$train->orario_di_partenza}}<br/>
                    {{$train->orario_di_arrivo}}<br/>
                    
                </div>
            </li>
        @endforeach
    </ul>

</body>
</html>