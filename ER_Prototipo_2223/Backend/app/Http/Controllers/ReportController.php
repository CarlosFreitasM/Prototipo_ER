<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Tag;
use App\Models\State;
use App\Models\Entity;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();
        $tags = Tag::all();
        $entity = Entity::all();
        return view('pages.dashboardTecnico', ['tecReports'=>$reports, 'tecTagger'=>$tags, 'tecAdd'=>$entity]);
    }

    public function indexin()
    {
        $reports = Report::all();
        $tags = Tag::all();
        $states = State::all();
        return view('pages.dashboardEntidade', ['entReports'=>$reports, 'tecTagger'=>$tags, 'stateReport'=>$states]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createReport');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name= $request["fullname"];
        $email=$request["email"];
        $phone=$request["phone"];
        $description=$request["message"];
        $tag=$request["tagsName"];
        $state=$request["state"];
        $reports=new Report();
        $reports->fullname_cliente = $name;
        $reports->email_report = $email;
        $reports->phone_report = $phone;
        $reports->description = $description;
        $reports->tag = $tag;
        $reports->state = $state;
        $reports->save();
        return redirect('/')->with('mensagem','Reporte criado');
    }

    public function storeent(Request $request)
    {
        
        $name= $request["entName"];
        if(Entity::where('entityName', '=', $name)->exists()) {
            return redirect('/tec')->with('erroreg','Tag atribuida não existe na base de dados');
         }
        else{
            $registertag=$request["regTag"];
            $entity=new Entity();
            $entity->entityName = $name;
            $entity->tag = $registertag;
            $entity->save();
            return redirect('/tec')->with('mensagem','Entidade criada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reports = Report::findOrFail($id);
        
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
        $reports = Report::findOrFail($id);
        $tagname = $request["tagName"];
        if($tagname=="erro"){
            
            return redirect('/tec')->with('erro','Tag atribuida não existe na base de dados');
        }
        else{
            $reports->tag = $tagname;
            $reports->update();
            return redirect('/tec')->with('mensagem','Tag atribuida com sucesso');
      
        }
    }

    public function updateent(Request $request, $id)
    {
        $reports = Report::findOrFail($id);
        $statename = $request["stateName"];
        $reports->state = $statename;
        $reports->update();
        return redirect('/ent')->with('mensagem','State atribuida com sucesso');
    }

    public function updatephi(Request $request, $id)
    {
        $reports = Report::findOrFail($id);
        $statename = $request["stateName"];
        $reports->state = $statename;
        $reports->update();
        return redirect('/entphising')->with('mensagem','State phishing atribuida com sucesso');
    }

    public function updatepha(Request $request, $id)
    {
        $reports = Report::findOrFail($id);
        $statename = $request["stateName"];
        $reports->state = $statename;
        $reports->update();
        return redirect('/entpharming')->with('mensagem','State pharming atribuida com sucesso');
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
}
