<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Journal;
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showjournals()
    {
        // $user = Auth::user();
        // $journals = Journal::get();
        $journals = Journal::select('*')->get();
        return view('journals.index')->with(['journals' => $journals]);
        //  return view('journals.index', ['journals => $journals']);
        // return view('showjournals', ['journals' => $journals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createjournals()
    {
        return view('createjournals');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function savejournals(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required',
            'place' => 'required',
            'country' => 'required',
            'date' => 'required',
            'experience' => 'required',
        ]);

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
            $validated['image'] = $imagePath;
        }
        
        $journals = Journal::create([
            'image' => $validated['image'],
            'place' => $request->place,
            'country' => $request->country,
            'date' => $request->date,
            'experience' => $request->experience,
        ]);
            return redirect()->route('showjournals');
        
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function editjournals($id)
    {
        $journals = Journal::select('*')->where('id', $id)->get();

            return view('journals.edit', ['journals' => $journals]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatejournals(Request $request)
    {
        $journals = Journal::where('id', $request->id)->update([
            'image' => $request->image,
            'place' => $request->place,
            'country' => $request->country,
            'date' => $request->date,
            'experience' => $request->experience,
        ]);

        return redirect()->route('showjournals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletejournals($id)
    {
        $journals = Journal::where('id', $id)->delete();

        return redirect()->route('showjournals');
    }
}



