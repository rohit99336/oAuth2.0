<x-app-layout>
    <style>
        @import "compass/css3";

        header {
            width: 37.5em;
            margin: 2em auto;
        }

        .logo {
            background: url('https://s.cdpn.io/7635/averyson-logo.gif') no-repeat;
            background-size: 100%;
            float: left;
            width: 100%;
            height: 30em;
            font-family: Baskerville;
            color: #575557;
            position: relative;
        }

        .laura,
        .javery,
        .ampersand {
            font-size: 5em;
            text-align: center;
        }

        .laura {
            position: absolute;
            top: 120px;
            left: 225px;
        }

        .javery {
            position: absolute;
            top: 185px;
            left: 335px;
        }

        .ampersand {
            font-style: italic;
            position: absolute;
            top: 160px;
            left: 270px;
        }

        date {
            border-top: 1px solid #575557;
            border-bottom: 1px solid #575557;
            position: absolute;
            top: 240px;
            left: 260px
        }

    </style>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

                <header>
                    <div class="logo">
                        <span class="laura">R</span>
                        <span class="ampersand">&</span>
                        <span class="javery">K</span>
                        <date>29/06/2025</date>
                    </div>
                </header>
            </div>
        </div>
    </div>
</x-app-layout>
