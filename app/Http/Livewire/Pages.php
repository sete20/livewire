<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\page;
class Pages extends Component
{
  use  WithFileUploads;
    public $title,$photo,$slug,$body,$is_published,
    $seo_description,$seo_keywords,$seo_title;
    public function render()
    {
        return view('livewire.pages');
    }
   public function store()
    {

        $validatedData = $this->validate([
            'title'=>'required',
            'photo'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'is_published'=>'required',
            'seo_description'=>'required',
            'seo_keywords'=>'required',
            'seo_title'=>'required'
            ]);

            $title = $this->title;
            $slug = $this->slug;
            $body = $this->body;
            $is_published = $this->author_id;
            $seo_description = $this->seo_description;
            $seo_keywords = $this->seo_keywords;
            $seo_title = $this->seo_title;
            $photo = md5($this->photo . microtime()) . '.' . $this->photo->extension();
            $photo =$this->photo->storeAs('pages', $photo);

            $page = page::create([
            'image' =>  $photo,
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
            'is_published' => $is_published,
            'seo_description' => $seo_description,
            'seo_keywords' => $seo_keywords,
            'seo_title' => $seo_title,
        ]);
    }
}
