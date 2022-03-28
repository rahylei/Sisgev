<x-layouts.sitelayout.layout>
	<x-slot name="titulo">
		- Piezas
	</x-slot>
	<x-slot name="main">
		<x-layouts.sitelayout.crud :items="$items" :cols="$cols" :numc="$numc">
			<x-slot name="subtitulo">
				Orden de piezas
			</x-slot>
			<x-slot name="descripcion">
				Todas la piezas
			</x-slot>
			<x-slot name="formulario">
          		{{route('form')}}
			</x-slot>
			<x-slot name="edicion">
          		#	
			</x-slot>
		</x-layouts.sitelayout.crud>
	</x-slot>
</x-layouts.sitelayout.layout>