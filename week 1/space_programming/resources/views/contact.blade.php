@extends('layouts.app')

@section('content')
    <main class="w-full max-w-4xl mx-auto px-6 lg:px-8 pb-12">
        <h1 class="text-2xl font-bold mb-8 uppercase tracking-wide">Mission Contact</h1>

        <div class="flex flex-col lg:flex-row gap-12">
            <div class="flex-1 space-y-8">
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-widest mb-1">Lead Contact</h2>
                    <p>Dr. Elara Nyx - Orbital Systems Engineer</p>
                </div>

                <div>
                    <h2 class="text-xs font-bold uppercase tracking-widest mb-1">Comms Channel</h2>
                    <p>comms@space-programming.dev</p>
                </div>

                <div>
                    <h2 class="text-xs font-bold uppercase tracking-widest mb-1">Secure Uplink</h2>
                    <p>uplink://space-programming/mission-alpha</p>
                </div>

                <div>
                    <h2 class="text-xs font-bold uppercase tracking-widest mb-1">Mission Window</h2>
                    <p>UTC 09:00-17:00 - Orbital Operations Desk</p>
                </div>
            </div>

            <div class="flex-1">
                <h2 class="text-xs font-bold uppercase tracking-widest mb-1">Mission Notes</h2>
                <p>Use this channel for trajectory updates, integration questions, and synchronizing launch window constraints with ground control.</p>
            </div>
        </div>

        <hr class="my-10 border-[#e3e3e0] dark:border-[#3E3E3A]">

        <div>
            <h2 class="text-xs font-bold uppercase tracking-widest mb-4">Ground Station Address</h2>
            <div class="space-y-0.5">
                <p>Space Programming HQ</p>
                <p>Deep Space Operations Center</p>
                <p>Launch Complex 7, Sector C</p>
                <p>4210 Apogee Way</p>
                <p>11308 High Orbit District</p>
                <p>Terran Continental Zone</p>
            </div>

            <div class="flex flex-col sm:flex-row gap-8 mt-6">
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest mb-1">Docking Reference</h3>
                    <p>Ground Station ID: GS-SP-07</p>
                </div>
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest mb-1">Coordinates</h3>
                    <p>Lat 28.392 N - Long 80.607 W</p>
                </div>
            </div>
        </div>

        <p class="mt-8 text-sm text-white dark:text-[#A1A09A]">Physical access restricted to cleared personnel. All visitors must register via mission control at least 72 hours before arrival.</p>
    </main>
@endsection
