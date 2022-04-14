<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <form action="">
                <div class="container">
                    <div class="question">
                        <div>
                            <p>Vous êtes facilement dérangé(e) par les lumières, les bruits, les odeurs, certaines sensations</p>
                            <input type="radio" id="0" name="choiceOne" value="0">
                            <input type="radio" id="1" name="choiceOne" value="1">
                            <input type="radio" id="2" name="choiceOne" value="2">
                            <input type="radio" id="3" name="choiceOne" value="3">
                        </div>
                        <div>
                            <p>Vous remarquez les changements subtils dans votre environnement</p>
                            <input type="radio" id="4" name="choiceTwo" value="0">
                            <input type="radio" id="5" name="choiceTwo" value="1">
                            <input type="radio" id="6" name="choiceTwo" value="2">
                            <input type="radio" id="7" name="choiceTwo" value="3">
                        </div>
                        <div>
                            <p>Vous êtes sensible aux ambiances </p>
                            <input type="radio" id="8" name="choiceThree" value="0">
                            <input type="radio" id="9" name="choiceThree" value="1">
                            <input type="radio" id="10" name="choiceThree" value="2">
                            <input type="radio" id="11" name="choiceThree" value="3">
                        </div>
                        <div>
                            <p>Vos réactions émotionnelles sont intenses, qu'elles soient positives ou négatives</p>
                            <input type="radio" id="12" name="choiceFour" value="0">
                            <input type="radio" id="13" name="choiceFour" value="1">
                            <input type="radio" id="14" name="choiceFour" value="2">
                            <input type="radio" id="15" name="choiceFour" value="3">
                        </div>
                        <div>
                            <p>Vous êtes facilement touché(e) ou ému(e)</p>
                            <input type="radio" id="16" name="choiceFive" value="0">
                            <input type="radio" id="17" name="choiceFive" value="1">
                            <input type="radio" id="18" name="choiceFive" value="2">
                            <input type="radio" id="19" name="choiceFive" value="3">
                        </div>
                        <div>
                            <p>Vos proches voous décrivent comme quelqu'un de sensible</p>
                            <input type="radio" id="20" name="choiceSix" value="0">
                            <input type="radio" id="21" name="choiceSix" value="1">
                            <input type="radio" id="22" name="choiceSix" value="2">
                            <input type="radio" id="23" name="choiceSix" value="3">
                        </div>
                        <div>
                            <p>Vous nouez des relations profondes avec les autres, qui vous nourrissent réciproquement</p>
                            <input type="radio" id="24" name="choiceSeven" value="0">
                            <input type="radio" id="25" name="choiceSeven" value="1">
                            <input type="radio" id="26" name="choiceSeven" value="2">
                            <input type="radio" id="27" name="choiceSeven" value="3">
                        </div>
                        <div>
                            <p>Vous êtes attentif/ve à vous émotions et à celles des autres</p>
                            <input type="radio" id="28" name="choiceEight" value="0">
                            <input type="radio" id="29" name="choiceEight" value="1">
                            <input type="radio" id="30" name="choiceEight" value="2">
                            <input type="radio" id="31" name="choiceEight" value="3">
                        </div>
                        <div>
                            <p>Vous éprouvez régulièrement le besoin de vous isoler pour vous remettre des nombreuses sollicitations de votre environnement</p>
                            <input type="radio" id="32" name="choiceNine" value="0">
                            <input type="radio" id="33" name="choiceNine" value="1">
                            <input type="radio" id="34" name="choiceNine" value="2">
                            <input type="radio" id="35" name="choiceNine" value="3">
                        </div>
                        <div>
                            <p>Vous appréciez les oeuvres d'art (peinture, musique, littérature...) et les émotions esthétiques</p>
                            <input type="radio" id="36" name="choiceTen" value="0">
                            <input type="radio" id="37" name="choiceTen" value="1">
                            <input type="radio" id="38" name="choiceTen" value="2">
                            <input type="radio" id="39" name="choiceTen" value="3">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="{{ asset('/app.js') }}"></script>
    </body>
</html>
