<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
	<script src="{{ mix('js/app.js') }}" defer></script> 
</head>
<body>
	<div class="flex justify-center min-h-screen pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labedlledby="modal-headline">
                <form method="POST" action="{{route('upPieza')}}" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                        <input type="number" name="id" value="{{$pieza->id}}" hidden>

                        <div class="mb-4">
                            <label for="codigo" class="block text-gray-700 text-sm font-bold mb-2">Codigo</label>
                            <input type="text" name="codigo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="codigo" value="{{$pieza->codigo}}">
                        </div>
                        
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripcion</label>
                            <input type="text" name="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" value="{{$pieza->descripcion}}">
                        </div>

                        <div class="mb-4">
                            <label for="almacen" class="block text-gray-700 text-sm font-bold mb-2">Almacen</label>
                            <input type="number" name="almacen" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" value="{{$pieza->almacen}}">
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                            <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$pieza->status}}">
                            <option>Activo</option>
                            <option>Inactivo</option>                            
                            </select>
                        </div>
                        
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                
                                <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5 text-white">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <a href="{{route('piezas')}}">
                                    <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5 text-white">Cancelar</button>    
                                </a>
                                
                            </span>                            
                        </div>
                    </div>
                </form>
            </div>
    </div>
    
</body>
</html>