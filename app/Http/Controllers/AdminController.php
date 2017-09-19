<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variables;
use App\Galeria;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePrincipal(Request $request)
    {
        $file = $request->file('imagen1');
        $file2 = $request->file('imagen2');

        if($file)
        {
            $date = date('mdYhis');
            $nombre = $file->getClientOriginalExtension();
            \Storage::disk('local')->put($date.'.'.$nombre,  \File::get($file));

            Variables::where("referencia","banner1")
            ->update(['valor' => "/images/willy/".$date.'.'.$nombre]);
        }
        if($file2)
        {
            $date = date('mdYhis');
            $nombre2 = $file2->getClientOriginalExtension();
            \Storage::disk('local')->put($date.'.'.$nombre2,  \File::get($file2));

            Variables::where("referencia","banner2")
            ->update(['valor' => "/images/willy/".$date.'.'.$nombre2]);
        }

        $titulo1=$request->TitPrin1;
        $Subtitulo1=$request->Subtit1;

        if($titulo1)
        {
            Variables::where("referencia","TitBanner1")
            ->update(['valor' => $titulo1]);
        } 
        if($Subtitulo1)
        {
            Variables::where("referencia","SubTitBanner1")
            ->update(['valor' => $Subtitulo1]);
        }
        $titulo2=$request->TitPrin2;
        $Subtitulo2=$request->Subtit2;

        if($titulo2)
        {
            Variables::where("referencia","TitBanner2")
            ->update(['valor' => $titulo2]);
        } 
        if($Subtitulo2)
        {
            Variables::where("referencia","SubTitBanner2")
            ->update(['valor' => $Subtitulo2]);
        }
        return view('administrador.bannerPrincipal');
    }

    public function changenoticias(Request $request)
    {

        $tituloNoticia1=$request->tituloNoticia1;
        $tituloNoticia2=$request->tituloNoticia2;
        $tituloNoticia3=$request->tituloNoticia3;

        $subtituloNoticia1=$request->subtituloNoticia1;
        $subtituloNoticia2=$request->subtituloNoticia2;
        $subtituloNoticia3=$request->subtituloNoticia3;
        
        $ContenidoNoticia1=$request->ContenidoNoticia1;
        $ContenidoNoticia2=$request->ContenidoNoticia2;
        $ContenidoNoticia3=$request->ContenidoNoticia3;

        if($tituloNoticia1)
        {
            Variables::where("referencia","TitNoticia1")
            ->update(['valor' => $tituloNoticia1]);
        }
        if($tituloNoticia2)
        {
            Variables::where("referencia","TitNoticia2")
            ->update(['valor' => $tituloNoticia2]);
        }
        if($tituloNoticia3)
        {
            Variables::where("referencia","TitNoticia3")
            ->update(['valor' => $tituloNoticia3]);
        }

        if($subtituloNoticia1)
        {
            Variables::where("referencia","SubTitNoticia1")
            ->update(['valor' => $subtituloNoticia1]);
        }
        if($subtituloNoticia2)
        {
            Variables::where("referencia","SubTitNoticia2")
            ->update(['valor' => $subtituloNoticia2]);
        }
        if($subtituloNoticia3)
        {
            Variables::where("referencia","SubTitNoticia3")
            ->update(['valor' => $subtituloNoticia3]);
        }

        if($ContenidoNoticia1)
        {
            Variables::where("referencia","textNoticia1")
            ->update(['valor' => $ContenidoNoticia1]);
        }
        if($ContenidoNoticia2)
        {
            Variables::where("referencia","textNoticia2")
            ->update(['valor' => $ContenidoNoticia2]);
        }
        if($ContenidoNoticia3)
        {
            Variables::where("referencia","textNoticia3")
            ->update(['valor' => $ContenidoNoticia3]);
        }

        return view('administrador.noticias');

    }    

    public function changeGaleria(Request $request)
    {
        $file = $request->file('ImgGal1');
        $file2 = $request->file('ImgGal2');
        $file3 = $request->file('ImgGal3');
        $file4 = $request->file('ImgGal4');
        $file5 = $request->file('ImgGal5');
        $file6 = $request->file('ImgGal6');

        if($file)
        {
            $nombre = $file->getClientOriginalName();
            \Storage::disk('local')->put($nombre,  \File::get($file));

            Galeria::where("referencia","foto1")
            ->update(['valor' => "/images/willy/".$nombre]);

            Galeria::where("referencia","FotoGrande1")
            ->update(['valor' => "/images/willy/".$nombre]);
        }

        if($file2)
        {
            $nombre2 = $file2->getClientOriginalName();
            \Storage::disk('local')->put($nombre2,  \File::get($file2));

            Galeria::where("referencia","foto2")
            ->update(['valor' => "/images/willy/".$nombre2]); 

            Galeria::where("referencia","FotoGrande2")
            ->update(['valor' => "/images/willy/".$nombre2]);
        }

        if($file3)
        {
            $nombre3 = $file3->getClientOriginalName();
            \Storage::disk('local')->put($nombre3,  \File::get($file3));

            Galeria::where("referencia","foto3")
            ->update(['valor' => "/images/willy/".$nombre3]);

            Galeria::where("referencia","FotoGrande3")
            ->update(['valor' => "/images/willy/".$nombre3]);
        }
        if($file4)
        {
            $nombre4 = $file4->getClientOriginalName();
            \Storage::disk('local')->put($nombre4,  \File::get($file4));

            Galeria::where("referencia","foto4")
            ->update(['valor' => "/images/willy/".$nombre4]);

            Galeria::where("referencia","FotoGrande4")
            ->update(['valor' => "/images/willy/".$nombre4]);
        }
        if($file5)
        {
            $nombre5 = $file5->getClientOriginalName();
            \Storage::disk('local')->put($nombre5,  \File::get($file5));

            Galeria::where("referencia","foto5")
            ->update(['valor' => "/images/willy/".$nombre5]);

            Galeria::where("referencia","FotoGrande5")
            ->update(['valor' => "/images/willy/".$nombre5]);
        }
        if($file6)
        {
            $nombre6 = $file6->getClientOriginalName();
            \Storage::disk('local')->put($nombre6,  \File::get($file6));

            Galeria::where("referencia","foto6")
            ->update(['valor' => "/images/willy/".$nombre6]);
            
            Galeria::where("referencia","FotoGrande6")
            ->update(['valor' => "/images/willy/".$nombre6]);
        }

        return view('administrador.galeria');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function bannerPrincipal()
    {
        return view('administrador.bannerPrincipal');
    }

    public function noticias()
    {
        return view('administrador.noticias');
    } 

    public function eventos()
    {
        return view('administrador.eventos');
    }
    public function galeria()
    {
        return view('administrador.galeria');
    }

    public function instagram()
    {
        return view('administrador.instagram');
    }
}