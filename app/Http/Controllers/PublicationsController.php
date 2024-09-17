<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    // Метод для отображения всех новостей
    public function getIndex()
    {
        $news = Publications::all();
        return view('publications', compact('news'));
    }

    // Метод для отображения формы создания новости
    public function create()
    {
        return view('news.create');
    }

    // Метод для сохранения новой новости
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'url' => 'nullable|string',
            'published_at' => 'required|date',
        ]);

        Publications::create($request->all());

        return redirect()->route('publications')->with('success', 'Новость успешно создана.');
    }

    // Метод для отображения конкретной новости
    public function show($id)
    {
        $news = Publications::findOrFail($id);
        return view('news.show', compact('news'));
    }

    // Метод для отображения формы редактирования новости
    public function edit($id)
    {
        $news = Publications::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    // Метод для обновления новости
    public function update(Request $request, $id)
    {
        $request->validate([
            'url' => 'nullable|string',
            'published_at' => 'required|date',
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $news = Publications::findOrFail($id);
        $news->update($request->all());

        return redirect()->route('publications')->with('success', 'Новость успешно обновлена.');
    }

    // Метод для удаления новости
    public function destroy($id)
    {
        $news = Publications::findOrFail($id);
        $news->delete();

        return redirect()->route('publications')->with('success', 'Новость успешно удалена.');
    }
}
