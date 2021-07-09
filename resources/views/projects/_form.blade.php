@csrf 
<label>
    Titulo de nuevo proyecto <br>
    <input type="text" name="title" value="{{old('title', $project->title)}}"><br>
</label>
<br>
<label >
    URL del proyecto <br>
    <input type="text" name="url" value="{{old('url', $project->url)}}"><br><br>
</label>
<br>
<label>
    Descripción del proyecto <br>
    <textarea name="description" >{{old('description', $project->description)}}</textarea><br><br>
</label>
<br>
<button>{{$button_text}}</button>