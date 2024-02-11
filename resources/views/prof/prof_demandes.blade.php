<x-prof_layout :id="$id" :nom="$nom" :prenom="$prenom">

    @section('css')
        <link rel="stylesheet" type="text/css" href="{{ asset("css/demandescreen.css") }}" />
    @endsection

    @section('annonceinline')
        p {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: aliceblue;
        }

        .hidden {
            display: none;
        }
    @endsection
{{-- {{dd($demande)}} --}}
    @isset($demande)
        @foreach($demande as $index => $demande)
            <div style="background-color: rgb(39, 140, 140);width: 50%;padding: 15px;margin: 10px;border-radius: 10px;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <p>objet: {{ $demande->type }} </p>
                <p>nom etudiant : {{ $demande->etudiant->nom ." ". $demande->etudiant->prenom }}</p>
                <p>email etudiant: {{ $demande->from }} </p>
                <p>Message: {{ $demande->message }}</p>
                <button id="showFormButton{{ $index }}">Répondre</button>

                <div id="responseForm{{ $index }}" class="hidden">
                    <div class="container">
                        <div class="text-center text-2xl font-bold uppercase mb-4">
                            Formulaire pour reponde au Demandes
                        </div>

                        @if(session('success'))
                            <div class="text-center text-2xl font-bold uppercase mb-4" style="color: green;">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="/prof/prof_demandes" method="post" class="form-container">
                            @csrf

                            <div class="form-group mb-1">
                                <label for="type" class="form-label">titre :</label>
                                <input type="text" name="type" class="form-input" required>
                            </div>

                            <div class="form-group mb-1">
                                <label for="to" class="form-label">To :</label>
                                <input type="text" name="to" class="form-input" required>
                            </div>

                            <div class="form-group mb-1">
                                <label for="message" class="form-label">Message :</label>
                                <textarea name="message" class="form-input" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="button-style">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                document.getElementById('showFormButton{{ $index }}').addEventListener('click', function () {
                    document.getElementById('responseForm{{ $index }}').classList.toggle('hidden');
                });
            </script>
        @endforeach
    @else
        <p>No demandes available.</p>
    @endisset
</x-prof_layout>
