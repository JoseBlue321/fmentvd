<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MOdels\Persona;
use App\MOdels\Evaluacion;
//pdf
use Dompdf\Dompdf;
use Dompdf\Options;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PersonaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        $request->validate([
            'carnet' => ['exists:App\Models\Persona,carnet'],
        ]);
        $carnet = $request->input('carnet');
        $personas = Persona::where('carnet','=',$carnet)->get();

        return view('calificaciones.asignatura',
        [
            'personas'=>$personas,
        ]);
        
        
    }

    public function img(string $id)
    {
        $evaluacion = Evaluacion::findOrfail($id);
        return view('calificaciones.persona',[
            'evaluacion'=>$evaluacion,
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function solicitudes(){
        return view('calificaciones.solicitudes');
    }

    public function plantilla(Request $request){
        //return $request;
         // Cargar la vista HTML
         $html = view('calificaciones.plantilla', [
            'solicitud'=>$request,
            //'qr'=>$qr,
            ])->render();

        // Configurar DomPDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->set_option('isRemoteEnabled','true');

        // (Opcional) Configurar opciones de visualización (tamaño de papel, etc.)
        $dompdf->setPaper([0, 0, 816, 1247], 'portrait');

        // Renderizar el HTML como PDF
        $dompdf->render();

        // Devolver el PDF generado como respuesta
        //return $dompdf->stream("$participante->carnet.pdf");
        return $dompdf->stream("plantilla.pdf", ['Attachment' => 0]);
    }
}
