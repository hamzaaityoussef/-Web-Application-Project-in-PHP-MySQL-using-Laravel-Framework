<x-ChefFiliere_layout :id="$id" :nom="$nom" :prenom="$prenom">
    @isset($reclamation)
    @foreach($reclamation as $index => $reclamation)
        <div style="background-color: rgb(39, 140, 140);width: 50%;padding: 15px;margin: 10px;border-radius: 10px;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <p>Probleme en :</p>
            <ul>
                <li>@if ($reclamation->datashow==1)  
                    <p>Data show</p> 
                    @endif</li>
                <li>@if ($reclamation->prise_internet==1)
                    <p>Prise Internet</p> 
                 @endif</li>
                <li>@if ($reclamation->chaise==1)
                    <p>Chaise</p> 
                 @endif</li>
                <li>@if ($reclamation->tableau==1)
                    <p>Tableau</p> 
                 @endif</li>
            </ul> 
            <p>Message: {{ $reclamation->description }}</p>
    @endforeach
@else
    <p>No reclamations available.</p>
@endisset
</x-ChefFiliere_layout>