<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\Movie\CreateMovieRequest;
use App\Http\Requests\Movie\UpdateMovieRequest;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;

class MovieController extends Controller
{
    public function index(Request $request): Response {
        $movies = Movie::when($request->query('search'), function($query, $search) {
            return $query->where('title', 'like', "%{$search}%");
        })
        ->paginate(10);
        return Inertia::render('Movie', ["movies" => $movies]);
    }

    public function show(Movie $movie): Response {
        return Inertia::render('EditMovie', ["movie" => $movie]);
    }

    public function create(): Response {
        return Inertia::render('CreateMovie');
    }

    public function store(CreateMovieRequest $request): RedirectResponse {
        Movie::create($request->validated());

        return redirect()->back()->with('success', 'Movie created.');
    }

    public function update(UpdateMovieRequest $request, Movie $movie): RedirectResponse {
        $movie->update($request->validated());

        return redirect()->back()->with('success', 'Movie updated.');
    }

    public function destroy(Movie $movie): RedirectResponse {
        $movie->delete();
        return redirect()->back()->with('success', 'Movie deleted.');
    }
}
