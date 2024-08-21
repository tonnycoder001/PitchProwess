@include('layouts.nav')
<div class="border-t border-gray-300"></div>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12">
    <h1 class="text-2xl font-bold mb-6">League Standings</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th scope="col" class="w-1/8 px-2 py-3 text-xs font-medium text-left tracking-wider">NO.</th>
                    <th scope="col" class="w-1/3 px-2 py-3 text-xs font-medium text-left tracking-wider">Club</th>
                    <th scope="col" class="w-1/8 px-2 py-3 text-xs font-medium text-left tracking-wider">P</th>
                    <th scope="col" class="w-1/8 px-2 py-3 text-xs font-medium text-left tracking-wider">W</th>
                    <th scope="col" class="w-1/8 px-2 py-3 text-xs font-medium text-left tracking-wider">D</th>
                    <th scope="col" class="w-1/8 px-2 py-3 text-xs font-medium text-left tracking-wider">L</th>
                    <th scope="col" class="w-1/8 px-2 py-3 text-xs font-medium text-left tracking-wider">GD</th>
                    <th scope="col" class="w-1/8 px-2 py-3 text-xs font-medium text-left tracking-wider">Pts</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @php
                    $sortedStandings = $standings->sortBy('position');
                @endphp
                @foreach ($sortedStandings as $standing)
                    <tr>
                        <td class="border px-2 py-2 text-sm font-medium text-gray-900">{{ $standing->position }}</td>
                        <td class="border px-2 py-2 text-sm font-medium text-gray-900">{{ $standing->club_name }}</td>
                        <td class="border px-2 py-2 text-sm text-gray-500">{{ $standing->played }}</td>
                        <td class="border px-2 py-2 text-sm text-gray-500">{{ $standing->won }}</td>
                        <td class="border px-2 py-2 text-sm text-gray-500">{{ $standing->drawn }}</td>
                        <td class="border px-2 py-2 text-sm text-gray-500">{{ $standing->lost }}</td>
                        <td class="border px-2 py-2 text-sm text-gray-500">{{ $standing->goal_difference }}</td>
                        <td class="border px-2 py-2 text-sm text-gray-500">{{ $standing->points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layouts.footer')
