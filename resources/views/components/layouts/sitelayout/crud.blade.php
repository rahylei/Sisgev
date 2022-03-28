<div class="bg-white p-8 rounded-md w-full"> 
  <div class=" flex items-center justify-between pb-6"> 
    <div> 
      <h2 class="text-gray-600 font-semibold">
        {{$subtitulo}}
      </h2> 
      <span class="text-xs">
        {{$descripcion}}
      </span> 
    </div> 



    <div class="flex items-center justify-between"> 
      <div class="flex bg-gray-50 items-center p-2 rounded-md"> 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"> 
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" /> 
        </svg> 
        <input class="bg-gray-50 outline-none ml-1 block " type="text" name="" id="" placeholder="search..."> 
      </div> 
      <div class="lg:ml-40 ml-10 space-x-8">         
        
           
        <a href="{{$formulario}}">
          <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
            Registro
          </button> 
        </a>
        
        <a href="{{$edicion}}">
          <button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
            Edicion
          </button>
        </a>

      </div> 
    </div>
  </div> 
  <div> 
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal"> 
          <thead> 
            <tr> 
              @for($i=0; $i< $numc; $i++)
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> 
                  {{$cols[$i]}} 
                </th>
              @endfor
            </tr>
            
          </thead> 
          <tbody>
            
            @foreach($lista as $item)
              <tr>
                @for($i=0; $i< $numc; $i++)
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> 
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{ data_get($item, $cols[$i])}}
                      </p> 
                    </td>
                @endfor
              </tr>
            @endforeach 
          </tbody> 
        </table> 
        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between "> 
          <span class="text-xs xs:text-sm text-gray-900"> 
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
          </div>
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