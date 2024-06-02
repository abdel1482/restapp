@extends('app')

@section('content')
    <div class="p-6 bg-gray-50 min-h-screen">
        <!-- Modal -->
        <x-modal>

        </x-modal>
        <div class="max-w-7xl mx-auto bg-gray-300 shadow-md rounded-md p-6">
            <!-- Header -->
            <h1 class="text-2xl font-semibold mb-6">Liste des contacts</h1>

            <!-- Search Bar -->
            <div class="mb-4 flex items-center justify-between">
                <input type="text" placeholder="Recherche..." class="border border-gray-300 rounded-md p-2 w-1/3" />
                <button x-data x-on:click="$dispatch('open-modal')"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-teal-600">
                    + Ajouter
                </button>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="text-left p-4">Nom du Contact</th>
                        <th class="text-left p-4">Société</th>
                        <th class="text-left p-4">Statut</th>
                        <th class="p-4">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Loop through contacts -->
                    @foreach ($contacts as $contact)
                        <tr class="border-b">
                            <td class="p-4">{{ $contact->nom ." ". $contact->prenom }}</td>
                            <td class="p-4">{{ $contact->organisation->nom }}</td>
                            <td class="p-4">
                            <span class="px-2 py-1 rounded-full
                            @if (strtoupper($contact->organisation->statut) == strtoupper('Lead'))
                                text-blue-600 bg-blue-100
                            @elseif (strtoupper($contact->organisation->statut) == strtoupper('Client'))
                                text-green-600 bg-green-100
                            @elseif (strtoupper($contact->organisation->statut) == strtoupper('PROSPECT'))
                                text-red-600 bg-red-100
                            @endif">
                                {{ ucfirst(strtolower($contact->organisation->statut)) }}
                            </span>
                            </td>
                            <td class="p-4 flex space-x-2">
                                <button class="text-gray-500 hover:text-gray-700" @click="visibility = true">
                                    <!-- Eye icon SVG -->
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S3.732 16.057 2.458 12z"></path>
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-gray-700">
                                    <!-- Edit icon SVG -->
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17h2a2 2 0 002-2v-1.586l7.707-7.707a1 1 0 00-1.414-1.414L14 11.586V10a2 2 0 00-2-2h-1a2 2 0 00-2 2v7a2 2 0 002 2z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2h2"></path>
                                    </svg>
                                </button>
                                <button class="text-gray-500 hover:text-gray-700">
                                    <!-- Delete icon SVG -->
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection
