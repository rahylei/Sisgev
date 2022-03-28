<x-layouts.sitelayout.layout>
	<x-slot name="titulo">
		- Lineas
	</x-slot>
	<x-slot name="main">
		<x-layouts.sitelayout.crud :items="$items" :cols="$cols" :numc="$numc">
			<x-slot name="subtitulo">
				Orden de lineas
			</x-slot>
			<x-slot name="descripcion">
				Todas las lineas
			</x-slot>
			<x-slot name="formulario">
          		{{route('form3')}}
			</x-slot>
			<x-slot name="edicion">
          		#	
			</x-slot>
		</x-layouts.sitelayout.crud>
	</x-slot>
</x-layouts.sitelayout.layout>