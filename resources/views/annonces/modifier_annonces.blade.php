<x-prof_layout  :id="$id" :nom="$nom" :prenom="$prenom" >
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
    
        .container {
            background-color: #02387e;
            border: 1px solid #02387e;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: 50px auto;
        }
    
        .text-center {
            text-align: center;
        }
    
        .text-2xl {
            font-size: 24px; 
        }
    
        .font-bold {
            font-weight: bold;
        }
    
        .uppercase {
            text-transform: uppercase;
        }
    
        .mb-1 {
            margin-bottom: 8px; }
    
        .mb-4 {
            margin-bottom: 32px; 
        }
    
        .form-container {
            margin-top: 16px; 
        }
    
        .form-group {
            margin-bottom: 16px; 
        }
    
        .form-label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
        }
    
        .form-input {
            width: 100%;
            padding: 8px; 
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    
        .button-style {
            background-color: #1b4c8b;
            color: #fff;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
    
        .button-style:hover {
            background-color: #000;
        }
    
        .error {
            font-size: 16px; 
            color: red;
        }
    </style>
    
    
    <main>
        <div class="container">
            @if(isset($id))
            <p>rani khdam</p>
            
            
        @else
            <p>Error: Professor data not available.</p>
        @endif

            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Nouvelle Annonce</h2>
            </header>
            <form action="{{ route('annonces.update', ['id' => $annonce->id]) }}" method="post" class="form-container">
                @method('PUT')
                @csrf
               
                <div class="form-group">
                    
                    <label for="type" class="form-label">Titre</label>
                    <input type="text" class="form-input" name="type" value="{{  $annonce->type }}"
                        placeholder="Exemple: Annulation d'une séance, CC …" />
                    @error('type')
                        <p class="error">Titre requis</p>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="classe" class="form-label">Classe</label>
                    <input type="text" class="form-input" name="classe" value="{{  $annonce->classe }}" placeholder="en majuscule : exemple : AD,IDAI,SSD..." />
                    @error('classe')
                        <p class="error">Classe requise</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-input" cols="30" rows="10">{{ $annonce->description }}</textarea>

                </div>
                
                <button class="button-style" type="submit">modifier</button>
            </form>
        </div>
        
   </main>
       
</x-prof_layout>