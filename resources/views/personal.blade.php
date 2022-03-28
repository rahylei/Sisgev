<x-layouts.sitelayout.layout>
	<x-slot name="titulo">
		- Personal
	</x-slot>
	<x-slot name="main">
		<x-layouts.sitelayout.crud :items="$items" :cols="$cols" :numc="$numc">
			<x-slot name="subtitulo">
				Orden de personal
			</x-slot>
			<x-slot name="descripcion">
				Todo el personal
			</x-slot>
			<x-slot name="formulario">
          		{{route('form2')}}
			</x-slot>
			<x-slot name="edicion">
          		#	
			</x-slot>
		</x-layouts.sitelayout.crud>
	</x-slot>
</x-layouts.sitelayout.layout>