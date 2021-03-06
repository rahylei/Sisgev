<div>
<div class="bg-white p-8 rounded-md w-full "> 
  <div class=" flex items-center justify-between pb-6"> 
    <div> 
      <h2 class="text-gray-600 font-semibold">
        {{$subtitulo}}
      </h2> 
      <span class="text-xs">
        {{$descripcion}}
      </span> 
    </div> 
      <div>
       <a href="{{$formulario}}">
        <button class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
          Registro 
       </button>  
       </a>        
           
      </div> 
    </div>
  </div> 
  <div class="flex justify-around"> 
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden ">
        <table class="min-w-full leading-normal "> 
          <thead> 
            <tr> 
              @for($i=0; $i< $numc; $i++)
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> 
                  {{$cols[$i]}} 
                </th>
              @endfor
            </tr>
            
          </thead> 
          <tbody class="">
            
            @foreach($lista as $item)
              <tr>
                @for($i=0; $i< $numc; $i++)
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{ data_get($item, $cols[$i])}}
                      </p> 
                    </td>
                @endfor                             
                <td>
                  <a href="{{route('editPieza',$item->id)}}">
                    <button class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">Editar</button>  
                  </a>
                
                  <a href="{{route('deletePieza',$item->id)}}">
                    <button class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">Eliminar</button>   
                  </a>
                 
                </td>   
              </tr>
            @endforeach 

          </tbody> 
        </table> 
        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between ">
          
          {{--<span class="text-xs xs:text-sm text-gray-900"> 
            Showing 1 to 4 of 50 Entries 
          </span> 
          <div class="inline-flex mt-2 xs:mt-0"> 
            <button class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l"> 
              Prev
            </button>
              &nbsp; &nbsp;
            <button class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
              Next
            </button>
          </div>--}}
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    {{-- Replace with your content --}}
    {{--<div class="px-4 py-6 sm:px-0">
      <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
    </div>--}}
    {{-- /End replace --}}
    <!-- component -->
  </div>