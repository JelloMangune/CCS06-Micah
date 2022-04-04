<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicahController extends Controller
{
    const BIBLE_NAME = 'Micah';
    const BIBLE_VERSION = 'King James Version';
    const CHAPTERS = 7;

    public function index()
    {
        return view('index',[
            'bible_name' => static::BIBLE_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'chapters' => static::CHAPTERS
    ]);
    }

    public function readByChapter($chapter_number)
    {
        return view('read-chapter',[
            'bible_name' => static::BIBLE_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'chapters' => static::CHAPTERS,
            'chapter_number' => $chapter_number
        ]);
    }

    public function readAllChapters()
    {
        return view('all-chapters',[
            'bible_name' => static::BIBLE_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'chapters' => static::CHAPTERS
        ]);
    }
}
