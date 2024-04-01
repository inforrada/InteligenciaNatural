<html>
    <body>

        <h1>ApiAddicts</h1>
        <h2>Creación de contenidos con inteligencia natural</h2>
        <h3>25 de abril de 2024 a las 18:00</h3>
        <a href="https://rapidapi.com/api-sports/api/api-football/" target="_blank">Api</a>
    
<hr>        
        <h1><img src="<x-data :object="$data" branch="response.0.teams.home.logo" />">  vs <img src="<x-data :object="$data" branch="response.0.teams.away.logo"/>"></h1>
        El partido entre <x-data :object="$data" branch="response.0.teams.home.name"/>  y <x-data :object="$data" branch="response.0.teams.away.name" /> 
        se juega en <x-data :object="$data" branch="response.0.fixture.venue.name" /> (<x-data :object="$data" branch="response.0.fixture.venue.city" />) 
        el próximo 
        <x-format-date>
             <x-slot:date><x-data :object="$data" branch="response.0.fixture.date" /></x-slot:date> 
        </x-format-date>.
<hr>
            <h2><img src="<x-data :object="$data" branch="response.0.league.logo"/>" style="height: 1.2em"> <x-data :object="$data" branch="response.0.league.name" /> </h2>
                <h3><img src="<x-data :object="$data" branch="response.0.league.flag" />" style="height: 1em"> <x-data :object="$data" branch="response.0.league.country" /></h3>
            @foreach($data['response'] as $res)
            <h3><img src="<x-data :object="$res" branch="teams.home.logo" />" style="height: 8em">  vs <img src="<x-data :object="$res" branch="teams.away.logo"/>"  style="height: 8em"></h3>
            <h4> Jornada <x-data :object="$res" branch="league.round" /> </h4>
            
            El partido entre <x-data :object="$res" branch="teams.home.name"/>  y <x-data :object="$res" branch="teams.away.name" /> 
            se juega en <x-data :object="$res" branch="fixture.venue.name" /> (<x-data :object="$res" branch="fixture.venue.city" />) 
            el próximo 
            <x-format-date>
                 <x-slot:date><x-data :object="$res" branch="fixture.date" /></x-slot:date> 
                </x-format-date>.
    
            @endforeach
            @dd ($data)
    </body>
</html>