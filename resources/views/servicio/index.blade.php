<!-- resources/views/servicio/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            EASY TIME
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('servicio.create') }}"></a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
               
   
                <h1 class="text-2xl font-bold mb-4">Servicios de lavado</h1>

                <table id="servicio" class="w-full text-sm border-solid text-center rtl:text-right text-black dartk:text-black">
                    <!-- Cabecera -->
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 border">Nombre del servicio</th>
                            <th class="px-4 py-2 border">Duración</th>
                            <th class="px-4 py-2 border">Descripción</th>
                            <th class="px-4 py-2 border">Precio</th>
                            <th class="px-4 py-2 border">Acciones</th>
                        </tr>
                    </thead>

                    <!-- Cuerpo de la tabla -->
                    <tbody>
                        @foreach ($servicios as $ser)
                            <tr>
                                <td class="px-4 py-2 border">{{ $ser->NOM_SERV }}</td>
                                <td class="px-4 py-2 border">{{ $ser->DURACION_SERV}}</td>
                                <td class="px-4 py-2 border">{{ $ser->DESCP_SERV}}</td>
                                {{--<td class="px-4 py-2 border">${{ number_format($ser->PRECIO, 0, ',', '.') }}</td> --}}
                                 <td class="px-4 py-2 border">{{ $ser->PRECIO_SERV }}</td>
                                <td class="px-4 py-2 border">
                        <a href="/editar/{{ $ser->id }}" 
                       class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">
                        Editar
                         </a>
                      <a href="/eliminar/{{ $ser->id }}" 
                       class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded ">
                Eliminar
                         </a>
                            </td>                 
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    {{-- jQuery + DataTables (CDN) --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script>
$(function() {
$('#servicio').DataTable({
pageLength: 20,
dom: 'Bfrtip',

language: {
url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
},
buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
});
});
</script>
</x-app-layout>
           
