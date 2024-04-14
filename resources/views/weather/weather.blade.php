<x-layout>
    
<h1>Weather Data for {{ $weatherData['name'] }}</h1>

<ul>
    <li>Coordinates: {{ $weatherData['coord']['lat'] }}, {{ $weatherData['coord']['lon'] }}</li>
    <li>Base: {{ $weatherData['base'] }}</li>
    <li>Visibility: {{ $weatherData['visibility'] }}</li>
    <li>Temperature: {{ $weatherData['main']['temp'] }}</li>
    <li>Wind Speed: {{ $weatherData['wind']['speed'] }}</li>
    <!-- Add more data points as needed -->
</ul>
     
</x-layout> 