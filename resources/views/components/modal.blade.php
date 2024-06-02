<div>
    <!-- Well begun is half done. - Aristotle -->
    <div >
        <div x-data='{ openup: false }'
             x-show='openup'
             x-on:open-modal.window="openup = true"
             @click.outside='openup = false'
             class="fixed inset-0 flex items-center justify-center z-50 bg-gray-800 bg-opacity-75"
        >
            <div class="bg-white rounded-lg shadow-lg w-2/3 p-6">
                <h2 class="text-xl font-semibold mb-4">Détail du contact</h2>
                <form action="{{ route('contact.store') }}" >
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                            <input type="text" id="prenom" class="border border-gray-300 rounded-md p-2 w-full" value="Arthur">
                        </div>
                        <div>
                            <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" id="nom" class="border border-gray-300 rounded-md p-2 w-full" value="Martins">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                        <input type="email" id="email" class="border border-gray-300 rounded-md p-2 w-full" value="arthur.martins@noos.fr">
                    </div>
                    <div class="mb-4">
                        <label for="entreprise" class="block text-sm font-medium text-gray-700">Entreprise</label>
                        <input type="text" id="entreprise" class="border border-gray-300 rounded-md p-2 w-full" value="Andre Mercier S.A.R.L.">
                    </div>
                    <div class="mb-4">
                        <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                        <textarea id="adresse" class="border border-gray-300 rounded-md p-2 w-full">boulevard de Guerin</textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="code_postal" class="block text-sm font-medium text-gray-700">Code postal</label>
                            <input type="text" id="code_postal" class="border border-gray-300 rounded-md p-2 w-full" value="82908">
                        </div>
                        <div>
                            <label for="ville" class="block text-sm font-medium text-gray-700">Ville</label>
                            <input type="text" id="ville" class="border border-gray-300 rounded-md p-2 w-full" value="Laurentboeuf">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="statut" class="block text-sm font-medium text-gray-700">Statut</label>
                        <select id="statut" class="border border-gray-300 rounded-md p-2 w-full">
                            <option value="Lead" selected>Lead</option>
                            <option value="Client">Client</option>
                            <option value="Prospect">Prospect</option>
                        </select>
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400" @click='openup = false'>Annuler</button>
                        <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md hover:bg-teal-600">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
