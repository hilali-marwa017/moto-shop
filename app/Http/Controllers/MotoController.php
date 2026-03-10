<?php
namespace App\Http\Controllers;
use App\Models\Moto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MotoController extends Controller
{
    public function index(Request $request)
    {
        $query = Moto::query();
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
        if ($request->filled('ville')) {
            $query->where('ville', 'like', '%' . $request->ville . '%');
        }
        if ($request->filled('statut')) {
            $query->where('statut', $request->statut);
        }
        $motos = $query->get();
        return view('motos.index', compact('motos'));
    }

    public function create()
    {
        return view('motos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre'=> 'required|string|min:3',
            'marque'=> 'required|string|min:2',
            'type'=> 'required|in:Sportive,Routiere,Chopper,Cross,Scooter,Autre',
            'ville'=> 'required|string',
            'annee' => 'required|integer|min:1900|max:2026',
            'kilometrage'=> 'required|integer|min:0',
            'prix'=> 'required|numeric|min:0',
            'description'=> 'nullable|string',
            'photo'=> 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $moto = Moto::create($request->except('photo'));
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = Str::slug($request->titre) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $moto->photo = $file->storeAs('motos', $filename, 'public');
            $moto->save();
        }
        return redirect()->route('motos.index')->with('success', 'Moto ajoutée !');
    }

    public function show(Moto $moto)
    {
        return view('motos.show', compact('moto'));
    }

    public function edit(Moto $moto)
    {
        return view('motos.edit', compact('moto'));
    }

    public function update(Request $request, Moto $moto)
    {
        $request->validate([
            'titre'=> 'required|string|min:3',
            'marque'=> 'required|string|min:2',
            'type'=> 'required|in:Sportive,Routiere,Chopper,Cross,Scooter,Autre',
            'ville'=> 'required|string',
            'annee' => 'required|integer|min:1900|max:2026',
            'kilometrage'=> 'required|integer|min:0',
            'prix'=> 'required|numeric|min:0',
            'description'=> 'nullable|string',
            'photo'=> 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $moto->update($request->except('photo'));
        if ($request->hasFile('photo')) {
            if ($moto->photo) Storage::disk('public')->delete($moto->photo);
            $file = $request->file('photo');
            $filename = Str::slug($request->titre) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $moto->photo = $file->storeAs('motos', $filename, 'public');
            $moto->save();
        }
        return redirect()->route('motos.index')->with('success', 'Moto modifiée !');
    }

    public function destroy(Moto $moto)
    {
        if ($moto->photo) Storage::disk('public')->delete($moto->photo);
        $moto->delete();
        return redirect()->route('motos.index')->with('success', 'Moto supprimée !');
    }

    public function changerStatut(Moto $moto)
    {
        $moto->statut = $moto->statut === 'disponible' ? 'vendue' : 'disponible';
        $moto->save();
        return redirect()->route('motos.index');
    }

    public function dashboard()
    {
        $stats = [
            'total'=> Moto::count(),
            'disponibles'=> Moto::where('statut', 'disponible')->count(),
            'vendues'=> Moto::where('statut', 'vendue')->count(),
            'prix_moyen'=> Moto::avg('prix'),
            'prix_total'=> Moto::where('statut', 'disponible')->sum('prix'),
        ];
        return view('dashboard', compact('stats'));
    }
}