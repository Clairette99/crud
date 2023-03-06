 
@extends("layouts.master")

@section("contenu")


<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des taches </h6>
    
   <div class="mt-2">
        <div class="d-flex justify-content-end mb-4 ">
            <a href="#" class="btn btn-primary">Ajouter une nouvelle tache </a>
        </div>
        <table class="table table-bordered table-hover ">
        <thead>
          @foreach($personnels as $personnel)
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">tache</th>
            <th scope="col">Action</th>
          </tr>
          @endforeach
        </thead>
        <tbody> 
          <tr>
            <th scope="row"> {{ $personnel->id }} </th>
            <td>{{ $personnel->nom }} </td>
            <td>{{ $personnel->prenom }} </td>
            <td>{{ $personnel->tache_id }} </td>
            <td>
                <a href="#" class="btn btn-info">Ajouter</a>
                <a href="#" class="btn btn-danger">Supprimer</a>
                <a href="#" class="btn btn-modify">Modifier</a>
                <a href="#" class="btn btn-read">Lire</a>
            </td>
          </tr>
          
          
        </tbody>
        </table>
   </div>
   
  </div>

@endsection
 