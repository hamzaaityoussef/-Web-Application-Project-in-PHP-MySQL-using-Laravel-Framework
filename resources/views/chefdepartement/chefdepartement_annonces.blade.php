<x-chefdepartement_layout :id="$id" :nom="$nom" :prenom="$prenom">


        @isset($annonces)
        <div class="inline">
            <h1>mes annonces</h1>
            <a class="nvlannonce" href="{{ route('chefdepartement.createannonces', ['id' => $id, 'nom' => $nom, 'prenom' => $prenom]) }}" style="color: rgb(255, 255, 255);"><i class="fas fa-pen"></i> Nouvelle Annonce</a>
        </div>
            
            @foreach($annonces as $annonce)
            <div style="background-color: rgb(39, 140, 140); width: 50%; padding: 15px; margin: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <p style="font-size: 16px; font-weight: bold; margin-bottom: 10px;">Type d'annonce: {{ $annonce->type }} </p>
                <p style="font-size: 14px; margin-bottom: 5px;">Classe: {{ $annonce->classe }} </p>
                <p style="font-size: 14px; margin-bottom: 5px;">Description: {{ $annonce->description }}</p>
                
                <!-- Boutons Modifier et Supprimer -->
                <div style="display: flex; justify-content: space-between; margin-top: 15px;">
                    <a href="{{ route('chefdepartement.modifierannonces', ['id' => $annonce->id]) }}" style="text-decoration: none;">
                        <button style="background-color: #4CAF50; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                            Modifier
                        </button>
                    </a>
                
                    <form action="{{ route('annonces.supprimer', ['annonce' => $annonce->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this announcement?');">
                        @csrf
                        @method('delete')
                        <button style="background-color: #f44336; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;" type="submit">Supprimer</button>
                    </form>
                </div>
                
            </div>
            
            
            @endforeach
        @else
            <p>No annonces available.</p>
        @endisset
 
</x-chefdepartement_layout>
